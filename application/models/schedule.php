<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of schedule
 *
 * @author 1920
 */
class Schedule extends Model {
    //foreign key
    var $id_tour;
    
    //attribute
    var $id;
    var $day_number;
    var $title;
    var $description;
    var $image1;
    var $caption1;
    var $image2;
    var $caption2;
}
