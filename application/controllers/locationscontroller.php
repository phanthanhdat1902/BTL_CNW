<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of locationscontroller
 *
 * @author dat.pt173001
 */
class LocationsController extends Controller {
    
    /*
     * Hàm trả về mảng các id_location của một city 
     * Tham số đầu vào: id của city
     * Tham số đầu ra: mảng các id_location của một city
     *      */
    function findIdLocationsByIdCity($id_city) {
        $this->Location->where('id_city', $id_city);
        return $this->Location->search()['Location']['id_location'];
    }
    
    function findLocationById($id_location) {
        $this->Location->id = $id_location;
        $this->Location->search();
    }
}
