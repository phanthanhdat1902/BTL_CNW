<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login in booking page</title>
        <?php echo $html->includeCss('style'); ?>   
        <style>
            .form{
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>

    <body>
        <div class="form">
            <form action="login" method="post">
                <?php if (isset($isLogin)) { ?>
                    <span>Login fail</span>
                <?php } ?>
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
                    <input type="text" placeholder="email" name="email">
                    <p> Password</p>

                    <input type="password" placeholder="password" name="password">
                    <a> <p>Quên mật khẩu?</p></a>
                </div>          
                <input class="submit_btn" type="submit" value="Đăng nhập"/>
            </form>
        </div>
    </body>

</html>