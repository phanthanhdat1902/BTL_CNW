<?php
$result = substr($_SERVER['REQUEST_URI'], 9);
SETCOOKIE("currentURL", $result, 0, "/");
session_start();
//$user_ip = getenv('REMOTE_ADDR');
//$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=58.186.57.196"));
//echo $geo[''];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đặt Tour VIP </title>
        <script src="http://localhost/BTL_CNW/public/js/scriptHome.js"></script>
        <link rel="stylesheet" href="http://localhost/BTL_CNW/public/css/header.css" />
        <script>
            function showMenu() {
                var myMenu = document.getElementById("myMenu");
                if (myMenu.className === "navHeader") {
                    myMenu.className += " responsive";
                } else {
                    myMenu.className = "navHeader";
                }
            }
        </script>
    </head>
    <body>
        <div class="header" >
            <div class="container">
                <div class="logo">
                    <!--                    <h4>LOGO</h4>-->
                    <img src="http://localhost/BTL_CNW/public/img/logo.svg"/>
                </div>
                <ul class="navHeader" id="myMenu">
                    <li><a href="#">Khách sạn</a></li>
                    <li><a href="#">Tour</a></li>
                    <li><a href="#">Vé máy bay</a></li>
                    <li><a href="#">Cẩm nang du lịch</a></li>
                    <li><a href="#">...</a>
                        <ul class="subMenu">
                            <li><a href="#">Tài khoản đặt tour</a></li>
                            <li><a href="#">Ưu đãi đặc biệt</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Hỏi đáp</a></li>
                            <li><a href="#">Hỗ trợ</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="userControl">
                    <?php if (!isset($_SESSION["email"])) {
                        ?>
                        <a href="../users/register">Đăng ký</a>
                        <a href="../users/login">Đăng nhập</a>
                    <?php } else { ?>
                        <span style="color:white;">Xin Chào <?php echo $_SESSION["email"]; ?>&nbsp;</span>
                        <a href="../users/logout">Logout</a>
                    <?php } ?>
                    <span id="btnMenu" onclick="showMenu()">&#9776;</span>
                </div>
            </div>
        </div>