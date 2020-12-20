<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of city
 *
 * @author dat.pt173001
 */
class City extends Model {
    //attribute
    var $id;
    var $name;
    var $number_of_hotels;
    var $number_of_tours;
    var $image;
    
    var $hasMany = array('Hotel' => 'Hotel', 'Location' => 'Location',
        'Area' => 'Area', 'Tour' => 'Tour');
}
