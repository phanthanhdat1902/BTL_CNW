<div class="tourHomeHeader" style="background-image: url('http://localhost/BTL_CNW/public/img/moc-chau2.png')">
    <div class="container">
        <div class="">
            <div class="title">
                <h1>Du lịch theo phong cách riêng</h1>
                <h2>Trải nghiệm trọn vẹn - Giá cả phải chăng.</h2>
            </div>
        </div>
        <div class="searchForm">
            <input type="text" placeholder="Search here ..." style="width: 100%;">
            <input type="date">
            <input type="text" placeholder="Khởi hành từ">
            <input type="button" class="btnSearch" value="Tìm kiếm">
        </div>
    </div>
</div>
<div class="content">
    <?php
    foreach ($theme_tour as $theme_touritem):
        if (count($theme_touritem['tours']) > 0) {
            ?>
            <div>
                <div class="localHeaderLine">
                    <a href="../views/theme_tours/view/<?php echo $theme_touritem['theme']['id_theme'] ?>">
                        <span class="title"><?php echo $theme_touritem['theme']['name'] ?></span>
                        <span class="readMoreTuor">Xem thêm tour</span>
                    </a>
                </div>
                <div class="row">
                    <?php foreach ($theme_touritem['tours'] as $touritem): ?>
                    <a href="../tours/view/<?php echo $touritem['id_tour']?>">
                            <div class="column">
                                <div class="card">
                                    <div class="col_img">
                                        <img src="../public/img/<?php echo $touritem['thumbnail'] ?>" />
                                    </div>
                                    <div class="col_4">
                                        <span class="tourName"><?php echo $touritem['name'] ?></span>
                                    </div>
                                    <div class="col_4">
                                        <div class="scoreContainer">
                                            <span><?php echo $touritem['score'] ?></span>
                                            <span>Rất tốt</span>
                                            <span>| <?php echo $touritem['number_of_reviews'] ?></span>
                                        </div>
                                    </div>
                                    <div class="col_4">
                                        <ul class="tourListPros">
                                            <li>Cendeluxe tiêu chuẩn 5 sao</li>
                                            <li>Đảo Kỳ Co</li>
                                            <li>Giành Đá Đĩa</li>
                                            <li>Bãi Xếp</li>
                                            <li>Mũi Điện Đại Lãnh</li>
                                        </ul>
                                    </div>
                                    <div class="col_4">
                                        <div class="tourBooking">
                                            <span>3 khách đặt trong 24h qua</span>
                                        </div>
                                        <div class="cardItemPrice">
                                            <span class="price"><?php
                                                echo $html->asDollars($touritem['price_per_adult'] * 2);
                                                echo '/2N'
                                                ?></span>
                                            <span class="unitPrice">VND</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php }endforeach ?>
</div>
<div class="footer">
    <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
        <a href="#">Trần Văn Định</a>.
    </p>
</div>
</body>
</html>
