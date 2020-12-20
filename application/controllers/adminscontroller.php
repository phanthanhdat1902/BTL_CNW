<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminscontroller
 *
 * @author dat.pt173001
 */
class AdminsController extends Controller {

    function beforeAction() {
        $this->doNotRenderSearch = 1;
    }

    function index() {
        
    }

    /*
     * Ham thuc hien chuc nang hien thi toan bo Order_Tour */

    function viewallTour($page = 1, $limit = 1) {
        $result = performAction('Tours', 'viewall', array($page, $limit));
        $this->set('tours', $result);
    }

    function getdata($idTour) {
        $result = performAction('Tours', 'view', array($idTour));
        $theme_tours = performAction('Theme_tours', 'viewallTheme', array(null));
        $result['listThemeTours']=$theme_tours;
        $total=performAction('Tours', 'getTotal', array(10));
        $this->set('tours', $total);
    }

    function addTour() {
        
    }

    function deleteTour() {
        
    }

    /*
     * Ham thuc hien chuc nang cap nhat Tour     */

    function updateOrderTour($orderId, $status) {
//        performAction('Order_tours', 'updateOrderTour', array($orderId, $status));
//        header("Location:" . BASE_PATH . 'admins/viewalltour/1/2');
    }

    //ham thuc hien chuc nang xoa order
    function deleteOrderTour($orderId) {
        performAction('Order_tours', 'deleteOrderTour', array($orderId));
        header("Location:" . BASE_PATH . 'admins/viewalltour/1/2');
    }

    function viewallOrder($page = 1, $limit = 1) {
        $result = performAction('Order_tours', 'viewOrder', array($page, $limit));
        $this->set('orderTours', $result);
    }

    function commitTour($orderId, $status) {
        performAction('Order_tours', 'commitTour', array($orderId, $status));
        header("Location:" . BASE_PATH . 'admins/viewallOrder/1/2');
    }

    function logout() {
        session_start();
        unset($_SESSION["admin"]);
        header("Location:" . BASE_PATH);
    }

    function afterAction() {
        
    }

}
