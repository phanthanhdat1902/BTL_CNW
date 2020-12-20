<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of review_hotel
 *
 * @author dat.pt173001
 */
class Review_hotel extends Model {
    //foreign key
    var $id_user;
    var $id_hotel;
    
    //attribute
    var $score;
    var $content;
    var $create_time;
}
