<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of type_of_room
 *
 * @author dat.pt173001
 */
class Type_of_room extends Model {
    //foreign key
    var $id_hotel;
    var $id_type_of_view;
    
    //attribure
    var $id;
    var $name;
    var $adult_capacity;
    var $children_capacity;
    var $size;
    var $image;
}
