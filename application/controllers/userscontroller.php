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
        $this->doNotRenderHeader = 1;
        $this->doNotRenderSearch = 1;
    }

    /*

     * Ham thuc hien chuc nang dang nhap
     * Nguoi tao: Phan Thanh Dat
     * Ngay tao:10/12/2020     */

    function login() {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->User->where('email', $email);
            $user = $this->User->search();
            if (password_verify($password, $user[0]['User']['password'])) {
                $this->set('user', $user);
                $role = performAction('roles', 'findRoleById', array($user[0]['User']['id_role']));
                if ($role['Role']['name'] == 'admin') {
                    session_start();
                    $_SESSION['admin'] = $user[0]['User']['email'];
                     $_SESSION["id_user"]=$user[0]['User']['id_user'];
                    header('Location:' . BASE_PATH . 'admins/index');
                    return;
                }
                session_start();
                $_SESSION["email"] = $user[0]['User']['email'];
                header("Location:" . BASE_PATH . $_COOKIE['currentURL']);
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
        unset($_SESSION["id_user"]);
        header("Location:" . BASE_PATH . $_COOKIE['currentURL']);
    }

    /*

     * Ham thuc hien chuc nang dang ky
     * Nguoi tao: Phan Thanh Dat
     * Ngay tao:10/12/2020      */

    function register() {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $this->User->where('email', $email);
            $this->User->showHasOne();
            $searchResult = $this->User->search();
            if ($searchResult == null) {
                $password = $_POST['password'];
                $this->User->email = $email;
                $this->User->password = password_hash($password, PASSWORD_DEFAULT);
                $this->User->id_role = 3;
                $this->User->create_time = gmdate('Y-m-d h:i:s');
                $result = $this->User->save();
                if ($result != -1) {
                    session_start();
                    $_SESSION["email"] = $email;
                    $_SESSION["id_user"]=$this->User->getLastId();
                    header("Location:http://localhost/BTL_CNW/" . $_COOKIE['currentURL']);
                } else {
                    $this->set('result', false);
                }
            } else {
                $this->set('result', false);
            }
        } else {
            $this->set('result', true);
        }
    }

    function update() {
        
    }

    function afterAction() {
        
    }

}
