<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel booking</title>
    <link rel="stylesheet" href="/public/css/hotelbooking.css">
</head>
<body>
    </div>

    </div>

    <!-- Content -->
    <div class="content_booking">
        <div class="left">
            <p class="title">
                Trải nghiệm phải thử ở InterContinental Đà Nẵng Sun Peninsula Resort </p>
            <p class="detail">
                - Thoải mái bơi lội trong làn nước ấm áp với 2 hồ bơi rộng lớn ở khuôn viên Resort

                - Thưởng thức những viên kem miễn phí mát lạnh khi lưu trú tại Resort

                - Nhấm nháp 01 Ly rượu vang hay đơn giản các loại Cocktail, Smoothies... tại The Long Bar với kiến trúc
                độc đáo, gần ngay bên cạnh hồ bơi trẻ em

                - Hòa mình vào loạt hoạt động thú vị tại Resort: Lướt ván buồm, chèo kayak, lặn ngắm san hô ở vùng biển
                lặng sóng của vịnh Bãi Bắc riêng tư hay thư giãn với các động tác uyển chuyển của Thái Cực Quyền và Yoga

                - Thiên đường mua sắm Heritage Village nơi quý khách có thể tìm thấy những món quà ý nghĩa dành cho bạn
                bè người thân hay đơn giản dành riêng cho bản thân mình
            </p>
            <p class="Khachsantuongtu"> Khách sạn tương tự</p>
            <div class="hotel_item">
                <div class="hotel_image_1"
                    style="background-image: url('/image/khu-nghi-duong-furama-da-nang-60x45.jfif');"></div>
                <div class="hotel_infor">
                    <p>Khách sạn đà nẵng</p>
                    <p> <?php echo $hotel['number_of_review'] ?> </p>
                </div>
            </div>
            <div class="hotel_item">
                <div class="hotel_image_2" style="background-image: url('/image/horizontal.jpg');"></div>
                <div class="hotel_infor">
                    <p>Khách sạn đà nẵng</p>
                    <p> 7 đánh giá </p>
                </div>
            </div>
            <div class="hotel_item">
                <div class="hotel_image_3" style="background-image: url('/image/horizontal-84x84.jpg');"></div>
                <div class="hotel_infor">
                    <p>Khách sạn đà nẵng</p>
                    <p> 7 đánh giá </p>
                </div>
            </div>
            <div class="hotel_item">
                <div class="hotel_image_4" style="background-image: url('/image/horizontal-84x84.jpeg');"></div>
                <div class="hotel_infor">
                    <p>Khách sạn đà nẵng</p>
                    <p> 7 đánh giá </p>
                </div>
            </div>

        </div>
        <div class="right">
            <div class="hotel_booking_header">
                <p class="title">
                    InterContinental Đà Nẵng Sun Peninsula Resort
                </p>
                <label class="title_price"> Giá chỉ từ <p class="price"> 37.065.000 VNĐ</p></label>
                <form action="http://127.0.0.1:5500/formroomhotel.html">
                    <input type="submit" class="submit" value="Đặt ngay">
                </form>

            </div>
            <!-- full slideshow -->
            <div class="slideshow">
                <div class="mySlide">
                    <img src="/image/image_1.jpg" style="width: 100%;">
                </div>
                <div class="mySlide">
                    <img src="/image/image_2.png" style="width: 100%;">
                </div>
                <div class="mySlide">
                    <img src="/image/image_3.jpg" style="width: 100%;">
                </div>
                <div class="mySlide">
                    <img src="/image/image_4.jpg" style="width: 100%;">
                </div>
                <div class="mySlide">
                    <img src="/image/image_5.jpg" style="width: 100%;">
                </div>
                <div class="mySlide">
                    <img src="/image/image_6.jpg" style="width: 100%;">
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- Line image -->

                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="/image/image_1.jpg" style="width:100%" onclick="currentSlide(1)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="/image/image_2.png" style="width:100%" onclick="currentSlide(2)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="/image/image_3.jpg" style="width:100%" onclick="currentSlide(3)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="/image/image_4.jpg" style="width:100%" onclick="currentSlide(4)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="/image/image_5.jpg" style="width:100%" onclick="currentSlide(5)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="/image/image_6.jpg" style="width:100%" onclick="currentSlide(6)">
                    </div>
                </div>
            </div>

            <!-- Detail -->
            <div class="detail">
                <div class="detail_left">
                    <p class="title" style="text-transform: capitalizes; font-size: 20px; font-weight: bold;">
                        Kì nghỉ đẳng cấp 2N1Đ + Phòng ban công riêng hướng biển +
                        Vé máy bay + Ăn sáng + Voucher + Miễn phí trẻ em
                    </p>
                    <p class="combo_detail">
                        Miễn phí trẻ em
                        Combo bao gồm
                        - Vé máy bay khứ hồi
                        - 01 đêm nghỉ dưỡng tại phòng Resort Classic Room đẳng cấp từ thiết kế của kiến trúc sư đại tài
                        Bill Bensley
                        - Bữa sáng tuyệt vời tại Nhà hàng Citron/ Club Lounge với tầm nhìn toàn Vịnh Biển của Bán Đảo
                        Sơn Trà
                        - Tặng Resort Credit 1,000,000/phòng, sử dụng cho các dịch vụ Ăn uống và Spa (trừ La Maison
                        1888) (*)
                        - Miễn phí ăn sáng 01 trẻ em dưới 12 tuổi (ngủ chung giường với ba mẹ) - áp dụng đến 24/12/2020
                        - Thoải mái bơi lội trong làn nước ấm áp với 2 hồ bơi rộng lớn ở khuôn viên Resort
                        - Sử dụng phòng Gym với các trang thiết bị hiện đại
                        - Hòa mình vào loạt hoạt động thú vị tại Resort: Lướt ván buồm, chèo kayak, lặn ngắm san hô ở
                        vùng biển lặng sóng của vịnh Bãi Bắc riêng tư hay thư giãn với các động tác uyển chuyển của Thái
                        Cực Quyền và Yoga
                        * Áp dụng lưu trú các ngày trong tuần đến 24/12/2020 (Từ Chủ Nhật - Thứ 5)


                    <p class="combo_detail">
                        Ghi chú đặc biệt:
                        Lưu trú dịp Tết Dương Lịch không thể bỏ qua ưu đãi nâng cấp từ 1,700,000VND/khách để chào đón
                        năm mới hứng khởi:

                        - Tiệc Gala Buffet tối 31/12 thượng hạng với tôm hùm, gan ngỗng, các loại sashimi, đùi cừu
                        nướng, bê quay, …
                        - Chương trình âm nhạc đặc biệt với dàn nhạc Maius Philharmonic & các ngôi sao như Phương Linh,
                        Gigi Hương Giang, Hà Lê, Hoàng Quyên, Phương Vy…
                        - Thử vận may với chương trình bốc thăm trúng thưởng xe máy điện Vinfast Klara
                        - Tận hưởng khoảnh khắc đếm ngược thời gian và thưởng thức pháo hoa chào năm mới cùng người
                        thương
                        - Giảm 30% trên giá công bố cho các dịch vụ Spa, F&B
                        - Miễn phí đưa đón sân bay theo lịch trình khách hàng

                        Lưu ý:
                        - Áp dụng cho khách hàng lưu trú trong giai đoạn 30/12/2020-01/01/2021
                        - Không áp dụng tặng tour tham quan

                        Điều kiện áp dụng
                        - Đặt tối thiểu 2 khách/phòng

                        - Dành cho khách Việt Nam, Việt Kiều

                        - Không áp dụng đổi tên khách lưu trú

                        - Cuối tuần thứ 6, thứ 7 và Lễ 12/02-21/02/2021 có phụ thu

                        - Hạn đặt: đến hết 28/02/2021

                        - Hạn lưu trú: đến hết 31/03/2021
                    </p>
                    </p>
                </div>
                <div class="detail_right">
                    <div class="">Khởi hành từ Hồ Chí Minh</div>
                    <div class="khoihanh">
                        <div class="time">01/12 → 24/12</div>
                        <div class="price">5.699.000đ</div>
                    </div>

                    <div class="">Khởi hành từ Hồ Chí Minh</div>
                    <div class="khoihanh">
                        <div class="time">01/12 → 24/12</div>
                        <div class="price">5.699.000đ</div>
                    </div>

                    <div class="">Khởi hành từ Hồ Chí Minh</div>
                    <div class="khoihanh">
                        <div class="time">01/12 → 24/12</div>
                        <div class="price">5.699.000đ</div>
                    </div>
                    <div class="">Khởi hành từ Hồ Chí Minh</div>
                    <div class="khoihanh">
                        <div class="time">01/12 → 24/12</div>
                        <div class="price">5.699.000đ</div>
                    </div>
                    <div class="">Khởi hành từ Hồ Chí Minh</div>
                    <div class="khoihanh">
                        <div class="time">01/12 → 24/12</div>
                        <div class="price">5.699.000đ</div>
                    </div>

                    <div class="">Khởi hành từ Hà Nội</div>
                    <div class="khoihanh">
                        <div class="time">01/12 → 24/12</div>
                        <div class="price">5.699.000đ</div>
                    </div>
                    <div class="">Khởi hành từ Hà Nội</div>
                    <div class="khoihanh">
                        <div class="time">01/12 → 24/12</div>
                        <div class="price">5.699.000đ</div>
                    </div>
                    <div class="">Khởi hành từ Hà Nội</div>
                    <div class="khoihanh">
                        <div class="time">01/12 → 24/12</div>
                        <div class="price">5.699.000đ</div>
                    </div>

                    <!-- buton đặt combo -->
                    <p style="color: gray; font-size: 12px;"> *Giá cho một khách</p>
                    <form action="">
                        <input type="text" value="Yêu cầu đặt" style="width: 130px;
                            height: 35px;
                            border-radius: 5px;
                        
                            background: #F79321;
                            border: 1px solid #F79321;
                            color: #fff;
                            font-weight: bold;
                            font-size: 16px;" id="btnSubmit">
                    </form>

                    <!-- Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <div>
                                <p style="font-weight: bold;">Yêu cầu đặt combo</p>
                                <div class="date_room">
                                    <div class="date">
                                        <p class="title">Ngày khởi hành</p>
                                        <input type="date">
                                    </div>
                                    <div class="room">
                                        <p class="title">Số lượng</p>
                                        <div class="select_count">
                                            <div class="room_count">
                                                <span class="number_room"> 1</span>
                                                <span>Phòng</span>
                                                <div class="btn">
                                                    <button type="button" id="sub_room" class="btn_sub" onclick="onActionOrderHotel(this)">&#45;</button>
                                                    <button type="button" id="add_room" class="btn_add" onclick="onActionOrderHotel(this)"> &#43;</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="room_count">
                                                <span class="number_old"> 1</span>
                                                <span>Người lớn</span>
                                                <div class="btn">
                                                    <button type="button" id="sub_old" class="btn_sub" onclick="onActionOrderHotel(this)">&#45;</button>
                                                    <button type="button" id="add_old" class="btn_add" onclick="onActionOrderHotel(this)"> &#43;</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="room_count">
                                                <span class="number_child"> 1</span>
                                                <span>Trẻ em</span>
                                                <div class="btn">
                                                    <button type="button" id="sub_child" class="btn_sub" onclick="onActionOrderHotel(this)">&#45;</button>
                                                    <button type="button" id="add_child" class="btn_add" onclick="onActionOrderHotel(this)"> &#43;</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="start">
                                    <p class="title">Khởi hành từ</p>
                                    <input type="checkbox"> <span> HCM</span>
                                </div>
                                <div class="name">
                                    <p class="title">Họ tên</p>
                                    <input type="text">
                                </div>
                                <div class="numberphone">
                                    <p class="title">Số điện thoại</p>
                                    <input type="text">
                                </div>
                                <div class="email">
                                    <p class="title">Email</p>
                                    <input type="text">
                                </div>
                                <div class="discount_code">
                                    <p class="title"> Nhập mã giảm giá</p>
                                    <input type="text">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="Information">
                <div class="tienich">
                    <p class="title"> Tiện ích của khu nghỉ dưỡng</p>
                    <?php foreach($hotel['utilityDetails'] as $utilities):?>
                        <p><?php echo $utilities ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="inforhotel">
                    <p class="title">Thông tin khu nghỉ dưỡng</p>
                    <?php echo $hotel['description'] ?>
                </div>
                <div class="police">
                    <p class="title"> Chính sách của Khu nghỉ dưỡng VinOasis Phú Quốc</p>
                    <div class="police_1">
                        <div class="col_1">Thời gian nhận phòng </div>
                        <div class="col_2"><?php echo $hotel['term_checkin'] ?></div>
                    </div>
                    <div class="police_1">
                        <div class="col_1">Thời gian trả phòng</div>
                        <div class="col_2"><?php echo $hotel['term_checkout'] ?></div>
                    </div>
                    <div class="police_1">
                        <div class="col_1">Di chuyển</div>
                        <?php echo $hotel['term_transportation'] ?>
                    </div>
                    <?php if(isset($hotel['term_note'])) { ?>
                        <div class="police_1">
                            <div class="col_1">Lịch trình Shuttle Bus</div>
                            <div class="col_2">
                                <?php echo $hotel['term_note'] ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="police_1">
                        <div class="col_1"> Hướng dẫn nhận phòng</div>
                        <div class="col_2">
                            <?php echo $hotel['term_receiving_room'] ?>
                        </div>
                    </div>
                    <div class="police_1">
                        <div class="col_1"> Hoạt động giải trí</div>
                        <div class="col_2"> 
                            <?php echo $hotel['term_entertainment'] ?>
                        </div>
                    </div>
                    <div class="police_1">
                        <div class="col_1"> Chính sách thu phụ</div>
                        <div class="col_2">
                            <?php echo $hotel['term_surcharge'] ?>
                        </div>
                    </div>

                </div>
                <div class="review">
                    <p class="title"> Đánh giá khách hàng về Khu nghỉ dưỡng Phú Quốc</p>
                    <div class="review_start"><?php echo $hotel['score'] ?>/10</div>
                    <div class="review_content"> Tuyệt vời| <?php echo $hotel['number_of_review'] ?>/ đánh giá </div>

                    <div>Đánh giá gần đây</div>
                    <div class="comment_current">
                        <?php
                        foreach ($hotel['reviewUsers'] as $item) :
                            foreach ($item as $content) :
                                ?>
                                    <div class="person">
                                        <div class="name"><?php echo $content['email'] ?></div>
                                        <div class="comment"><?php echo $content['content'] ?></div>  
                                    </div>
                                <?php
                            endforeach;
                        endforeach;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/public/js/hotelbooking.js"></script>

</body>

</html>
