<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rolescontroller
 *
 * @author dat.pt173001
 */
class RolesController extends Controller {

    function beforeAction() {
        
    }

    function findRoleById($roleId) {
        $this->Role->id = $roleId;
        return $this->Role->search();
    }

    function afterAction() {
        
    }

}
