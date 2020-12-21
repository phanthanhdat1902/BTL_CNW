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
        $listCity = performAction('cities', 'findTop', array(8));
        $query = 'SELECT * FROM theme_hotels'
               . 'WHERE name NOT LIKE \'%Mặc định%\'';
        
        $theme_hotels = $this->Theme_hotel->custom($query);
        
        $template = array('listCity' => $listCity, 'listTheme' => $theme_hotels);
        $this->set('template', $template);
    }

    function view($themeId) {
        $result = performAction('hotels', 'findHotelByThemeId', array($themeId));
        $this->set('hotelList', $result);
        
        $this->Theme_hotel->id = $themeId;
        $theme = $this->Theme_hotel->search();
        $this->set('theme', $theme);
    }
    
    function afterAction() {
        
    }

}
