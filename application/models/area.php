<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of areas
 *
 * @author dat.pt173001
 */
class Area extends Model {
    //foreign key
    var $id_city;
    
    //attribute
    var $id;
    var $name;
    var $number_of_hotels;
    
    var $hasOne = array('City' => 'City');
    var $hasMany = array('Hotel' => 'Hotel');
}
