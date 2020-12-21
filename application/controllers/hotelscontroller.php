<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hotelscontroller
 *
 * @author dat.pt173001
 */
class HotelsController extends Controller {

    function beforeAction() {
        
    }

    function viewall() {
        
    }
    
    function findHotelByListOfIdLocation($list_id_location) {
        $query = 'SELECT * FROM hotels'
               . 'WHERE id_location IN (';
        foreach ($list_id_location as $id_location) :
            $query .= $id_location.', ';
        endforeach;
        $query = substr($query, 0, -2);
        $query .= ')';
        return $this->Hotel->query($query);    
    }
    
    function findHotelExtraByListOfIdLocation($list_id_loction) {
        $listHotel = findHotelByListOfIdLocation($list_id_location);
        $result = array();
        foreach ($listHotel as $hotel) :
            $starter_price = performAction('starter_packages' 
                                          ,'findStarterPackageByIdHotel' 
                                          ,array($hotel['Hotel']['id_hotel']));
            $combo = performAction('combos', 'findComboByIdHotel'
                                   , array($hotel['Hotel']['id_hotel']));
            $hotel['Hotel']['startPrice'] = $starter_price;
            $hotel['Hotel']['combo'] = $combo;
            array_push($result, $hotel);
        endforeach;
        return $result;
    }
    
    function findHotelByIdLocation($id_location) {
        $this->Hotel->where('id_location', $id_location);
        return $this->Hotel->search();
    }
    
    function findIdHotelByListOfIdLocation($list_id_location) {
        return $this->findHotelByListOfIdLocation($id_location)['Hotel']['id_hotel'];    
    }
    
    function findHotelByListOfIdHotel($list_id_hotel) {
        $query = 'SELECT * FROM hotels'
               . 'WHERE id_hotel IN (';
        foreach ($list_id_hotel as $id_hotel) :
            $query .= $id_hotel.', ';
        endforeach;
        $query = substr($query, 0, -2);
        $query .= ')';
        return $this->Hotel->query($query);
    }
    
    function findHotelExtraByIdCity($id_city) {    
        $list_id_location = performAction('locations', 'findIdLocationByIdCity', array($id_city));    
        return $this->findHotelExtraByListOfIdLocation($list_id_location);
    }
    
    function findHotelByThemeId($id_theme_hotel) {
        $query = 'SELECT title, cities.name, price_per_night'
              . ' FROM hotels JOIN locations ON hotels.id_location = locations.id_location'
              . ' JOIN cities ON cities.id_city = locations.id_city'
              . ' JOIN starter_packages ON hotels.id_hotel = starter_packages.id_hotel'
              . ' JOIN packages ON (starter_packages.id_type_of_room = packages.id_type_of_room'
              . ' AND starter_packages.id_service_room = packages.id_service_room'
              . ' WHERE id_theme_hotel = '.$id_theme_hotel;
        return $this->Hotel->custom($query);
    }
    
    
    /*
     * Hàm tìm danh sách hotel
     * Trả về danh sách hotel, kèm giá khởi điểm và combo của chúng
        Khi thực hiện search Hotel với đầu vào là text input chứa keyword
     * search, số người lớn, số trẻ em, số lượng phòng
     * Ta sẽ truy vấn với giả sử keyword là tên tỉnh thành, (1)
     * nếu không tìm ra được bản ghi thì ta tiếp tục truy vấn với giả sử
     * keyword là tên khách sạn. (2)
     * (1)+ Tìm các id_location thuộc về city
     *    + Tìm các id_hotel thuộc về id_location
     *    + Trong bảng nối giữa bảng hotel và bảng room, tìm các hotel có id là
     *    id_hotel tìm được ở trên, và có số lượng phòng thoả mãn yêu cầu về số
     *    người lớn, số trẻ em lớn hơn hoặc bằng số lượng phòng của request
     * (2)+Truy vấn xem hotel có đủ phòng trống như request hay không
     * 
     * Dùng một biến typeOfSearch để báo cho view biết loại truy vấn là gì
     * 0 là truy ván theo tên thành phố/ tỉnh
     * 1 là truy vấn theo tên khách sạn
     * Ham thuc hien chuc nang tim kiem hotel theo thanh pho     */
    
    function searchHotel() {
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }
        if (isset($_POST['number_of_rooms'])) {
            $number_of_rooms = $_POST['number_of_rooms'];
        }
        if (isset($_POST['number_of_adults'])) {
            $number_of_adults = $_POST['number_of_adults'];
        }
        if (isset($_POST['number_of_children'])) {
            $number_of_children = $_POST['number_of_children'];
        }
        if (isset($_POST['checkin_date'])) {
            $checkin_date = $_POST['checkin_date'];
        }
        if (isset($_POST['checkout_date'])) {
            $checkout_date = $_POST['checkout_date'];
        }
        
