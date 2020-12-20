<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author dat.pt173001
 */
class User extends Model {
    //foreign key
     var $role;

    //attribute
    var $id;
    var $username;
    var $password;
    var $email;
    var $google_account;
    var $facebook_account;
    var $create_time;
    
    var $hasOne = array('Role' => 'Role');
    var $hasMany=array('Order' => 'Order');
}
