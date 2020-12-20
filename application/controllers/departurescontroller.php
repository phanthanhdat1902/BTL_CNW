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
class DeparturesController extends Controller {

    function findDepartureById($tourId) {
        $this->Departure->where('id_tour', $tourId);
        return $this->Departure->search();
    }

    function addDeparture($id_tour,$start_date,$end_date,$holiday_surcharge,$availability=1) {
        $this->Departure->id_tour=$id_tour;
        $this->Departure->start_date=$start_date;
        $this->Departure->end_date=$end_date;
        $this->Departure->holiday_surcharge=$holiday_surcharge;
        $this->Departure->availability=$availability;
        return $this->Departure->save();
    }

    function deleteDeparturesByTourId($tourId) {
        $this->Departure->where('id_tour', $tourId);
        return $this->Departure->delete();
    }

}
