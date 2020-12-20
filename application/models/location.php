<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of location
 *
 * @author dat.pt173001
 */
class Location extends Model {
    //foreign_key
    var $id_city;
    
    //attribute
    var $id;
    var $country;
    var $district;
    var $street_number;
    
    var $hasOne = array('Hotel' => 'Hotel', 'City' => 'City');
}
