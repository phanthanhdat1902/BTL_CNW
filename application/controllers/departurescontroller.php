<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of departurescontroller
 *
 * @author dat.pt173001
 */
class DeparturesController extends Controller{
    function findDepartureById($tourId){
        $this->Departure->where('id_tour',$tourId);
        return $this->Departure->search();
    }
}
