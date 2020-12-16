<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of theme
 *
 * @author dat.pt173001
 */
class Theme_tour extends Model {

    var $hasMany = array('Tour' => 'Tour',
        'city'=>'City');

}
