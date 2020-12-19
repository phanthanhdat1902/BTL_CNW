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

    /*

     * Ham thuc hien chuc nang tim kiem tour theo thanh pho     */

    function searchTour() {
        if (isset($_GET['toCity'])) {
            $city = base64_decode($_GET['toCity']);
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
                $item['departures'] = $temp;
                array_push($result, $item);
            endforeach;
            $this->set('listTour', $result);
        }
    }

    function encodingUrl() {
        if (isset($_GET['toCity'])) {
            $url = BASE_PATH . 'tours/searchTour?toCity=' . base64_encode(($_GET['toCity']));
            $this->render = 0;
            header("Location:" . $url);
        }
    }

    function findTourByThemeId($themeId) {
        $this->Tour->where('id_theme', $themeId);
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
            $item['departures'] = $temp;
            array_push($result, $item);
        endforeach;
        return $result;
    }

    /*

     * Ham thuc hien chuc nang lay thong tin ve Tour theo ID     */

    function afterAction() {
        
    }

    function view($idTour = null) {
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
        $transportation = performAction('tour_transportations', 'findTrasportation', array($tour['Tour']['id_transportation']));
        $reviewUsers = performAction('review_tours', 'findReviewById', array($idTour));
        $departures = performAction('departures', 'findDepartureById', array($idTour));
        $tour['Tour']['service_tours'] = $service_tour;
        $tour['Tour']['city'] = $city;
        $tour['Tour']['transportation'] = $transportation;
        $tour['Tour']['reviewUsers'] = $reviewUsers;
        $tour['Tour']['departures'] = $departures;
        $this->set('tour', $tour['Tour']);
//        header("Location:" . BASE_PATH . '');
    }

}
