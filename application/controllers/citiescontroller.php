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
        $this->City->id = $cityId;
        return $this->City->search()['City']['name'];
    }
    
    /*
     * Hàm trả về id của city theo tên     
     * Tham số đầu vào: Tên thành phố / tỉnh
     * Tham số đẩu ra: ID của thành phố / tỉnh
     *      */
    function findIdCityByCityName($cityName) {
        $this->City->where('name', $cityName);
        return $this->City->search()['City']['id_city'];
    }
}
