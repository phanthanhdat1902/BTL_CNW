<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of starter_packagescontroller
 *
 * @author dat.pt173001
 */
class Starter_packagesController extends Controller {
    function findStarterPackageByIdHotel($id_hotel) {
        $query = 'SELECT price_per_night'
              . ' FROM starter_packages JOIN packages'
              . ' ON starter_packages.id_type_of_room = packages.id_type_of_room'
              . ' AND starter_packages.id_service_room = packages.id_service_room'
              . ' WHERE id_hotel = '.$id_hotel;
        return $this->Starter_package->query($query)['Package']['price_per_night'];
    }
}
