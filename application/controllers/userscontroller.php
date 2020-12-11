<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userscontroller
 *
 * @author dat.pt173001
 */
class UsersController extends Controller {

    function beforeAction() {
        //check cookie
    }

    /*

     * Ham thuc hien chuc nang dang nhap
     * Nguoi tao: Phan Thanh Dat
     * Ngay tao:10/12/2020     */

    function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $this->User->id = $username;
        $this->User->where('password', $password);
        $user = $this->User->search();
        $this->set('user', $user);
    }

    /*

     * Ham thuc hien chuc nang dang xuat
     * Nguoi tao: Phan Thanh Dat
     * Ngay tao:12/10/2020     */

    function logout() {
        
    }

    /*

     * Ham thuc hien chuc nang dang ky
     * Nguoi tao: Phan Thanh Dat
     * Ngay tao:10/12/2020      */

    function register() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $google_acount = $_POST['google_acount'];
        $faceook_acount = $_POST['facebook_acount'];
        $this->User->username = $username;
        $this->User->password = $password;
        $this->User->email = $email;
        $this->User->google_acount = $google_acount;
        $result = $this->User->save();
        $this->User->set('result', $result);
    }

    function update() {
        
    }

    function afterAction() {
        
    }

}
