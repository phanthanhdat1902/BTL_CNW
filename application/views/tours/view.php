<?php echo $html->includeCss('styleTourDetail'); ?>
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
        <div class="bookingForm">
            <div>
                <h1>Đặt ngay, chỉ 2 phút. Hoặc gọi (028) 3933 8002</h1>
            </div>
            <div>
                <span>Chọn ngày khởi hành: </span>
                <input type="date">
            </div>
            <div>
                <span>2 Người lớn</span>
                <span>x <?php echo ($html->asDollars($tour['price_per_adult']));?> - +</span>
            </div>
            <div>
                <span>0 Trẻ em</span>
                <span>- +</span>
            </div>
            <div>
                <span>Tổng cộng</span>
                <span><?php echo $html->asDollars($tour['price_per_adult'] * 2); ?></span>
            </div>

            <button type="submit">Yêu cầu đặt</button>
        </div>
        <div class="tourSideBar">
            <ul>
                <li>Chương trình tour</li>
                <li>Lịch khởi hành</li>
                <li>Điều khoản & quy định</li>
            </ul>
        </div>

        <div class="tourHeaderContainer">
            <div class="tourHeaderImage"<?php echo $html->includeImg($tour['thumbnail'])?>></div>
            <div class="tourHeaderInfor">
                <span>Hồ Chí Minh</span>
                <span><?php echo $tour['number_of_days']?> Ngày <?php echo $tour['number_of_nights']?>  Đêm</span>
                <span>Phương tiện: Bus - Máy bay</span>
                <span>Mã Tour: <?php echo $tour['code']?></span>
            </div>
        </div>
        <div class="tourDetailMain">
            <h1>Thung Lũng Yên Bình - Thơ Mộng</h1>
            <span>Du lịch Hòa Bình hấp dẫn du khách bởi những nét văn hóa dân tộc vô cùng đặc sắc. Sự đa dạng của các dân tộc nơi đây đã tạo nên những nét quyến rũ độc đáo. Bên cạnh đó du lịch Hòa Bình còn đưa đến cho bạn những góc nhìn khác lạ về Phong Cảnh hùng vĩ tráng lệ. Hang Kia Pà Cò là thung lũng xinh đẹp của huyện Mai Châu - Hòa Bình làm thổn thức bao con tim của người lữ khách. Nơi đây không chỉ quyến rũ bởi sự mộc mạc của núi rừng, sự e ấp của những cô sơn nữ mà còn hấp dẫn bởi những tấm lòng thân thương đầy tình nghĩa của đồng bào dân tộc. </span>
            <h1>Những trải nghiệm thú vị trong chương trình</h1>
            <span>Hành trình mới khám phá những điểm đến còn mang nguyên vẹn nét đẹp hoang sơ:</span>
            <ul>
                <li>Khám phá nét hoang sơ, quyến rũ của thung lũng Hang Kia - Pà Cò</li>
                <li>Trải nghiệm cuộc sống của người dân tộc Mông với các hoạt động: giã bánh dày, nhuộm vải, vẽ sáp ong.</li>
                <li>Thỏa sức check in trên những đồi chè bát ngát hay những vườn hoa đào, hoa mận tuyệt đẹp tựa như một Mộc Châu thu nhỏ.</li>
            </ul>
        </div>
        <div class="departureSchedule">
            <h1>Lịch khởi hành</h1>
            <table>
                <thead>
                <th>Ngày khởi hành</th>
                <th>Ngày về</th>
                <th>Tình trạng</th>
                <th>Giá</th>
                </thead>
                <tbody>
                    <tr>
                        <td>T4, 09/12/2020</td>
                        <td>CN, 13/12/2020</td>
                        <td>Liên hệ</td>
                        <td>6.290.000 VND</td>
                    </tr>
                    <tr>
                        <td>T4, 09/12/2020</td>
                        <td>CN, 13/12/2020</td>
                        <td>Liên hệ</td>
                        <td>6.290.000 VND</td>
                    </tr>
                    <tr>
                        <td>T4, 09/12/2020</td>
                        <td>CN, 13/12/2020</td>
                        <td>Liên hệ</td>
                        <td>6.290.000 VND</td>
                    </tr>
                    <tr>
                        <td>T4, 09/12/2020</td>
                        <td>CN, 13/12/2020</td>
                        <td>Liên hệ</td>
                        <td>6.290.000 VND</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="tourService">
            <h1>Dịch vụ đi kèm</h1>
            <ul>
                <li>Bảo hiểm</li>
                <li>Bữa ăn</li>
                <li>Hướng dẫn viên</li>
                <li>Vé tham quan</li>
                <li>Vé dưa đón</li>
            </ul>
        </div>

        <div class="subPolicy">
            <h1>Chính sách phụ thu</h1>
            <ul>
                <li>Phụ thu phòng riêng 450.000 vnđ/khách.</li>
                <li>Khách nước ngoài: 350.000 vnđ/khách.</li>
                <li>Tết dương lịch: không phụ thu.</li>
                <li>Tết âm lịch: 250.000 vnđ/khách</li>
                <li>Trẻ em từ 10 tuổi trở lên tính 100% giá tour.</li>
                <li>Trẻ em từ 5 – 9 tuổi tính 75% giá tour.</li>
                <li>Trẻ em dưới 4 tuổi miễn phí giá tour.</li>
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
                <p>
                    Vận chuyển:
                    - Xe tham quan (16, 29, 35, 45 chỗ tùy theo số lượng) đón - tiễn và phục vụ theo chương trình.
                    - Vé máy bay khứ hồi: Viet jet Air ( 07 kg sách tay + 20 kg hành lý ký gửi/kiện).
                    Lưu trú:
                    - Khách sạn 3 sao: 2 – 3 khách/phòng (trường hợp lẻ nam, nữ ở phòng 03).</p>
            </div>

            <div id="tab2" class="tabcontent">
                <span onclick="this.parentElement.style.display = 'none'" class="topright">&times</span>
                <p>- Tiền Tip cho HDV/ lái xe,
                    - Ăn uống, vui chơi giải trí cá nhân .. ngoài chương trình.
                    - 01 bữa ăn tối tại Sapa (bữa tối ,ngày thứ 2 theo chương trình).</p>
            </div>

            <div id="tab3" class="tabcontent">
                <span onclick="this.parentElement.style.display = 'none'" class="topright">&times</span>
                <p>Chính sách hủy:
                    Mọi sự thay đổi liên quan đến vé đã xuất: ngày giờ đi, tên hành khách, hủy vé, vui lòng chịu chi
                    phí theo qui định sau:
                    - Ngay sau khi đăng ký tour nếu hủy sẽ bị phạt tiền tour và vé máy bay: </p>
            </div>
            <div id="tab4" class="tabcontent">
                <span onclick="this.parentElement.style.display = 'none'" class="topright">&times</span>
                <p>- Trong những trường hợp bất khả kháng như: khủng bố, bạo động, thiên tai, lũ lụt. dịch bệnh… Tuỳ
                    theo tình hình thực tế và sự thuận tiện, an toàn của khách hàng, công ty sẽ chủ động thông báo
                    cho khách hàng sự thay đổi như sau:
                    huỷ hoặc thay thế bằng một chương trình mới với chi phí tương đương chương trình tham quan trước
                    đó.
                    Trong trường hợp chương trình mới có phát sinh thì Khách hàng sẽ thanh toán khoản phát sinh này.
                    Tuy nhiên, mỗi bên có trách nhiệm cố gắng tối đa, giúp đỡ bên bị thiệt hại nhằm giảm thiểu các
                    tổn thất gây ra vì lý do bất khả kháng.…</p>
            </div>
        </div>

        <div>
            <h1>Đánh giá gần đây</h1>
            <div>
                <h2>Trang Nguyễn</h2>
                <span>
                    8.0 Rất tốt 24-06-2020Tour tư vấn ban đầu có 25 khách nhưng khi đến sân bay là 45 khách. Tour đi
                    quá
                    đông, hdv không thể chăm sóc tốt hết được
                </span>
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