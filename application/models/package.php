<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of package
 *
 * @author dat.pt173001
 */
class Package extends Model {
    //foreign key
    var $id_type_of_room;
    var $id_service_room;
    
    //attribute
    var $price_per_night;
    
    var $hasOne = array('Type_Of_Room' => 'Type_Of_Room', 'Tour' => 'Tour',
        'Type_Of_Payment' => 'Type_Of_Payment', 'Departure' => 'Departure');
}
