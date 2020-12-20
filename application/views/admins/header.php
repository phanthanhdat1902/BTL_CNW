<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:' . BASE_PATH . 'users/login');
}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Đây là trang quản trị</title>
        <link rel="stylesheet" href="http://localhost/BTL_CNW/public/css/styleAdmin.css" />
        <script src="http://localhost/BTL_CNW/public/js/scriptAdmin.js"></script>
        <link rel="stylesheet" href="http://localhost/BTL_CNW/public/css/styleAdminDialog.css" />

    </head>

    <body>
        <div class="header">
            <div class="header_conent">
                <h1 class="center">IVIVU</h1>
                <div class="btn_search center">
                    <input type="text" placeholder="Search here ..." />
                    <input class="btn_submit_search" type="submit" value="Search">
                </div>
                <ul class="center">
                    <li><a href="">Message</a></li>
                    <li><a href="">Notify</a></li>
                    <li><a id="dropbtn">Xin chào: Admin &#10097;</a>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#home">Thông tin tài khoản</a>
                            <a href="#about">About</a>
                            <?php echo $html->link('Logout', 'admins/logout') ?>
                        </div>

                    </li>
                </ul>

            </div>
        </div>
        <div id="btnMenu" class="click">
            <span>&#9776;</span>
        </div>
        <div class="menu show">
            <div class="logo">
                <h1>IVIVU</h1>
            </div>
            <ul>
                <li><a href="/admin.html">Dashboard </a></li>
                <li>
                    <a id="features">Quản lý tour <span id="iconFirst">&#10097;</span></a>
                    <ul class="subFeatures">
                        <li><a href="http://localhost/BTL_CNW/admins/viewalltour">Danh sách tour</a></li>
                        <li><a href="http://localhost/BTL_CNW/admins/addtour">Thêm tour</a></li>
                        <li><a href="http://localhost/BTL_CNW/admins/viewallOrder">Duyệt tour</a></li>
                    </ul>
                </li>
                <li>
                    <a id="services">Quản lý hotel<span id="iconSecond">&#10097;</span></a>
                    <ul class="subService">
                        <li><a href="/AdminDanhSachHotel.html">Danh sách hotel</a></li>
                        <li><a href="/adminThemHotel.html">Thêm hotel</a></li>
                        <li><a href="/adminDuyetHotel.html">Duyệt hotel</a></li>
                    </ul>
                </li>
                <li><a href="/AdminQuanLyNhanVien.html">Quản lý nhân viên</a></li>
                <li><a href="#">Overview</a></li>
            </ul>
        </div>
        <div class="content show">