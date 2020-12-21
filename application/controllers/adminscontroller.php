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

    function viewallTour($page = 1, $limit = 10) {
        $result = performAction('Tours', 'viewall', array($page, $limit));
        $this->set('tours', $result);
        $this->set('page', $page);
        $total = performAction('Tours', 'getTotal', array($limit));
        $this->set('total', $total);
        $this->set('limit', $limit);
    }

    function detailTour($idTour) {
        $result = performAction('Tours', 'view', array($idTour));
        $theme_tours = performAction('Theme_tours', 'viewallTheme', array(null));
        $result['listThemeTours'] = $theme_tours;
//        $total = performAction('Tours', 'getTotal', array(10));
        $this->set('tours', $result);
//        return $total;
    }

    function addTour() {
        if (count($_POST) > 0) {
            performAction('Tours', 'addTour', array(null));
        } else {
            $theme_tours = performAction('Theme_tours', 'viewallTheme', array(null));
            $this->set('theme_tours', $theme_tours);
        }
    }

    function updateTour($tourId) {
        $result = $_POST;
        if (isset($result)) {
            performAction('Tours', 'updateTour', array($tourId));
            header("Location:" . BASE_PATH . 'admins/detailtour/' . $tourId);
        }
    }

    /*
     * Ham thuc hien chuc nang cap nhat Tour     */

    function cancelOrderTour($orderId, $status) {
        performAction('Order_tours', 'cancelOrderTour', array($orderId, $status));
        header("Location:" . BASE_PATH . 'admins/viewallOrder');
    }

    //ham thuc hien chuc nang xoa order
    function deleteOrderTour($orderId) {
        performAction('Order_tours', 'deleteOrderTour', array($orderId));
        header("Location:" . BASE_PATH . 'admins/viewallOrder');
    }

    function viewallOrder($page = 1, $limit = 10) {
        $result = performAction('Order_tours', 'viewOrder', array($page, $limit));
        $this->set('orderTours', $result);
    }

    function commitTour($orderId, $status) {
        performAction('Order_tours', 'commitTour', array($orderId, $status));
        header("Location:" . BASE_PATH . 'admins/viewallOrder');
    }

    /**
     * Hàm lấy tất cả user
     */
    function viewalluser() {
        $result = performAction('Users', 'viewall', array(null));
        $this->set('users', $result);
    }

    /**
     * Hàm thêm mới user
     */
    function addUser() {
        if (count($_POST) > 0) {
            $result = performAction('Users', 'addUser', array(null));
            if ($result !== 0) {
                header("Location:" . BASE_PATH . 'admins/detailuser/' . $result);
            } else {
                $roles = performAction('Roles', 'viewall', array(null));
                $this->set('roles', $roles);
            }
        } else {
            $roles = performAction('Roles', 'viewall', array(null));
            $this->set('roles', $roles);
        }
    }

    /**
     * Hàm cập nhật user
     */
    function updateUser($idUser) {
        $result = $_POST;
        if (isset($result)) {
            performAction('Users', 'updateUser', array($idUser));
            header("Location:" . BASE_PATH . 'admins/detailuser/' . $idUser);
        }
    }

    /**
     * Hàm lấy chi tiết 1 user
     */
    function detailUser($idUser) {
        $result = performAction('Users', 'view', array($idUser));
        $listRoles = performAction('Roles', 'viewall', array(null));
        $this->set('roles', $listRoles);
        $this->set('user', $result);
    }

    /**
     * Hàm xóa user
     */
    function deleteUser($idUser) {
        
    }

    function logout() {
        session_start();
        unset($_SESSION["admin"]);
        header("Location:" . BASE_PATH);
    }
    //ham thuc hien xoa tour
    function deleteTour($tourId) {
        if(isset($tourId)){
            performAction('Tours', 'deleteTour',array($tourId));
            header("Location:http://localhost/BTL_CNW/admins/viewalltour/1/10");
        }
    }

    function afterAction() {
        
    }

}
