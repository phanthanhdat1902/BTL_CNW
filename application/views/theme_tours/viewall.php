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
                                            <span>
                                                <?php if ($touritem['score'] != 0) { ?>
                                                    <?php echo $touritem['score'] ?>
                                                <?php } ?>
                                            </span>
                                            <span>
                                                <?php $score = $touritem['score']; ?>
                                                <?php if($score >= 9.0) { ?>
                                                    <?php echo 'Rất tốt' ?>
                                                <?php } else if ($score >= 8.0) { ?>
                                                    <?php echo 'Tốt' ?>
                                                <?php } else if ($score >= 7.0) { ?>
                                                    <?php echo 'Ổn' ?>
                                                <?php } else if ($score >= 6.0) { ?>
                                                    <?php echo 'Tạm được' ?>
                                                <?php } else if ($score >= 5.0) { ?>
                                                    <?php echo 'Trung bình' ?>
                                                <?php } else { ?>
                                                    <?php echo 'Tệ' ?>
                                                <?php } ?>
                                            </span>
                                            <span>| 
                                                <?php if ($touritem['number_of_reviews'] != 0) { ?>
                                                    <?php echo $touritem['number_of_reviews'] ?>
                                                <?php } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col_4">
                                        <ul class="tourListPros">
                                            <?php foreach ($touritem['tag'] as $tag) : ?>
                                                <li><?php echo $tag ?></li>
                                            <?php endforeach; ?>
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
