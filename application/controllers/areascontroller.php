<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of areascontroller
 *
 * @author dat.pt173001
 */
class AreasController extends Controller {
    function findAreaByIdCity($id_city) {
        $this->Area->where('id_city', $id_city);
        return $this->Area->search();
    }
}
