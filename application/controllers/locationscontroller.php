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
        $listLocation = $this->Location->search();
        $result = array();
        foreach ($listLocation as $location):
            $id_location = $location['Location']['id_location'];
            array_push($result, $id_location);
        endforeach;
    }
    
    function findLocationById($id_location) {
        $this->Location->id = $id_location;
        $this->Location->search();
    }
}
