<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order_tourscontroller
 *
 * @author dat.pt173001
 */
class Order_toursController extends Controller {

    function viewOrder($page = 1, $limit = 1) {
//        $this->Order_tour->setLimit($limit);
//        $this->Order_tour->setPage($page);
        return $this->Order_tour->search();
    }

    function add($tourId, $idUser = null) {
        $this->Order_tour->id_tour = $tourId;
        if (count($_POST) > 0) {
            if (isset($idUser)) {
                $this->Order_tour->id_user=$idUser;
            }
            $this->Order_tour->id_tour=$_POST['id_tour'];
            $this->Order_tour->id_departure=$_POST['id_departure'];
            $this->Order_tour->number_of_children=$_POST['number_of_children'];
            $this->Order_tour->number_of_adults=$_POST['number_of_adults'];
            $this->Order_tour->price=$_POST['price'];
            $this->Order_tour->name=$_POST['name'];
            $this->Order_tour->note=$_POST['note'];
            $this->Order_tour->status=$_POST['status'];
            $this->Order_tour->phone_number=$_POST['phone_number'];
            $this->Order_tour->save();
            header("Location:http://localhost/BTL_CNW/tours/view/1");
        }
    }

    function commitTour($orderTourId, $status) {
        $this->Order_tour->id = $orderTourId;
        $this->Order_tour->status = $status == 0 ? 1 : 0;
        $this->Order_tour->save();
        return;
    }

    function deleteOrderTour($orderTourId) {
        $this->Order_tour->id = $orderTourId;
        $this->Order_tour->delete();
        return;
    }

}
