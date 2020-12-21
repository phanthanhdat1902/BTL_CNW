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
                    <th>ID Tour</th>
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
                <td><?php echo $item['Order_tour']['id_tour'] ?></td>
                <td><?php
                    if (isset($item['Order_tour']['number_of_adults'])) {
                        echo $item['Order_tour']['number_of_adults'];
                    }
                    ?></td>
                <td><?php echo $item['Order_tour']['number_of_children'] ?></td>
                <td><?php echo $item['departures']['start_date'] ?></td>
                <td><?php echo $item['departures']['end_date'] ?></td>
                <td><?php echo $html->asDollars($item['Order_tour']['price']) ?></td>
                <td><?php echo $item['Order_tour']['number_of_children'] ?></td>
                <td><?php echo $item['Order_tour']['phone_number'] ?></td>
                <td><?php echo $item['Order_tour']['email'] ?></td>
                <td><?php echo $item['Order_tour']['note'] ?></td>
                <td><?php
                    if ($item['Order_tour']['status'] == 1) {
                        echo "Đã duyệt ";
                    } else if ($item['Order_tour']['status'] == 0) {
                        echo "Chưa duyệt";
                    } else {
                        echo "Đã Hủy";
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
<?php echo $html->includeJs('viewallorder');?>