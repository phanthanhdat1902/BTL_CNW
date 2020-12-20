<?php echo $html->includeCss('styleTourDetail'); ?>
<?php echo $html->includeCss('styleAdminDialog'); ?>
<div class="content">
    <div class="contentHeader">
        <ol>
            <li>Trang chủ</li>
            <li>Bến Tre</li>
            <li><?php echo $tour['name']; ?></li>
        </ol>
    </div>
    <div class="pageTitle">
        <span><?php echo $tour['name']; ?></span>
    </div>
    <div class="container">
        <div class="tourHeaderContainer">
            <!-- <div class="tourHeaderImage" <?php echo $html->includeImg($tour['image']) ?>></div> -->
            <img src="http://localhost/BTL_CNW/public/img/<?php echo $tour['image'] ?>">

            <div class="tourHeaderInfor">
                <span><?php echo $tour['city'] ?></span>
                <span><?php echo $tour['number_of_days'] ?> Ngày <?php echo $tour['number_of_nights'] ?> Đêm</span>
                <span>Phương tiện: <?php
                                    array_shift($tour['transportation']);
                                    foreach ($tour['transportation'] as $key => $value) :
                                        if ($value == 1) {
                                            echo ucfirst($key);
                                            echo ' - ';
                                        }
                                    endforeach;
                                    ?></span>
                <span>Mã Tour: <?php echo $tour['code'] ?></span>
            </div>
        </div>
        <div class="tourDetailMain">
            <h1><?php echo $tour['introduction_heading'] ?></h1>
            <ul>
                <?php foreach ($tour['introduction'] as $tourIntroductionItem) : ?>
                    <li><?php echo $tourIntroductionItem ?></li>
                <?php endforeach; ?>
            </ul>
            <h1><?php echo $tour['description_heading'] ?></h1>
            <ul>
                <?php foreach ($tour['description'] as $tourDescriptionItem) : ?>
                    <li><?php echo $tourDescriptionItem ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="tourSchedule">
            <h1>Chương trình tour</h1>

            <h3>NGÀY 01: TP HỒ CHÍ MINH - SAPA ( ĂN TRƯA, TỐI)</h3>
            <span>Sáng: 05h30 Nhân viên đón đoàn tại sân bay Tân Sơn Nhất làm thủ tục bay đi Hà Nội ( chuyến bay của Viet Jet Air VJ 128 lúc 07h55). Đến sân bay Nội Bài, xe khởi hành đưa đoàn đi Sapa.Đoàn dùng cơm trưa tại Lào Cai.Quý khách tự do tham quan và chụp hình tại cột mốc hữu nghị Việt Nam – Trung Quốc,</span>
            <img src="https://cdn2.ivivu.com/2020/05/19/11/ivivu-cua-khau-huu-nghi.gif">
            <p><em>Cột mốc Hữu Nghị.</em></p>

            <h3>NGÀY 02: KHÁM PHÁ SAPA ( ĂN SÁNG, TRƯA, ĂN TỐI TỰ TÚC)</h3>
            <span>Sáng: Điểm tâm sáng, Xe và HDV đưa Quý khách đến bản Cát Cát, bắt đầu hành trình khám phá bản làng - Tham quan bản Cát Cát - Sín Chải của người H’mong. Quý khách sẽ được thăm và tìm hiểu phong tục tập quán sinh hoạt kỳ thú, đơn sơ đến bình dị của những người dân tộc thiểu số.</span>
            <img src="https://cdn2.ivivu.com/2020/05/19/11/ivivu-cat-cat-sin-chai.gif">
            <p><em>Bản Cát Cát - Sín Chải.</em></p>

        </div>

        <div class="departureSchedule">
            <form>
                <h1>Lịch khởi hành</h1>
                <table>
                    <thead>
                        <th>Ngày khởi hành</th>
                        <th>Ngày về</th>
                        <th>Tình trạng</th>
                        <th>Giá</th>
                    </thead>
                    <tbody>
                        <?php foreach ($tour['departures'] as $item) : ?>
                            <tr>
                                <td><?php echo $item['Departure']['start_date'] ?></td>
                                <td><?php echo $item['Departure']['end_date'] ?></td>
                                <td>Liên hệ</td>
                                <td><?php echo $html->asDollars($tour['price_per_adult'] * 2); ?>/2 người lớn</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
        </div>

        <form>
            <div class="bookingForm">
                <div>
                    <h1>Đặt ngay, chỉ 2 phút. Hoặc gọi (028) 3933 8002</h1>
                </div>
                <div class="rowx">
                    <div class="colxl">
                        <span>Chọn ngày khởi hành: </span>
                    </div>
                    <div class="colxr">
                        <select>
                            <option>10/08/1999</option>
                            <option>10/08/1999</option>
                            <option>10/08/1999</option>
                        </select>
                    </div>
                </div>
                <div class="rowx">
                    <div class="colxl">
                        <span class="numPeople">1</span>
                        <span>Người lớn</span>
                    </div>
                    <div class="colxr">
                        <span>x</span>
                        <span id="price1"><?php echo ($html->asDollars($tour['price_per_adult'])); ?></span>
                        <input type="hidden" value="20000" id="price_old">
                        <span>VND</span>
                        <button type="button" id="btnSubOld" onclick="onActionOrderTour(this)">-</button>
                        <button type="button" id="btnAddOld" onclick="onActionOrderTour(this)">+</button>
                    </div>
                </div>
                <div class="rowx">
                    <div class="colxl">
                        <span class="numPeople">1</span>
                        <span>Trẻ em</span>
                    </div>
                    <div class="colxr">
                        <span>x</span>
                        <span id="price2"><?php echo ($html->asDollars($tour['price_per_adult'])); ?></span>
                        <span>VND</span>
                        <input type="hidden" value="50000" id="price_chil">
                        <button type="button" id="btnSubChil" onclick="onActionOrderTour(this)">-</button>
                        <button type="button" id="btnAddChil" onclick="onActionOrderTour(this)">+</button>
                    </div>
                </div>
                <div class="rowx">
                    <span>Tổng cộng</span>
                    <span id="sunPrice"><?php echo $html->asDollars($tour['price_per_adult'] * 2); ?></span>
                </div>
                <div class="rowx">
                    <button type="button" id="btnRequestOrder">Yêu cầu đặt</button>
                </div>

            </div>
            <!-- The Modal order -->
            <div id="modalOrder" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <h1>Yêu cầu đặt tour</h1>
                        <span>Họ & Tên *</span>
                        <input type="text">
                        <span>Điện thoại *</span>
                        <input type="text">
                        <span>Email</span>
                        <input type="text">
                        <span>Yêu cầu khác</span>
                        <input type="text">
                        <button type="submit">Gửi yêu cầu</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="tourService">
            <h1>Dịch vụ đi kèm</h1>
            <ul>
                <?php foreach ($tour['service_tours'] as $serviceItem) : ?>
                    <li><?php echo $serviceItem ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="subPolicy">
            <h1>Chính sách phụ thu</h1>
            <ul>
                <?php foreach ($tour['term_surcharge'] as $item) : ?>
                    <li> <?php echo $item; ?> </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="tourCancellationRules">
            <h1>Điều khoản</h1>
            <div class="tab">
                <button class="tablinks" onclick="openTabRules(event, 'tab1')" id="defaultOpen">Bao gồm</button>
                <button class="tablinks" onclick="openTabRules(event, 'tab2')">Không bao gồm</button>
                <button class="tablinks" onclick="openTabRules(event, 'tab3')">Hủy đổi</button>
                <button class="tablinks" onclick="openTabRules(event, 'tab4')">Lưu ý</button>
            </div>

            <div id="tab1" class="tabcontent">
                <span onclick="this.parentElement.style.display = 'none'" class="topright">&times</span>
                <p>Tour đã bao gồm :</p>
                <ul>
                    <?php foreach ($tour['term_price_included'] as $serviceItem) : ?>
                        <li><?php echo $serviceItem ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div id="tab2" class="tabcontent">
                <span onclick="this.parentElement.style.display = 'none'" class="topright">&times</span>
                <p>Tour không bao gồm: </p>
                <ul>
                    <?php foreach ($tour['term_price_not_included'] as $serviceItem) : ?>
                        <li><?php echo $serviceItem ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div id="tab3" class="tabcontent">
                <span onclick="this.parentElement.style.display = 'none'" class="topright">&times</span>
                <p>Chính sách hủy: </p>
                <ul>
                    <?php foreach ($tour['term_cancelling'] as $serviceItem) : ?>
                        <li><?php echo $serviceItem ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id="tab4" class="tabcontent">
                <span onclick="this.parentElement.style.display = 'none'" class="topright">&times</span>
                <p></p>
                <ul>
                    <?php foreach ($tour['term_note'] as $serviceItem) : ?>
                        <li><?php echo $serviceItem ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="customerReview">
            <h2>Đánh giá gần đây</h2>
            <?php
            foreach ($tour['reviewUsers'] as $item) :
                foreach ($item as $content) :
            ?>
                    <div class="customerReviewDetail">
                        <div class="reviewDetailLeft">
                            <span>&#10064;</span>
                            <span><?php echo $content['email'] ?></span>
                        </div>
                        <div class="reviewDetailRight">
                            <div>
                                <span class="scoreSpan"><?php echo $content['score'] ?></span>
                                <span class="scoreReviewDate"><?php echo $content['create_time'] ?></span>
                            </div>
                            <span class="customerReviewContent"><?php echo $content['content'] ?></span>
                        </div>
                    </div>
            <?php
                endforeach;
            endforeach;
            ?>


            <div class="customerReviewDetail">
                <div class="reviewDetailLeft">
                    <span>&#10064;</span>
                    <span>Trang Nguyễn</span>
                </div>
                <div class="reviewDetailRight">
                    <div>
                        <span class="scoreSpan">8.0</span>
                        <span class="scoreReviewDate">24-06-2020</span>
                    </div>
                    <span class="customerReviewContent">Tour tư vấn ban đầu có 25 khách nhưng khi đến sân bay là 45 khách. Tour đi quá đông, hdv không thể chăm sóc tốt hết được</span>
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