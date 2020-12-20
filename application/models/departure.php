<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of departures
 *
 * @author dat.pt173001
 */
class Departure extends Model {
    //foreign key
    var $id_tour;
    
    //attribute
    var $id;
    var $start_date;
    var $end_date;
    var $holiday_surcharge;
    var $availability;
    
    var $hasOne = array('Tour' => 'Tour');
    var $hasMany = array('Order_Tour' => 'Order_Tour');
}
