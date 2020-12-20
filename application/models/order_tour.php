<?php

/**
 * Description of order_tour
 *
 * @author dat.pt173001
 */
class Order_tour extends Model {
    //foreign key
    var $id_user;
    var $id_tour;
    var $id_type_of_payment;
    var $id_departure;
    
    //atrribute
    var $id;
    var $number_of_adults;
    var $number_of_children;
    var $price;
    var $name;
    var $phone_number;
    var $email;
    var $note;
    var $status;
    
    var $hasOne = array('User' => 'User', 'Tour' => 'Tour');
}
