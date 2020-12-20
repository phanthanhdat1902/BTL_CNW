        <div class="container">
            <h1>Thêm mới thành viên</h1>
            <form>
                <div class="row">
                    <div class="col2">
                        <label>UserName</label>
                        <input type="text" value="" name="username">
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <label>Password</label>
                        <input type="text" value="" name="password" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <label>Email</label>
                        <input type="text" value="" name="email">
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
                        <button>Thêm mới</button>
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