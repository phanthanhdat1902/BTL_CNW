<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of review_tour
 *
 * @author dat.pt173001
 */
class Review_tour extends Model {
    //foreign key
    var $id_user;
    var $id_tour;
    
    //attribute
    var $score;
    var $content;
    var $create_time;
}
