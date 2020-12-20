<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of review_hotelscontroller
 *
 * @author dat.pt173001
 */
class Review_hotelsController {
    function findReviewById($hotelId) {
        $this->Review_hotel->leftOn('users', 'id_user');
        $this->Review_hotel->where('id_hotel', $hotelId);
        $temp = $this->Review_hotel->search();
        $reviewArr = array();

        foreach ($temp as $item):
            $item['Review_hotel']['username'] = $item['users']['username'];
            array_push($reviewArr, $item['Review_hotel']);
        endforeach;
        $result['Review_hotel'] = $reviewArr;
        return $result;
    }
}
