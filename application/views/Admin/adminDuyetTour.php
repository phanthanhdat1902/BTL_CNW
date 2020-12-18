<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Đây là trang quản trị</title>
    <link rel="stylesheet" href="/styleAdmin.css" />
    <link rel="stylesheet" href="/styleAdminDialog.css" />
    <script src="/scriptAdmin.js"></script>

</head>

<body>
    <div class="header">
        <div class="header_conent">
            <h1 class="center">IVIVU</h1>
            <div class="btn_search center">
                <input type="text" placeholder="Search here ..." />
                <input class="btn_submit_search" type="submit" value="Search">
            </div>
            <ul class="center">
                <li><a href="">Message</a></li>
                <li><a href="">Notify</a></li>
                <li><a id="dropbtn">Xin chào: Admin &#10097;</a>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#home">Thông tin tài khoản</a>
                        <a href="#about">About</a>
                        <a href="#contact">Thoát</a>
                    </div>

                </li>
            </ul>

        </div>
    </div>
    <div id="btnMenu" class="click">
        <span>&#9776;</span>
    </div>
    <div class="menu show">
        <div class="logo">
            <h1>IVIVU</h1>
        </div>
        <ul>
            <li><a href="/admin.html">Dashboard </a></li>
            <li>
                <a id="features">Quản lý tour <span id="iconFirst">&#10097;</span></a>
                <ul class="subFeatures">
                    <li><a href="/adminDanhSachTour.html">Danh sách tour</a></li>
                    <li><a href="/adminThemTour.html">Thêm tour</a></li>
                    <li><a href="/adminDuyetTour.html">Duyệt tour</a></li>
                </ul>
            </li>
            <li>
                <a id="services">Quản lý hotel<span id="iconSecond">&#10097;</span></a>
                <ul class="subService">
                    <li><a href="/AdminDanhSachHotel.html">Danh sách hotel</a></li>
                    <li><a href="#">Thêm hotel</a></li>
                    <li><a href="#">Duyệt hotel</a></li>
                </ul>
            </li>
            <li><a href="#">Overview</a></li>
            <li><a href="#">Chart</a></li>
        </ul>
    </div>
    <div class="content show">
        <div class="container">
            <h1>Duyệt tour</h1>
            <div class="action">
                <div class="action_left">
                    <button id="btnAdd">Thêm mới</button>
                    <button id="btnUpdate" class="disable">Cập nhật</button>
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
                            <th>Email</th>
                            <th>ID Tour</th>
                            <th>Kiểu thanh toán</th>
                            <th>Số lượng trẻ em</th>
                            <th>Số lượng người lớn</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày kết thúc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>123</td>
                            <td>Từ a đến b</td>
                            <td>10/12/2020</td>
                            <td>xyz</td>
                            <td>123</td>
                            <td>Từ a đến b</td>
                            <td>10/12/2020</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>123</td>
                            <td>Từ a đến b</td>
                            <td>10/12/2020</td>
                            <td>xyz</td>
                            <td>123</td>
                            <td>Từ a đến b</td>
                            <td>10/12/2020</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>123</td>
                            <td>Từ a đến b</td>
                            <td>10/12/2020</td>
                            <td>xyz</td>
                            <td>123</td>
                            <td>Từ a đến b</td>
                            <td>10/12/2020</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>123</td>
                            <td>Từ a đến b</td>
                            <td>10/12/2020</td>
                            <td>xyz</td>
                            <td>123</td>
                            <td>Từ a đến b</td>
                            <td>10/12/2020</td>
                        </tr>
                    </tbody>
                </table>
                <div>Phân trang 1.2.3</div>
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
                        <button type="button" class="btnConfirmYes">Yes</button>
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
                        <button type="button" class="btnConfirmYes">Yes</button>
                        <button type="button" class="btnConfirmNo">No</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <span>Copyright © Your Website 2020</span>
        </div>
    </div>
</body>

</html>