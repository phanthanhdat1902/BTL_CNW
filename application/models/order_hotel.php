<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order_hotel
 *
 * @author dat.pt173001
 */
class Order_hotel extends Model {
    //foreign key
    var $id_user;
    var $id_type_of_room;
    var $id_service_room;
    var $id_type_of_payment;
    var $id_hotel;
    
    //attribute
    var $id;
    var $price;
    var $name;
    var $phone_number;
    var $email;
    var $note;
    var $number_of_adult;
    var $number_of_children;
    var $start_date;
    var $end_date;
    var $status;
    
    var $hasOne = array('User' => 'User', 'Package' => 'Package',
        'Type_Of_Payment' => 'Type_Of_Payment', 'Hotel' => 'Hotel');
}
