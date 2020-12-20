<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tag_tourscontroller
 *
 * @author 1920
 */
class Tag_toursController extends Controller {
    function findTagTourById($tourId) {
        $this->Tag_tour->where('id_tour', $tourID);
        $temp = $this->Tag_tour->search();
        $result = array();
        foreach ($temp as $item):
            array_push($result, $item['Tag_tour']['name']);
        endforeach;
        return $result;
    }
}
