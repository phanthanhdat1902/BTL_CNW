<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Đây là trang quản trị</title>
    <link rel="stylesheet" href="/styleAdmin.css" />
    <script src="/scriptAdmin.js"></script>
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
                        <a href="#contact">Thoát</a>
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
                    <li><a href="/adminDanhSachTour.html">Danh sách tour</a></li>
                    <li><a href="/adminThemTour.html">Thêm tour</a></li>
                    <li><a href="/adminDuyetTour.html">Duyệt tour</a></li>
                </ul>
            </li>
            <li>
                <a id="services">Quản lý hotel<span id="iconSecond">&#10097;</span></a>
                <ul class="subService">
                    <li><a href="/AdminDanhSachHotel.html">Danh sách hotel</a></li>
                    <li><a href="#">Thêm hotel</a></li>
                    <li><a href="#">Duyệt hotel</a></li>
                </ul>
            </li>
            <li><a href="#">Overview</a></li>
            <li><a href="#">Chart</a></li>
        </ul>
    </div>
    <div class="content show">
        <div class="container">