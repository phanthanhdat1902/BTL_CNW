<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of combo
 *
 * @author dat.pt173001
 */
class Combo extends Model {
    //foreign key
    var $id_hotel;
    var $id_type_of_room;
    var $id_service_room;
    
    //attribute
    var $id;
    var $discount;
    var $start_date;
    var $end_date;
    var $minimum_number_of_rooms;
    
    var $hasOne = array('Hotel' => 'Hotel', 'Package' => 'Package');
}
