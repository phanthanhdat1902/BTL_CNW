<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of room
 *
 * @author dat.pt173001
 */
class Room extends Model {
    //foreign key
    var $id_type_of_room;
    var $id_hotel;
    
    //attribute
    var $id;
    var $name;
    var $availability;
    var $checkin_date;
    var $checkout_date;
    var $note;
}
