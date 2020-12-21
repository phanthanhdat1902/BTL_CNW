<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tourscontroller
 *
 * @author dat.pt173001
 */
class ToursController extends Controller {

    function beforeAction() {
        //check cookie
    }

    function asNumber($value) {
        if ($value < 0)
            return "-" . asDollars(-$value);
        $array = str_split($value);
        $result = null;
        foreach ($array as $item):
            if ($item != '.') {
                $result .= $item;
            }
        endforeach;
        return $result;
    }

    /*

     * Ham thuc hien chuc nang tim kiem tour theo thanh pho     */

    function searchTour() {
        $toCity = "SOG6oSBMb25n";
        if (isset($_GET['toCity'])) {
            $toCity = $_GET['toCity'];
        }
        $city = base64_decode($toCity);
        $this->Tour->like('name', $city);
        $fields = array();
        array_push($fields, 'id_tour');
        array_push($fields, 'name');
        array_push($fields, 'number_of_reviews');
        array_push($fields, 'score');
        array_push($fields, 'price_per_adult');
        array_push($fields, 'thumbnail');
        $listTours = $this->Tour->search($fields);
        $result = array();
        foreach ($listTours as $item) :
            $temp = performAction('departures', 'findDepartureById', array($item['Tour']['id_tour']));
            $tag = performAction('tag_tours', 'findTagTourById', array($item['Tour']['id_tour']));
            $item['departures'] = $temp;
            $item['tags'] = $tag;
            array_push($result, $item);
        endforeach;
        $this->set('listTour', $result);
    }

    function encodingUrl() {
        if (isset($_GET['toCity'])) {
            $url = BASE_PATH . 'tours/searchTour?toCity=' . base64_encode(($_GET['toCity']));
            $this->render = 0;
            header("Location:" . $url);
        }
    }

    function findTourByThemeId($themeId) {
        $this->Tour->where('id_theme_tour', $themeId);
        $fields = array();
        array_push($fields, 'id_tour');
        array_push($fields, 'name');
        array_push($fields, 'number_of_reviews');
        array_push($fields, 'score');
        array_push($fields, 'price_per_adult');
        array_push($fields, 'thumbnail');
        $listTours = $this->Tour->search($fields);
        $result = array();
        foreach ($listTours as $item) :
            $temp = performAction('departures', 'findDepartureById', array($item['Tour']['id_tour']));
            $tag = performAction('tag_tours', 'findTagTourById', array($item['Tour']['id_tour']));
            $item['departures'] = $temp;
            $item['tags'] = $tag;
            array_push($result, $item);
        endforeach;
        return $result;
    }

    function updateTour($tourId) {
        $this->Tour->id = $tourId;
        $this->Tour->name = $_POST['nameTour'];
        $this->Tour->id_theme_tour = $_POST['theme_tour'];
        $this->Tour->number_of_days = $_POST['day'];
        $this->Tour->number_of_nights = $_POST['night'];
        $uploads_dir = 'http://localhost/BTL_CNW/public/img';
        if ($_FILES['img_thumnail']) {
            $this->Tour->thumbnail = $_FILES['img_thumnail']['name'];
            $tmp_name1 = $_FILES['img_thumnail']['name'];
            $name1 = basename($_FILES['img_thumnail']['name']);
            move_uploaded_file($tmp_name1, "$uploads_dir/$name1");
        }
        $this->Tour->introduction_heading = $_POST['introduction_heading'];
        $this->Tour->introduction = $_POST['introduction_content'];
        $this->Tour->description_heading = $_POST['description_heading'];
        $this->Tour->description = $_POST['description_content'];
        $this->Tour->term_surcharge = $_POST['term_surcharge'];
        $this->Tour->term_price_included = $_POST['term_price_included'];
        $this->Tour->term_price_not_included = $_POST['term_price_not_included'];
        $this->Tour->term_cancelling = $_POST['term_cancelling'];
        $this->Tour->term_note = $_POST['term_note'];
        $this->Tour->price_per_adult = $this->asNumber($_POST['price_per_adult']);
        $this->Tour->price_per_adult = $this->asNumber($_POST['price_per_child']);
        $this->Tour->save();
        performAction('service_tours', 'deleteServiceByTourId', array($tourId));
        foreach ($_POST['service_tour'] as $item) {
            performAction('Service_tours', 'addService', array($tourId, $item));
        }
        performAction('schedules', 'deleteSchedulesById', array($tourId));
        $dayNumber = $_POST['day_number'];
        for ($i = 0; $i < count($dayNumber); $i++) {
            performAction('Schedules', 'addSchedules', array($tourId, $dayNumber[$i], $_POST['title'][$i], $_POST['description'][$i], $_FILE['image1']['name'][$i], $_FILE['caption1'][$i], $_FILES['image2']['name'][$i], $_POST['caption2'][$i]));
            $tmp_name1 = $_FILES["image1"]["name"][$i];
            $tmp_name2 = $_FILES["image2"]["name"][$i];
            $name1 = basename($_FILES["image1"]["name"][$i]);
            $name2 = basename($_FILES["image2"]["name"][$i]);
            move_uploaded_file($tmp_name1, "$uploads_dir/$name1");
            move_uploaded_file($tmp_name2, "$uploads_dir/$name2");
        }
        performAction('departures', 'deleteDeparturesByTourId', array($tourId));
        $start_date = $_POST['start_date'];

        for ($i = 0; $i < count($start_date); $i++) {
            performAction('departures', 'addDeparture', array($tourId, $start_date[$i], $_POST['end_date'][$i], $_POST['holiday_surcharge'][$i]));
        }
    }

