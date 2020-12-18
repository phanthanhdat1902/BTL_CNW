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

    function searchCity() {
        $id_city = $_GET['id_city'];
        $this->Tour->where('id_city', $id_city);
        $listTours = $this->Tour->search();
        $this->set('listTours', listTours);
    }

    /*

     * Ham thuc hien chuc nang lay thong tin ve Tour theo ID     */

    function afterAction() {
        
    }

    function view($idTour = null) {
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
        $tour['Tour']['service_tours'] = $service_tour;
        $tour['Tour']['city']=$city;
        $tour['Tour']['transportation']=$transportation;
        $this->set('tour', $tour['Tour']);
//        header("Location:" . BASE_PATH . '');
    }

}
