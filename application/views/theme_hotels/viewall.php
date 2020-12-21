<link rel="stylesheet" href="../public/css/Hotel_content.css">
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
<div class="Content">
    <p class="title">Du lịch an toàn</p>
    <p class="detail">Nâng cao súc khỏe, cân bằng cuộc sống</p>
    <div class="Content_1">
        <?php $theme_hotels = $template['listTheme'] ?>
        <?php foreach ($theme_hotels as $theme_hotelsitem): ?>
            <a href="../theme_hotels/view/<?php echo $theme_hotelsitem['Theme_hotel']['id_theme'] ?>">
                <div class="col_1">
                    <div class="card_1" style="background-image: url('../public/img/<?php echo $theme_hotelsitem['Theme_hotel']['image']; ?>')">
                        <p class="Infor"><?php echo $theme_hotelsitem['Theme_hotel']['name'] ?></p>
                        <p class="description"><?php echo $theme_hotelsitem['Theme_hotel']['description'] ?></span></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>

    </div>


    <div class="Content_2">
        <p class="title">Ưu đãi tốt nhất hôm nay</p>
        <p class="detail">Nhanh tay đặt ngay. Để mai sẽ lỡ</p>
        <div class="Discount"></div>
    </div>

    <div class="Content_3">
        <p class="title">Điểm đến yêu thích trong nước</p>
        <p class="detail">Lên rừng xuống biển. Trọn vẹn Việt Nam</p>
        <?php $listCity = $template['listCity'] ?>
        <div class="area">
            <div class="row_1">
                <a class="area_1" href="../cities/view/<?php echo $listCity[0]['City']['id_city'] ?>">
                    <div class="name" ""><?php $listCity[0]['City']['name'] ?></div>
                </a>
                <a class="area_2" href="../cities/view/<?php echo $listCity[1]['City']['id_city'] ?>">
                    <div class="name"><?php echo $listCity[1]['City']['name'] ?></div>
                </a>
                <a class="area_3" href="../cities/view/<?php echo $listCity[2]['City']['id_city'] ?>">
                    <div class="name"><?php echo $listCity[2]['City']['name'] ?></div>
                </a>
            </div>

            <div class="row_2">
                <a class="area_4" href="../cities/view/<?php echo $listCity[3]['City']['id_city'] ?>">
                    <div class="name"><?php echo $listCity[3]['City']['name'] ?></div>
                </a>
                <a class="area_5" href="../cities/view/<?php echo $listCity[4]['City']['id_city'] ?>">
                    <div class="name"><?php echo $listCity[4]['City']['name'] ?></div>
                </a>
            </div>

            <div class="row_3">
                <a class="area_6" href="../cities/view/<?php echo $listCity[5]['City']['id_city'] ?>">
                    <div class="name"><?php echo $listCity[5]['City']['name'] ?></div>
                </a>
                <a class="area_7" href="../cities/view/<?php echo $listCity[6]['City']['id_city'] ?>">
                    <div class="name"><?php echo $listCity[6]['City']['name'] ?></div>
                </a>
                <a class="area_8" href="../cities/view/<?php echo $listCity[7]['City']['id_city'] ?>">
                    <div class="name"><?php echo $listCity[7]['City']['name'] ?></div>
                </a>    
            </div>

        </div>
    </div>

    <!-- Content_4 -->
    <div class="Content_4">
        <p class="title">Điểm đến yêu thích nước ngoài</p>
        <p class="detail">Bao la thế giới. Bốn bể là nhà</p>
    </div>
</div>
</body>

</html>