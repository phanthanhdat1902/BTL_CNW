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