    function addTour() {
        $this->Tour->name = $_POST['nameTour'];
        $this->Tour->id_theme_tour = $_POST['theme_tour'];
        $this->Tour->number_of_days = $_POST['day'];
        $this->Tour->number_of_nights = $_POST['night'];
        $uploads_dir = 'http://localhost/BTL_CNW/public/img';
        if ($_FILES['img_thumnail']) {
            $this->Tour->thumbnail = $_FILES['img_thumnail']['name'];
            $tmp_name1 = $_FILES['img_thumnail']['name'];
            $name1 = basename($_FILES['img_thumnail']['name']);
            move_uploaded_file($tmp_name1, "$uploads_dir/$name1");
        }
        $this->Tour->introduction_heading = $_POST['introduction_heading'];
        $this->Tour->introduction = $_POST['introduction_content'];
        $this->Tour->description_heading = $_POST['description_heading'];
        $this->Tour->description = $_POST['description_content'];
        $this->Tour->term_surcharge = $_POST['term_surcharge'];
        $this->Tour->term_price_included = $_POST['term_price_included'];
        $this->Tour->term_price_not_included = $_POST['term_price_not_included'];
        $this->Tour->term_cancelling = $_POST['term_cancelling'];
        $this->Tour->term_note = $_POST['term_note'];
        $this->Tour->price_per_adult = $this->asNumber($_POST['price_per_adult']);
        $this->Tour->price_per_adult = $this->asNumber($_POST['price_per_child']);
        $this->Tour->save();
        $tourId = $this->Tour->getLastId();
        foreach ($_POST['service_tour'] as $item) {
            performAction('Service_tours', 'addService', array($tourId, $item));
        }
        $dayNumber = $_POST['day_number'];
        for ($i = 0; $i < count($dayNumber); $i++) {
            performAction('Schedules', 'addSchedules', array($tourId, $dayNumber[$i], $_POST['title'][$i], $_POST['description'][$i], $_FILE['image1']['name'][$i], $_FILE['caption1'][$i], $_FILES['image2']['name'][$i], $_POST['caption2'][$i]));
            $tmp_name1 = $_FILES["image1"]["name"][$i];
            $tmp_name2 = $_FILES["image2"]["name"][$i];
            $name1 = basename($_FILES["image1"]["name"][$i]);
            $name2 = basename($_FILES["image2"]["name"][$i]);
            move_uploaded_file($tmp_name1, "$uploads_dir/$name1");
            move_uploaded_file($tmp_name2, "$uploads_dir/$name2");
        }
        $start_date = $_POST['start_date'];
        for ($i = 0; $i < count($start_date); $i++) {
            performAction('departures', 'addDeparture', array($tourId, $start_date[$i], $_POST['end_date'][$i], $_POST['holiday_surcharge'][$i]));
        }
    }

    function deleteTour($tourId) {
        $this->Tour->id = $tourId;
        $this->Tour->delete();
    }

    /*

     * Ham thuc hien chuc nang lay thong tin ve Tour theo ID     */

    function view($idTour = null) {
        if (isset($idTour)) {
            $this->doNotRenderSearch = 1;
            $this->Tour->id = $idTour;
            $tour = $this->Tour->search();
            $tour['Tour']['introduction'] = explode('\n', $tour['Tour']['introduction']);
            $tour['Tour']['description'] = explode('\n', $tour['Tour']['description']);
            $tour['Tour']['term_surcharge'] = explode('\n', $tour['Tour']['term_surcharge']);
            $tour['Tour']['term_price_included'] = explode('\n', $tour['Tour']['term_price_included']);
            $tour['Tour']['term_price_not_included'] = explode('\n', $tour['Tour']['term_price_not_included']);
            $tour['Tour']['term_cancelling'] = explode('\n', $tour['Tour']['term_cancelling']);
            $tour['Tour']['term_note'] = explode('\n', $tour['Tour']['term_note']);
            $service_tour = performAction('service_tours', 'findService', array($idTour));
            $city = performAction('cities', 'findCity', array($tour['Tour']['id_city']));
            $transportation = performAction('tour_transportations', 'findTrasportation', array($tour['Tour']['id_tour_transportation']));
            $reviewUsers = performAction('review_tours', 'findReviewById', array($idTour));
            $departures = performAction('departures', 'findDepartureByIdTour', array($idTour));
            $schedules = performAction('schedules', 'findSchedules', array($idTour));
            $tour['Tour']['service_tours'] = $service_tour;
            $tour['Tour']['city'] = $city;
            $tour['Tour']['transportation'] = $transportation;
            $tour['Tour']['reviewUsers'] = $reviewUsers;
            $tour['Tour']['departures'] = $departures;
            $tour['Tour']['schedules'] = $schedules;
            $this->set('tour', $tour['Tour']);
            return $tour['Tour'];
        } else {
            return null;
        }
//        header("Location:" . BASE_PATH . '');
    }

    function viewall($page = 1, $limit = 10) {
        $this->Tour->setLimit($limit);
        $this->Tour->setPage($page);
        $this->Tour->leftOn('Theme_tours', 'id_theme_tour');
        $this->Tour->leftOn('Cities', 'id_city');
        return $this->Tour->search();
    }

    function getTotal($limit = 10) {
        $this->Tour->setLimit($limit);
        return $this->Tour->totalPages();
    }

    function viewallnopage() {
        return $this->Tour->search();
    }

    function afterAction() {
        
    }

}
