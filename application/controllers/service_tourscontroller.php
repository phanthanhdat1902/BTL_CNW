<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of service_tourscontroller
 *
 * @author dat.pt173001
 */
class Service_toursController extends Controller {

    function findService($tourId = null) {
        $this->Service_tour->where('id_tour', $tourId);
        $temp = $this->Service_tour->search();
        $result = array();
        foreach ($temp as $item):
            array_push($result, $item['Service_tour']['name']);
        endforeach;
        return $result;
    }

    function deleteServiceByTourId($tourId) {
        $this->Service_tour->where('id_tour', $tourId);
        return $this->Service_tour->delete();
    }
    function addService($tourId=null,$name=null){
        $this->Service_tour->id_tour=$tourId;
        $this->Service_tour->name=$name;
        $this->Service_tour->save();
    }
}
