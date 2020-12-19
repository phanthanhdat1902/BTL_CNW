<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of review_tourscontroller
 *
 * @author dat.pt173001
 */
class Review_toursController extends Controller {

    function findReviewById($tourId) {
        $this->Review_tour->leftOn('users', 'id_user');
        $this->Review_tour->where('id_tour', $tourId);
        $temp = $this->Review_tour->search();
        $reviewArr = array();

        foreach ($temp as $item):
            $item['Review_tour']['email'] = $item['users']['email'];
            array_push($reviewArr, $item['Review_tour']);
        endforeach;
        $result['Review_tour'] = $reviewArr;
        return $result;
    }

}
