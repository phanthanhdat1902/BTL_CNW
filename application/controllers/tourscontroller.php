<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tourscontroller
 *
 * @author dat.pt173001
 */
class ToursController extends Controller {
    /*

     * Ham thuc hien chuc nang tim kiem tour theo thanh pho     */
    function searchCity() {
        $id_city = $_GET['id_city'];
        $this->Tour->where('id_city', $id_city);
        $listTours = $this->Tour->search();
        $this->set('listTours', listTours);
    }
    /*

     * Ham thuc hien chuc nang lay thong tin ve Tour theo ID     */
    function getTourById(){
        $id_tour=$_GET['id_tour'];
        $this->Tour->where('id_tour',$id);
        $tour=$this->Tour->search();
        $this->set('tour',$tour);
    }
}
