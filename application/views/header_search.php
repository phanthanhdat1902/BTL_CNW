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