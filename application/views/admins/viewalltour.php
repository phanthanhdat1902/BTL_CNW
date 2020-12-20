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
                foreach ($tours as $item) :
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
                alert("xóa: " + row);
                //                window.location = "http://localhost/BTL_CNW/admins/deleteTour/" + row;
            }
        }
    }
    var page_index = document.getElementById("page_index");
    page_index.addEventListener('keypress', function(e) {
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