<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login in booking page</title>
        <?php echo $html->includeCss('style'); ?>   
    </head>

    <body>
        <div class="form">
            <form action="http://localhost/BTL_CNW/users/login" method="post" name="formLogin" onsubmit="return validateForm()" required>
                <?php if (isset($isLogin)) { ?>
                    <span>Login fail</span>                <?php } ?>
                <h3 class="text_register"> Đăng Nhập bằng:</h3>
                <div class="By">
                    <button class="facebook_btn">
                        <i></i>
                        <a href="google.com.vn"> Facebook</a>
                    </button>
                    <button class="google_btn">
                        <i></i>
                        <a href="facebook.com.vn"> Google</a>
                    </button>
                </div>
                <div class="input_infor">
                    <p> Email/Username</p>
                    <input type="text" placeholder="email" name="email" id="email" maxlength="30">
                    <p> Password</p>

                    <input type="password" placeholder="password" name="password" id="password" maxlength="30">
                    <a> <p>Quên mật khẩu?</p></a>
                </div>          
                <input class="submit_btn" type="submit" value="Đăng nhập"/>
            </form>
        </div>

        <script src="http://localhost/BTL_CNW/public/js/scriptHome.js"></script>
    </body>

</html>