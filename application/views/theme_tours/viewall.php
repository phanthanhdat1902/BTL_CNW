<div class="content">
    <?php
    foreach ($theme_tour as $theme_touritem):
        if (count($theme_touritem['tours']) > 0) {
            ?>
            <div>
                <div class="localHeaderLine">
                    <a href="<?php echo BASE_PATH . 'theme_tours/view/' . $theme_touritem['theme']['id_theme_tour'] ?>">
                        <span class="title"><?php echo $theme_touritem['theme']['name'] ?></span>
                        <span class="readMoreTuor">Xem thêm tour</span>
                    </a>
                </div>
                <div class="row">
                    <?php foreach ($theme_touritem['tours'] as $touritem): ?>
                        <a href="<?php echo BASE_PATH . 'tours/view/' . $touritem['id_tour'] ?>">
                            <div class="column">
                                <div class="card">
                                    <div class="col_img">
                                        <img src="<?php echo BASE_PATH . 'public/img/' . $touritem['thumbnail'] ?>" />
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
