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
                    <li><a href="http://localhost/BTL_CNW/">Tour</a></li>
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
                        <?php echo $html->link('Đăng ký','users/register')?>
                        <?php echo $html->link('Đăng nhập','users/login')?>
                    <?php } else { ?>
                        <a href="<?php echo BASE_PATH . 'users/view/' . $_SESSION["id_user"] ?>">
                            <span style="color:white;">Xin Chào <?php echo $_SESSION["email"]; ?>&nbsp;</span>
                        </a>
                        <?php echo $html->link('Logout','users/logout')?>
                    <?php } ?>
                    <span id="btnMenu" onclick="showMenu()">&#9776;</span>
                </div>
            </div>
        </div>