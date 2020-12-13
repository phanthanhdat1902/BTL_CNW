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
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $username = $_POST['email'];
            $password = $_POST['password'];
            $this->User->where('email', $username);
            $this->User->where('password', $password);
            $user = $this->User->search();
            if ($user) {
                $this->set('user', $user);
                session_start();
                $_SESSION["email"] = $user[0]['User']['email'];
                header("Location: " . $_COOKIE['currentURL']);
                return;
            } else {
                $this->set('isLogin', false);
            }
        }
    }

    /*

     * Ham thuc hien chuc nang dang xuat
     * Nguoi tao: Phan Thanh Dat
     * Ngay tao:12/10/2020     */

    function logout() {
        session_start();
        unset($_SESSION["email"]);
        header("Location:index");
    }

    /*

     * Ham thuc hien chuc nang dang ky
     * Nguoi tao: Phan Thanh Dat
     * Ngay tao:10/12/2020      */

    function register() {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->User->email = $email;
            $this->User->password = $password;
            $this->User->id_role = 1;
            $this->User->create_time = gmdate('Y-m-d h:i:s \G\M\T');
            $result = $this->User->save();
            $this->_template->_action = 'index';
            $this->set('result', $result);
        }
    }

    function update() {
        
    }

    function afterAction() {
        
    }

}
