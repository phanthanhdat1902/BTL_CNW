<div class="container">
    <h1>Duyệt tour</h1>
    <div class="action">
        <div class="action_left">
            <button id="btnAdd" onclick="onActionBtn(this)">Thêm mới</button>
            <button id="btnUpdate" class="disable" onclick="onActionBtn(this)">Cập nhật</button>
            <button id="btnApproval" class="disable">Duyệt</button>
            <button id="btnCancel" class="disable">Hủy</button>
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
                foreach ($orderTours as $item) :
                    ?>
                    <tr>
                <input type="hidden" value="<?php echo $item['Order_tour']['id_order_tour'] . '/' . $item['Order_tour']['status'] ?>" name="id">
                <td><?php echo ++$i; ?></td>
                <td>123</td>
                <td><?php if (isset($item['Order_tour']['number_of_adults'])) {
                    echo $item['Order_tour']['number_of_adults'];
                } ?></td>
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
            <span>Tổng</span>
            <span id="page_total">24</span>
            <span>trang</span>
            <button class="btn_page" id="btn_first" onclick="onPage(this)">
                <span>&#10096;&#10096;</span>
            </button>
            <button class="btn_page" id="btn_prev" onclick="onPage(this)">
                <span>&#10096;</span>
            </button>
            <input type="text" value="1" id="page_index" />
            <button class="btn_page" id="btn_next" onclick="onPage(this)">
                <span>&#10097;</span>
            </button>
            <button class="btn_page" id="btn_last" onclick="onPage(this)">
                <span>&#10097;&#10097;</span>
            </button>
            <span>Page size</span>
            <select name="pagasize" id="page_size" onchange="onPage(this)">
                <option selected="selected" value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
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
<!-- The Modal Hủy Duyệt-->
<div id="modalCancel" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <div class="title">
                <h2>Bạn hủy duyệt tour?</h2>
            </div>
            <div class="btnConfirm">
                <button type="button" class="btnConfirmYes" onclick="onActionBtn(this, 3)">Yes</button>
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
            if (status === 3) {
                alert("Hủy duyệt tour: " + row);
            }
        }
    }

    var page_index = document.getElementById("page_index");
    page_index.addEventListener('keypress', function (e) {
        if (e.keyCode === 13) {
            var pageIndex = page_index.value;
            var pageTotal = document.getElementById("page_total").innerText;
            var pageSize = document.getElementById("page_size").options[document.getElementById("page_size").selectedIndex].value;
            alert("page: page index=" + pageIndex + " page size=" + pageSize + " page total=" + pageTotal);
        }
    });

    function onPage(button, event) {
        var btn = button;

        var pageIndex = parseInt(page_index.value);
        var pageSize = document.getElementById("page_size").options[document.getElementById("page_size").selectedIndex].value;
        var pageTotal = parseInt(document.getElementById("page_total").innerText);

        if (btn.id === "btn_first") {
            pageIndex = 1;
        }

        if (btn.id === "btn_prev") {
            pageIndex = pageIndex - 1;
        }
        if (btn.id === "btn_next") {
            pageIndex = pageIndex + 1;
        }
        if (btn.id === "btn_last") {
            pageIndex = pageTotal;
        }
        if (pageIndex <= 1) {
            pageIndex = 1;
        }
        if (pageIndex >= pageTotal) {
            pageIndex = pageTotal;
        }
        page_index.value = pageIndex;
        alert("page: page index= " + pageIndex + " page size=" + pageSize + " page total=" + pageTotal);
    }
</script>
</body>

</html>