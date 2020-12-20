        <div class="container">
            <h1>Danh sách nhân viên</h1>
            <div class="action">
                <div class="action_left">
                    <button id="btnAdd" onclick="onActionBtn(this)">Thêm mới</button>
                    <button id="btnUpdate" class="disable" onclick="onActionBtn(this)">Cập nhật</button>
                    <button id="btnDelete" class="disable">Xóa</button>
                </div>
                <div class="action_right">
                    <form>
                        <input type="text" placeholder="Search here ...">
                        <input type="submit" id="btnSearchTour" value="Tìm kiếm">
                    </form>
                </div>
            </div>
            <div class="main-table">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Ngày tạo</th>
                            <th>Vai trò</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($users as $item) :
                        ?>
                            <tr>
                                <input type="hidden" value="<?php echo $item['User']['id_user'] ?>" name="id">
                                <td><?php echo ++$i; ?></td>
                                <td><?php echo $item['User']['username'] ?></td>
                                <td><?php echo $item['User']['email'] ?></td>
                                <td><?php echo $item['User']['password'] ?></td>
                                <td><?php echo $item['User']['create_time'] ?></td>
                                <td><?php echo $item['Roles']['name'] ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="pageTable">
                    <span>Tổng 24 trang</span>
                    <button class="first btn_page">
                        <span>&#10096;&#10096;</span>
                    </button>
                    <button class="prev btn_page">
                        <span>&#10096;</span>
                    </button>
                    <input type="number" value="1" class="page-index" />
                    <button class="next btn_page">
                        <span>&#10097;</span>
                    </button>
                    <button class="last btn_page">
                        <span>&#10097;&#10097;</span>
                    </button>
                    <span>Page size</span>
                    <select name="pagasize" id="pageSize">
                        <option selected="selected">10</option>
                        <option>20</option>
                        <option>30</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- The Modal Delete -->
        <div id="modalDelete" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="title">
                        <h2>Bạn có chắc chắn xóa?</h2>
                    </div>
                    <div class="btnConfirm">
                        <button type="button" class="btnConfirmYes" onclick="onActionBtn(this,1)">Yes</button>
                        <button type="button" class="btnConfirmNo">No</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <span>Copyright © Your Website 2020</span>
        </div>
        </div>


        <script>
            function onActionBtn(button, status) {
                var btn = button;
                if (btn.id === "btnAdd") {
                    //http://localhost/BTL_CNW/admins/adduser
                    window.location = "/AdminAddUser.html"
                }
                if (btn.id === "btnUpdate") {
                    if (!btn.classList.contains("disable")) {
                        /*
                        Lấy id của user được click
                        */
                        var row = Array.from(document.querySelectorAll('.main-table tbody tr.tick input'), el => el.value);
                        var userId = row[0];
                        window.location = "http://localhost/BTL_CNW/admins/detailuser/"+userId;
                    }
                }
                //TH bấm yes
                if (btn.classList.contains("btnConfirmYes")) {
                    var row = Array.from(document.querySelectorAll('.main-table tbody tr.tick input'), el => el.value);
                    //xóa
                    if (status === 1) {
                        alert("xóa: " + row);
                    }
                }
            }
        </script>
        </body>

        </html>