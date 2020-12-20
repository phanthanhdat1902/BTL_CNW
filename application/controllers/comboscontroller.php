<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of comboscontroller
 *
 * @author dat.pt173001
 */
class CombosController extends Controller {
    function findComboByIdHotel($id_hotel) {
        $this->Combo->where('id_hotel', $id_hotel);
        $combo = $this->Combo->search();
        $id_type_of_room = $combo['Combo']['id_type_of_room'];
        $id_service_room = $combo['Combo']['id_service_room'];
        $package = array ('id_type_of_room' => $id_type_of_room, 'id_service_room' => id_service_room);
        $combo['Combo']['price_per_night'] = performAction('Packages', findPricePerNight, package);
        return $combo;
    }
}
