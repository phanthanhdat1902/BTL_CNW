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
class SchedulesController extends Controller{
    
    function findSchedules($tourId){
        $this->Schedule->where('id_tour',$tourId);
        return $this->Schedule->search();
    }
}
