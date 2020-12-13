<?php
session_start();
setcookie('currentURL','index',time() + (86400 * 30), "/");
?>
<html>
    <head>
        <title>User Login</title>
    </head>
    <body>

        <?php
        if (isset($_SESSION["email"])) {
            ?>
            Welcome <?php echo $_SESSION["email"]; ?>. Click here to <a href="../users/logout" tite="Logout">Logout.
                <?php } else {
                echo "<h1>Please login first .</h1>";
                ?>
                 <a href="../users/login">Dang nhap</a>
            <?php } ?>
    </body>
</html>