<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel_content</title>
</head>
<link rel="stylesheet" href="hotelcontent.css">

<body>
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

    </div>

    <?php $listTheme = $template['listTheme'] ?>
    <div class="Content">
        <p class="title">Du lịch an toàn</p>
        <p class="detail">Nâng cao súc khỏe, cân bằng cuộc sống</p>
        <div class="Content_1">

            <a href="../theme_hotels/view/<?php echo listTheme[0]['Theme_hotel']['id_theme'] ?>">
                <div class="col_1">
                    <div class="card_1" style="background-image: url('/public/img/<?php echo listTheme[0]['Theme_hotel']['image'] ?>');
                background-size: cover;">
                        <p class="Infor"><?php echo listTheme[0]['Theme_hotel']['name'] ?></p>
                        <p class="description"><?php echo listTheme[0]['Theme_hotel']['description'] ?> - <span><?php echo listTheme[0]['Theme_hotel']['number_of_hotel'] ?> khách sạn</span></p>
                    </div>
                </div>
            </a>

            <a href="../theme_hotels/view/<?php echo listTheme[1]['Theme_hotel']['id_theme'] ?>">
                <div class="col_1">
                    <div class="card_2" style=" background-image: url('/public/img/<?php echo listTheme[1]['Theme_hotel']['image'] ?>');
        
                    background-size: cover;">
                        <p class="Infor"><?php echo listTheme[1]['Theme_hotel']['name'] ?></p>
                        <p class="description"><?php echo listTheme[1]['Theme_hotel']['description'] ?> - <span><?php echo listTheme[1]['Theme_hotel']['number_of_hotels'] ?> khách sạn</span></p>
                    </div>
                </div>
            </a>

            <a href="../theme_hotels/view/<?php echo listTheme[2]['Theme_hotel']['id_theme'] ?>">
                <div class="col_1">
                    <div class="card_3" style="background-image: url('/public/img/<?php echo listTheme[2]['Theme_hotel']['image'] ?>');
        
                    background-size: cover;">
                        <p class="Infor"><?php echo listTheme[2]['Theme_hotel']['name'] ?></p>
                        <p class="description"><?php echo listTheme[2]['Theme_hotel']['description'] ?> - <span><?php echo listTheme[1]['Theme_hotel']['number_of_hotels'] ?> khách sạn</span></p>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="col_1">
                    <div class="card_4" style="background-image: url('/public/img/hop_qua.png');
                    background-size: cover;">
                        <p class="Infor">Gift Voucher</p>
                        <p class="description">Lưu giữ khoảnh khắc, trải nghiệm hành trình</p>
                    </div>
                </div>
            </a>

        </div>


        <div class="Content_2">
            <p class="title">Ưu đãi tốt nhất hôm nay</p>
            <p class="detail">Nhanh tay đặt ngay. Để mai sẽ lỡ</p>
            <div class="Discount" style="background-image: url('/public/img/Vung_tau.png');
            width: 100%;
            height: 250px;"></div>
        </div>

        <?php $listCity = $template['listCity'] ?>
        <div class="Content_3">
            <p class="title">Điểm đến yêu thích trong nước</p>
            <p class="detail">Lên rừng xuống biển. Trọn vẹn Việt Nam</p>
            <div class="area">
                <div class="row_1">
                    <a class="area_1" style="background-image: url('/public/img/<?php echo $listCity[0]['City']['image'] ?>');"
                        href="../cities/view/<?php echo $listCity[0]['City']['id_city'] ?>" style="text-decoration: none;">
                        <div class="name"><?php echo $listCity[0]['City']['name'] ?></div>
                    </a>
                    <a class="area_2" style="background-image: url('/public/img/<?php echo $listCity[1]['City']['image'] ?>');"
                        href="../cities/view/<?php echo $listCity[1]['City']['id_city'] ?>">
                        <div class="name"><?php echo $listCity[1]['City']['iname'] ?></div>
                    </a>
                    <a class="area_3" style="background-image: url('/public/img/<?php echo $listCity[2]['City']['image'] ?>');"
                        href="../cities/view/<?php echo $listCity[2]['City']['id_city'] ?>">
                        <div class="name"><?php echo $listCity[2]['City']['name'] ?></div>
                    </a>
                </div>

                <div class="row_2">
                    <a class="area_4" style="background-image: url('/public/img/<?php echo $listCity[3]['City']['image'] ?>');"
                        href="../cities/view/<?php echo $listCity[3]['City']['id_city'] ?>">
                        <div class="name"><?php echo $listCity[3]['City']['name'] ?></div></div>
                    </a>
                    <a class="area_5" style="background-image: url('/public/img/<?php echo $listCity[4]['City']['image'] ?>');"
                        href="../cities/view/<?php echo $listCity[4]['City']['id_city'] ?>">
                        <div class="name"><?php echo $listCity[4]['City']['name'] ?></div></div>
                    </a>
                </div>


                <div class="row_3">
                    <a class="area_6" style="background-image: url('/public/img/<?php echo $listCity[5]['City']['image'] ?>');"
                        href="../cities/view/<?php echo $listCity[5]['City']['id_city'] ?>">
                        <div class="name"><?php echo $listCity[5]['City']['name'] ?></div></div>
                    </a>
                    <a class="area_7" style="background-image: url('/public/img/<?php echo $listCity[6]['City']['image'] ?>');"
                        href="../cities/view/<?php echo $listCity[6]['City']['id_city'] ?>">
                        <div class="name"><?php echo $listCity[6]['City']['name'] ?></div></div>
                    </a>
                    <a class="area_8" style=" background-image: url('/public/img/<?php echo $listCity[7]['City']['image'] ?>');"
                        href="../cities/view/<?php echo $listCity[7]['City']['id_city'] ?>">
                        <div class="name"><?php echo $listCity[7]['City']['name'] ?></div></div>
                    </a>
                </div>


            </div>
        </div>

        <!-- Content_4 -->
        <div class="Content_4">
            <p class="title">Điểm đến yêu thích nước ngoài</p>
            <p class="detail">Bao la thế giới. Bốn bể là nhà</p>
            <div class="area">
                <div class="row_1">
                    <a class="area_1" style="background-image: url('/public/img/madives.jpg');">
                        <div class="name">Maldives</div>
                    </a>
                    <a class="area_2" style="background-image: url('/public/img/switzerland.jpg');">
                        <div class="name">Switzerland</div>
                    </a>
                    <a class="area_3" style="background-image: url('/public/img/singapore.jpg');">
                        <div class="name">Singapore</div>
                    </a>
                </div>

                <div class="row_2">
                    <a class="area_4" style="background-image: url('/public/img/bangcok.jfif');">
                        <div class="name">Bangkok</div>
                    </a>
                    <a class="area_5" style="background-image: url('/public/img/bali.jpg');">
                        <div class="name">Bali</div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>