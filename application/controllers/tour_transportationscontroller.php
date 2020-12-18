<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tour_transportationscontroller
 *
 * @author dat.pt173001
 */
class Tour_transportationsController extends Controller{
    function findTrasportation($tour_transportationId){
        $this->Tour_transportation->id=$tour_transportationId;
        return $this->Tour_transportation->search()['Tour_transportation'];
    }
}
