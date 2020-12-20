<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of utility_detailscontroller
 *
 * @author 1920
 */
class Utility_detailsController extends Controller {
    
    function findUtilityDetail($hotelId = null) {
        $this->Utility_detail->where('id_hotel', $hotelId);
        $temp = $this->Utility_detail->search();
        $result = array();
        foreach ($temp as $item):
            array_push($result, $item['Utility_detail']['name']);
        endforeach;
        return $result;
    }
}
