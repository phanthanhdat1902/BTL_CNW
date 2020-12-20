<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of schedules
 *
 * @author dat.pt173001
 */
class SchedulesController extends Controller {
    
    function findSchedules($tourId) {
        $this->Schedule->where('id_tour', $tourId);
        return $this->Schedule->search();
    }
    
    function addSchedules($id_tour, $day_number, $title, $description, $image1, $caption1, $image2, $caption2) {
        $this->Schedule->id_tour = $id_tour;
        $this->Schedule->day_number = $day_number;
        $this->Schedule->title = $title;
        $this->Schedule->description = $description;
        $this->Schedule->image1 = $image1;
        $this->Schedule->caption1 = $caption1;
        $this->Schedule->image2 = $image2;
        $this->Schedule->caption2 = $caption2;
        $this->Schedule->save();
    }

    function deleteSchedulesById($tourId) {
        $this->Schedule->where('id_tour', $tourId);
        return $this->Schedule->delete();
    }

}
