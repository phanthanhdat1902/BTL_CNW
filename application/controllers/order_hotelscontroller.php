<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order_hotelscontroller
 *
 * @author dat.pt173001
 */
class Order_hotelsController extends Controller {
    //put your code here



    function viewallnopage(){
        return $this->Order_hotel->search();
    }

}
