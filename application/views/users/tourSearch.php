<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt tuor du lịch</title>
    <link rel="stylesheet" href="/css/styleTuor.css" />
    <link rel="stylesheet" href="/css/styleTourSearch.css">
    <script src="/js/scriptHome.js"></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="logo">
                <h4>LOGO</h4>
            </div>
            <ul class="navHeader" id="myMenu">
                <li><a href="#">Khách sạn</a></li>
                <li><a href="#">Tour</a></li>
                <li><a href="#">Vé máy bay</a></li>
                <li><a href="#">Cẩm nang du lịch</a></li>
                <li><a href="#">...</a>
                    <ul class="subMenu">
                        <li><a href="#">Tài khoản đặt tour</a></li>
                        <li><a href="#">Ưu đãi đặc biệt</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Hỏi đáp</a></li>
                        <li><a href="#">Hỗ trợ</a></li>
                    </ul>
                </li>
            </ul>
            <div class="userControl">
                <a href="#">Đăng ký</a>
                <a href="#">Đăng nhập</a>
                <span id="btnMenu" onclick="showMenu()">&#9776;</span>
            </div>
        </div>
    </div>
    <div class="tourHomeHeader">
        <div class="container">
            <div class="">
                <div class="title">
                    <h1>Du lịch theo phong cách riêng</h1>
                    <h2>Trải nghiệm trọn vẹn - Giá cả phải chăng.</h2>
                </div>
            </div>
            <div class="searchForm">
                <input type="text" placeholder="search here ..." style="width: 100%;">
                <input type="date">
                <input type="text" placeholder="Khởi hành từ">
                <input type="button" class="btnSearch" value="Tìm kiếm">
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="contentHeader">
                <ol>
                    <li>Trang chủ</li>
                    <li>Hà Nội</li>
                </ol>
            </div>
            <div class="pageTitle">
                <span>Tour Miền Tây 2N1D: Bến Tre - Trà Vinh - Cồn Chim Tết</span>
            </div>
            <div class="mainContainer">
                <div class="tourListSideBar">
                    <div class="sideBarGroup">
                        <div class="sideBarHeader">
                            <span>Địa điểm HOT trong nước</span>
                        </div>
                        <div class="sideBarBody">
                            <ul>
                                <li><a href="#">Sapa</a></li>
                                <li><a href="#">Hà Nội</a></li>
                                <li><a href="#">Phú Quốc</a></li>
                                <li><a href="#">Miền Tây</a></li>
                                <li><a href="#">Đà Nẵng</a></li>
                                <li><a href="#">Đà Lạt</a></li>
                                <li><a href="#">Nha Trang</a></li>
                                <li><a href="#">Phú Yên</a></li>
                                <li><a href="#">Quy Nhơn</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sideBarGroup">
                        <div class="sideBarHeader">
                            <span>Loạt Tours</span>
                        </div>
                        <div class="sideBarBody">
                            <ul>
                                <li><a href="#">Trọn gói</a></li>
                                <li><a href="#">Tour land</a></li>
                                <li><a href="#">Free & Easy</a></li>
                                <li><a href="#">Daily tours</a></li>
                                <li><a href="#">IVIVU Signature</a></li>
                                <li><a href="#">Dịch vụ tư vấn du lịch</a></li>
                                <li><a href="#">DAY USE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sideBarGroup">
                        <div class="sideBarHeader">
                            <span>Tours theo chủ đề</span>
                        </div>
                        <div class="sideBarBody">
                            <ul>
                                <li><a href="#">IVIVU Reconmmended Tours</a></li>
                                <li><a href="#">Tour Cao Cấp</a></li>
                                <li><a href="#">Tour Trải Nghiệm</a></li>
                                <li><a href="#">Cung Đường Đông Tây Bắc</a></li>
                                <li><a href="#">IVIVU DEAL</a></li>
                                <li><a href="#">Tour nội địa hot</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tourListContainer">
                    <div class="pageTitle">
                        <span>Tour du lịch Hà Nội từ Hồ Chí Minh</span>
                    </div>
                    <div class="orderTitle">
                        <span>Sắp xêp theo: </span>
                        <span>iVIVU Đề xuất</span>
                        <span>Thời lượng tour</span>
                        <span>Tên tour</span>
                    </div>
                    <div class="tourItem">
                        <div class="tourItemImage"></div>
                        <div class="tourItemContent">
                            <span class="tourName">Tour Miền Bắc 5N4D: Sài Gòn - Hà Nội - Sapa - Hạ Long</span>
                            <div class="scoreContainer">
                                <span>8.0</span>
                                <span>Rất tốt</span>
                                <span>| 1 đánh giá</span>
                            </div>
                            <ul class="tourListPros">
                                <li>Cendeluxe tiêu chuẩn 5 sao</li>
                                <li>Đảo Kỳ Co</li>
                                <li>Giành Đá Đĩa</li>
                                <li>Bãi Xếp</li>
                                <li>Mũi Điện Đại Lãnh</li>
                            </ul>
                        </div>
                        <div class="tourItemContentPrice">
                            <div class="tourItemDateTime"><span>Khởi hành: 09-12-2020</span></div>
                            <div class="tourItemPrice"><span>6.290.000 VND</span></div>
                            <div class="tourItemPricePerGuest"><span>*Áp dụng nhóm 2 khách</span></div>
                        </div>
                    </div>
                    <div class="tourItem">
                        <div class="tourItemImage"></div>
                        <div class="tourItemContent">
                            <span class="tourName">Tour Miền Bắc 5N4D: Sài Gòn - Hà Nội - Sapa - Hạ Long</span>
                            <div class="scoreContainer">
                                <span>8.0</span>
                                <span>Rất tốt</span>
                                <span>| 1 đánh giá</span>
                            </div>
                            <ul class="tourListPros">
                                <li>Cendeluxe tiêu chuẩn 5 sao</li>
                                <li>Đảo Kỳ Co</li>
                                <li>Giành Đá Đĩa</li>
                                <li>Bãi Xếp</li>
                                <li>Mũi Điện Đại Lãnh</li>
                            </ul>
                        </div>
                        <div class="tourItemContentPrice">
                            <div class="tourItemDateTime"><span>Khởi hành: 09-12-2020</span></div>
                            <div class="tourItemPrice"><span>6.290.000 VND</span></div>
                            <div class="tourItemPricePerGuest"><span>*Áp dụng nhóm 2 khách</span></div>
                        </div>
                    </div>
                    <div class="tourItem">
                        <div class="tourItemImage"></div>
                        <div class="tourItemContent">
                            <span class="tourName">Tour Miền Bắc 5N4D: Sài Gòn - Hà Nội - Sapa - Hạ Long</span>
                            <div class="scoreContainer">
                                <span>8.0</span>
                                <span>Rất tốt</span>
                                <span>| 1 đánh giá</span>
                            </div>
                            <ul class="tourListPros">
                                <li>Cendeluxe tiêu chuẩn 5 sao</li>
                                <li>Đảo Kỳ Co</li>
                                <li>Giành Đá Đĩa</li>
                                <li>Bãi Xếp</li>
                                <li>Mũi Điện Đại Lãnh</li>
                            </ul>
                        </div>
                        <div class="tourItemContentPrice">
                            <div class="tourItemDateTime"><span>Khởi hành: 09-12-2020</span></div>
                            <div class="tourItemPrice"><span>6.290.000 VND</span></div>
                            <div class="tourItemPricePerGuest"><span>*Áp dụng nhóm 2 khách</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
            <a href="#">Trần Văn Định</a>.
        </p>
    </div>
</body>

</html>