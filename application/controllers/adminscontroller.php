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
        $this->doNotRenderHeader = 1;
        $this->doNotRenderSearch = 1;
    }

    function index() {
        
    }

    function logout() {
        session_start();
        unset($_SESSION["admin"]);
        header("Location:" . BASE_PATH);
    }

    function afterAction() {
        
    }

}
