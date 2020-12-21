<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php echo $html->includeCss('style'); ?>
</head>

<body>
    <div class="content">
        <h1>Thông tin user</h1>
        <h3>Username</h3>
        <input type="text" value="<?php echo ($user['User']['username']) ?>">
        <h3>Email</h3>
        <input type="text" value="<?php echo ($user['User']['email']) ?>">
        <h3>Password</h3>
        <input type="text" value="<?php echo ($user['User']['password']) ?>">
        <h3>Phân quyền</h3>
        <input type="text" value="<?php echo ($user['Roles']['name']) ?>" disabled>
    </div>
</body>

</html>