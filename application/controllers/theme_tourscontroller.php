<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of themescontroller
 *
 * @author dat.pt173001
 */
class Theme_toursController extends Controller{
    function beforeAction(){
        
    }
    /*

     * Ham lay toan bo danh sach tour theo chu de */
    function getAllTourWithTheme(){
        $this->Theme_tour->showHasMany();
        $tour_theme=$this->Theme_tour->search();
        $this->set('tour_theme',$tour_theme);
        echo 'haha';
    }
    function afterAction(){
        
    }
}
