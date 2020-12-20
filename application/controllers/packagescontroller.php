<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of packagescontroller
 *
 * @author dat.pt173001
 */
class PackagesController {
    function findPricePerNight($package) {
        $query = 'SELECT price_per_night'
              . ' FROM packages'
              . ' WHERE id_type_of_room = '.$package['type_of_room']
              . ' AND id_service_room = '.$package['service_room'];
        return $this->Package->custom($query)['Package']['price_per_night'];
    }
}
