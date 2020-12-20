<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php echo $html->includeCss('style'); ?>
</head>

<body>
    <div class="form">
        <?php if (!$result) { ?>
            <script>
                alert('Đã tồn tại email đăng nhập');
            </script>
        <?php } else { ?>
        <?php } ?>
        <form action="register" method="POST" name="formRegister" onsubmit="return validateForm()" required>
            <h3 class="text_register"> Đăng kí bằng:</h3>
            <div class="By">
                <button class="facebook_btn">
                    <!-- <div class="image_fb"></div> -->

                    <a href="google.com.vn"> Facebook</a>
                </button>
                <button class="google_btn">
                    <i></i>
                    <a href="facebook.com.vn"> Google</a>
                </button>
            </div>
            <div class="input_infor">
                <p> Email</p>

                <input type="text" placeholder="email" name="email" id="email">

                <p> Password</p>

                <input type="password" placeholder="password" name="password" id="password">

                <p>Confirm Password</p>

                <input type="password" name="comfirmpassword" id="comfirmpassword">
            </div>

            <div class="agree">
                <input type="checkbox">
                <span>Bằng việc tham gia iVIVU, tôi đồng ý tất cả
                    <a>điều kiện & điều khoản</a>
                </span>
            </div>

            <input class="submit_btn" type="submit" value="Đăng Ký" />
        </form>

    </div>
    <script src="http://localhost/BTL_CNW/public/js/scriptHome.js"></script>
</body>

</html>