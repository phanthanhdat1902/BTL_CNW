<div class="container">
    <h1>Duyệt tour</h1>
    <div class="action">
        <div class="action_left">
            <button id="btnAdd" onclick="onActionBtn(this)">Thêm mới</button>
            <button id="btnUpdate" class="disable" onclick="onActionBtn(this)">Cập nhật</button>
            <button id="btnApproval" class="disable">Duyệt</button>
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
                    <th>Tên Tour</th>
                    <th>Số Người Lớn</th>
                    <th>Số Trẻ Em</th>
                    <th>Ngày đi</th>
                    <th>Ngày về</th>
                    <th>Tổng tiền</th>
                    <th>Đã ứng trước</th>
                    <th>SĐT</th>
                    <th>Email</th>
                    <th>Ghi Chú</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($orderTours as $item):
                    ?>
                    <tr>
                <input type="hidden" value="<?php echo $item['Order_tour']['id_order_tour'] . '/' . $item['Order_tour']['status'] ?>" name="id">
                <td><?php echo ++$i; ?></td>
                <td>123</td>
                <td><?php echo $item['Order_tour']['number_of_adults'] ?></td>
                <td><?php echo $item['Order_tour']['number_of_children'] ?></td>
                <td><?php echo $item['Order_tour']['start_date'] ?></td>
                <td><?php echo $item['Order_tour']['end_date'] ?></td>
                <td><?php echo $html->asDollars($item['Order_tour']['price']) ?></td>
                <td><?php echo $item['Order_tour']['number_of_children'] ?></td>
                <td><?php echo $item['Order_tour']['phone_number'] ?></td>
                <td><?php echo $item['Order_tour']['email'] ?></td>
                <td><?php echo $item['Order_tour']['note'] ?></td>
                <td><?php
                    if ($item['Order_tour']['status']) {
                        echo "Đã duyệt ";
                    } else {
                        echo "Chưa duyệt";
                    }
                    ?></td>

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
                <button type="button" class="btnConfirmYes" onclick="onActionBtn(this, 1)">Yes</button>
                <button type="button" class="btnConfirmNo">No</button>
            </div>
        </div>
    </div>
</div>
<!-- The Modal Duyệt-->
<div id="modalApproval" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <div class="title">
                <h2>Bạn duyệt tất cả tour?</h2>
            </div>
            <div class="btnConfirm">
                <button type="button" class="btnConfirmYes" onclick="onActionBtn(this, 2)">Yes</button>
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
            window.location = "/adminThemTour.html"
        }
        if (btn.id === "btnUpdate") {
            if (!btn.classList.contains("disable")) {
                //lấy id tour muốn update
                var row = Array.from(document.querySelectorAll('.main-table tbody tr.tick input'), el => el.value);
                var idTour = row[0];
                alert("ID tour là:" + idTour);
                //
            }
        }
        //TH bấm yes
        if (btn.classList.contains("btnConfirmYes")) {
            var row = Array.from(document.querySelectorAll('.main-table tbody tr.tick input'), el => el.value);
            //xóa
            if (status === 1) {
                window.location = "http://localhost/BTL_CNW/admins/deleteOrderTour/" + row;
            }
            //duyệt
            if (status === 2) {
                window.location = "http://localhost/BTL_CNW/admins/commitTour/" + row;
            }
        }
    }

</script>
</body>

</html>