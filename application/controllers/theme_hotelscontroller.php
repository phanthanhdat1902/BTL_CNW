<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of theme_hotels
 *
 * @author dat.pt173001
 */
class Theme_hotelsController extends Controller {

    function beforeAction() {
        //check cookie
    }

    function viewall() {
        $theme_hotels = $this->Theme_hotel->search();
        $this->set('theme_hotels', $theme_hotels);
    }

    function afterAction() {
        
    }

}
