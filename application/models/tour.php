<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tour
 *
 * @author dat.pt173001
 */
class Tour extends Model {
    //foreign key
    var $id_start_city;
    var $id_destination_city;
    var $id_tour_transportation;
    var $id_theme_tour;
    
    //attribute
    var $id;
    var $score;
    var $number_of_reviews;
    var $name;
    var $code;
    var $number_of_days;
    var $number_of_nights;
    var $term_surcharge;
    var $term_price_included;
    var $term_price_not_included;
    var $term_cancelling;
    var $term_note;
    var $term_single_room_surcharge_price;
    var $price_per_adult;
    var $price_per_child;
    var $thumbnail;
    var $image;
    var $introduction_heading;
    var $introduction;
    var $description_heading;
    var $description;
}
