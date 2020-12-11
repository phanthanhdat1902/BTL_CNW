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

    var $id;
    var $role;
    var $username;
    var $password;
    var $email;
    var $google_acount;
    var $facebook_acount;
    var $hasMany = array('Role' => 'Role');

}