        //Chuẩn hoá dữ liệu $city
        $city = ucwords(strtolower($keyword));
        
        
        $query = '';
        $id_city = performAction('locations', 'findIdCityByCityName', array($city));
        if (!empty($id_city)) {
            $this->set('typeOfSearch', 0);
            
            //Lấy các area thuộc city để chuẩn bị cho view tiếp theo
            $list_of_area = performAction('areas', 'findAreaByIdCity', array($id_city));
            this.set('listArea', $list_of_area);
            
            $list_id_location = performAction('locations', 'findIdLocationByIdCity', array($id_city));    
            $list_id_hotel = $this->findIdHotelByListOfIdLocation($list_id_location);

            $query = 'SELECT hotels.id_hotel'
                  . ' FROM hotels'
                  . ' LEFT JOIN type_of_rooms'
                  . ' ON hotels.id_hotel = type_of_rooms.id_hotel'
                  . ' LEFT JOIN rooms'
                  . ' ON type_of_rooms.id_type_of_room = rooms.id_type_of_room'
                  . ' WHERE id_hotel IN (';        
            foreach ($list_id_hotel as $id_hotel) :
                $query .= $id_hotel.', ';
            endforeach;

            $query = substr($query, 0, -2);
            $query .= ')'
                   . ' AND adult_capacity >= '.$number_of_adults
                   . ' AND (adult_capacity - '.$number_of_adults.' + '
                   . ' children_capacity) >= '.$number_of_children
                   . ' AND availability = 1'
                   . ' GROUP BY hotels.id_hotel'
                   . ' HAVING COUNT(DISTINCT(id_room)) >= '.$number_of_rooms;
            
        } else {
            $this->set('typeOfSearch', 1);
            
            $query = 'SELECT hotels.id_hotel'
                  . ' FROM hotels'
                  . ' LEFT JOIN type_of_rooms'
                  . ' ON hotels.id_hotel = rooms.id_hotel'
                  . ' LEFT JOIN rooms'
                  . ' ON type_of_rooms.id_type_of_room = rooms.id_type_of_room'
                  . ' WHERE title LIKE \''.$keyword.'\''      
                  . ' AND adult_capacity >= '.$number_of_adults
                  . ' AND (adult_capacity - '.$number_of_adults.' +'
                  . ' children_capacity) >= '.$number_of_children
                  . ' AND availability = 1'
                  . ' GROUP BY hotels.id_hotel'
                  . ' HAVING COUNT(DISTINCT(id_room)) >= '.$number_of_rooms;
            
        }
        $list_id_hotel_filtered = array();
        $tmpList = $this->Hotel->custom($query);
        foreach ($tmpList as $tmp):
            array_push($list_id_hotel_filtered, $tmp['Hotel']['id_hotel']);
        endforeach;
        $listHotel = $this->Hotel->findHotelByListOfIdHotel($list_id_hotel_filtered);
        
        //Tìm giá khởi điểm và combo của hotel
        $result = array();
        foreach ($listHotel as $hotel) :
            $starter_price = performAction('starter_packages' 
                                          ,'findStarterPackageByIdHotel' 
                                          ,array($hotel['Hotel']['id_hotel']));
            $combo = performAction('combos', 'findComboByIdHotel'
                                   , array($hotel['Hotel']['id_hotel']));
            $hotel['Hotel']['startPrice'] = $starter_price;
            $hotel['Hotel']['combo'] = $combo;
            array_push($result, $hotel);
        endforeach;
        
        $this->set('listHotel', $result);
        return $result;
    }
    
    /*

     * Hàm lọc kết quả tìm kiếm hotel theo hạng sao, khu vực, loại hình
     * nhà ở, tiện ích
     *      */
    function filterHotel() {
        if (isset($_POST['star_rating'])) {
            $star_rating = $_POST['star_rating'];
        }
        if (isset($_POST['id_area'])) {
            $keyword = $_POST['id_area'];
        }
        if (isset($_POST['id_type_of_hotel'])) {
            $number_of_rooms = $_POST['id_type_of_hotel'];
        }
        if (isset($_POST['id_utility'])) {
            $id_utility = $_POST['id_utility'];
        }
        
    }

    /*

     * Hàm hiển thị một hotel 
     *      */
    function view($idHotel = null) {
        if (isset($idHotel)) {
            $this->doNotRenderSearch = 1;
            $this->Hotel->id = $idHotel;
            $hotel = $this->Hotel->search();
          
            $hotel['Hotel']['description'] = explode('\n', $hotel['Hotel']['description']);
            $hotel['Hotel']['term_transportation'] = explode('\n', $hotel['Hotel']['term_transportation']);
            $hotel['Hotel']['term_receiving_room'] = explode('\n', $hotel['Hotel']['term_receiving_room']);
            $hotel['Hotel']['term_entertainment'] = explode('\n', $hotel['Hotel']['term_entertainment']);
            $hotel['Hotel']['term_surcharge'] = explode('\n', $hotel['Hotel']['term_term_surcharge']);
            $hotel['Hotel']['term_note'] = explode('\n', $hotel['Hotel']['term_note']);
           
            $location = performAction('locations', 'findLocationById', array($hotel['Hotel']['id_location']));
            $utilityDetails = performAction('utility_details', 'findUtilityDetailById', array($idHotel));
            $reviewUsers = performAction('review_hotels', 'findReviewById', array($idHotel));
            $combo = performAction('Combo', 'findComboByIdHotel', array($idHotel));
            $starterPackage = performAction('Starter_package', 'findStarterPackageByIdHotel', array($idHotel));

            
            $hotel['Hotel']['location'] = $location;
            $hotel['Hotel']['utilityDetails'] = $utilityDetails;
            $hotel['Hotel']['reviewUsers'] = $reviewUsers;
            $hotel['Hotel']['combo'] = $combo;
            $hotel['Hotel']['starterPackage'] = $starterPackage;
            
            $this->set('hotel', $hotel['Hotel']);
            return $hotel['Hotel'];
        }else{
            return null;
        }
//        header("Location:" . BASE_PATH . '');
    }
    
    function afterAction() {
        
    }

}
