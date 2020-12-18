<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of citiescontroller
 *
 * @author dat.pt173001
 */
class CitiesController extends Controller{
    function findCity($cityId){
        $this->City->id=$cityId;
        return $this->City->search()['City']['name'];
    }
}
