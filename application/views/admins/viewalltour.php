<div class="container">
    <h1>Danh sách tour</h1>
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
                    <th>Chủ đề</th>
                    <th>Tên tour</th>
                    <th>Điểm</th>
                    <th>Số lượng review</th>
                    <th>Giá trẻ em</th>
                    <th>Giá người lớn</th>
                    <th>Tổng giá 1 người lớn 1 trẻ em</th>
                    <th>Thành phố xuất phát</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($tours as $item):
                    ?>
                    <tr>
                <input type="hidden" value="<?php echo $item['Tour']['id_tour'] ?>" name="id">
                <td><?php echo ++$i; ?></td>
                <td><?php echo $item['Theme_tours']['name'] ?></td>
                <td><?php echo $item['Tour']['name'] ?></td>
                <td><?php echo $item['Tour']['score'] ?></td>
                <td><?php echo $item['Tour']['number_of_reviews'] ?></td>
                <td><?php echo $html->asDollars($item['Tour']['price_per_adult']) ?></td>
                <td><?php echo $html->asDollars($item['Tour']['price_per_child']) ?></td>
                <td><?php echo $html->asDollars($item['Tour']['price_per_child'] + $item['Tour']['price_per_adult']) ?></td>
                <td><?php echo $item['Cities']['name'] ?></td>
                <td>Sẵn sàng</td>

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
                /*
                 Lấy id của user được click
                 */
                var row = Array.from(document.querySelectorAll('.main-table tbody tr.tick input'), el => el.value);
                var orderId = row[0];
//                alert("tour id: " + orderId);
                window.location = "http://localhost/BTL_CNW/admins/detailtour/" + orderId;
            }
        }
        //TH bấm yes
        if (btn.classList.contains("btnConfirmYes")) {
            var row = Array.from(document.querySelectorAll('.main-table tbody tr.tick input'), el => el.value);
            //xóa                    
            if (status === 1) {
//                        alert("xóa: " + row);
                window.location = "http://localhost/BTL_CNW/admins/deleteTour/" + row;
            }
        }
    }
</script>
</body>

</html>