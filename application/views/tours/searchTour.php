<?php echo $html->includeCss('styleTourSearch'); ?>
<div class="tourHomeHeader" style="background-image: url('http://localhost/BTL_CNW/public/img/moc-chau2.png')">
    <div class="container">
        <div class="">
            <div class="title">
                <h1>Du lịch theo phong cách riêng</h1>
                <h2>Trải nghiệm trọn vẹn - Giá cả phải chăng.</h2>
            </div>
        </div>
        <div class="searchForm">
            <form action="<?php echo (BASE_PATH . 'tours/encodingUrl') ?>" method="GET">
                <input type="text" name="toCity" placeholder="Search here ..." style="width: 100%;">
                <input type="date">
                <input type="text" name="fromCity" placeholder="Khởi hành từ">
                <input type="submit" class="btnSearch" value="Tìm kiếm">
            </form>
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
                <?php foreach ($listTour as $item): ?>
                <a href="<?php echo ( BASE_PATH . 'tours/view/'. $item['Tour']['id_tour'])?>">
                        <div class="tourItem">
                            <div class="tourItemImage"<?php echo $html->includeImg($item['Tour']['thumbnail']) ?>></div>
                            <div class="tourItemContent">
                                <span class="tourName"><?php echo $item['Tour']['name'] ?></span>
                                <div class="scoreContainer">
                                    <span><?php echo $item['Tour']['score'] ?></span>
                                    <span>Rất tốt</span>
                                    <span>| <?php echo $item['Tour']['number_of_reviews'] ?> đánh giá</span>
                                </div>
                                <ul class="tourListPros">
                                    <li>Cendeluxe tiêu chuẩn 5 sao</li>
                                    <li>Đảo Kỳ Co</li>
                                    <li>Giành Đá Đĩa</li>
                                    <li>Bãi Xếp</li>
                                    <li>Mũi Điện Đại Lãnh</li>
                                </ul>
                            </div>
                            <?php if (isset($item['departures'][0])) { ?>
                                <div class="tourItemContentPrice">
                                    <div class="tourItemDateTime"><span>Khởi hành: <?php echo $item['departures'][0]['Departure']['start_date'] ?> - <?php echo $item['departures'][0]['Departure']['end_date'] ?></span></div>
                                    <div class="tourItemPrice"><span><?php echo $html->asDollars($item['Tour']['price_per_adult'] * 2) ?></span></div>
                                    <div class="tourItemPricePerGuest"><span>*Áp dụng nhóm 2 khách</span></div>
                                </div>
                            <?php } ?>
                        </div>
                    </a>
                <?php endforeach; ?>
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
