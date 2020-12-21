        <div class="container">
            <h1>Thêm mới thành viên</h1>
            <form action="http://localhost/BTL_CNW/admins/adduser" method="POST">
                <div class="row">
                    <div class="col2">
                        <label>UserName</label>
                        <input type="text" name="username">
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <label>Password</label>
                        <input type="text" name="password">
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <label>Email</label>
                        <input type="text" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <label>Phân quyền</label>
                        <select name="id_role">
                            <?php
                            foreach ($roles as $item) :
                            ?>
                                <?php echo ('<option value="' . $item['Role']['id_role'] . '">' . $item['Role']['name'] . '</option>'); ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <button type="submit">Thêm mới</button>
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