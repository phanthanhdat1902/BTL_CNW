<div class="container">
    <h1>Thêm mới thành viên</h1>
    <form>
        <div class="row">
            <div class="col2">
                <label>ID</label>
                <input value="<?php echo ($user['User']['id_user']) ?>" name="id_user" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col2">
                <label>UserName</label>
                <input type="text" value="<?php echo ($user['User']['username']) ?>" name="username">
            </div>
        </div>
        <div class="row">
            <div class="col2">
                <label>Password</label>
                <input type="text" value="<?php echo ($user['User']['password']) ?>" name="password" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col2">
                <label>Email</label>
                <input type="text" value="<?php echo ($user['User']['email']) ?>" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col2">
                <label>Ngày tạo</label>
                <input type="text" value="<?php echo ($user['User']['create_time']) ?>" disabled name="create_time">
            </div>
        </div>
        <div class="row">
            <div class="col2">
                <label>Phân quyền</label>
                <select name="id_role">
                    <?php
                    foreach ($roles as $item) :
                    ?>
                        <?php
                        if(($item['Role']['id_role'])==($user['User']['id_role'])){
                            echo('<option selected="selected" value="'.$item['Role']['id_role'].'">'.$item['Role']['name'].'</option>');
                        }else{
                            echo('<option value="'.$item['Role']['id_role'].'">'.$item['Role']['name'].'</option>');
                        }
                        ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col2">
                <button type="submit">Cập nhật</button>
            </div>
        </div>
    </form>
</div>

<div class="footer">
    <span>Copyright © Your Website 2020</span>
</div>
</div>
</body>

</html>