<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hotel
 *
 * @author dat.pt173001
 */
class Hotel extends Model {
    //foreign key
    var $id_location;
    var $id_area;
    var $id_utility;
    var $id_theme_hotel;
    var $id_type_of_hotel;
    
    //attribute
    var $id;
    var $title;
    var $star_rating;
    var $description;
    var $term_checkin;
    var $term_checkout;
    var $term_transportation;
    var $term_receiving_room;
    var $term_entertainment;
    var $term_surcharge;
    var $term_note;
    var $image1;
    var $image2;
    var $image3;
    var $image4;
    var $image5;
    var $video_linked;
    var $score;
    var $number_of_reviews;
    
    var $hasOne = array('Location' => 'Location', 'Area' => 'Area',
        'Utility' => 'Utility', 'Theme_Hotel' => 'Theme_Hotel',
        'Type_Of_Hotel' => 'Type_Of_Hotel',
        'Starter_Package' => 'Starter_Package', 'Combo' => 'Combo');
    var $hasMany = array('Review_Hotel' => 'Review_Hotel', 'Room' => 'Room',
        'Type_Of_Room' => 'Type_Of_Room', 'Order_Hotel' => 'Order_Hotel');
}
