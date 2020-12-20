<div class="container">
    <h1>Thêm Tour</h1>
    <form action="http://localhost/BTL_CNW/admins/addTour" method="POST">
        <div class="row">
            <div class="col1">
                <label>Tên tour</label>
                <input type="text" name="nameTour">
            </div>
            <div class="col1">
                <label>Chọn chủ đề</label>
                <select name="theme_tour">
                    <?php foreach ($theme_tours as $item): ?>
                        <option value="<?php echo $item['Theme_tour']['id_theme_tour'] ?>"><?php echo $item['Theme_tour']['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col1">
                <label>Ngày</label>
                <input type="number"  name="day">
            </div>
            <div class="col1">
                <label>Đêm</label>
                <input type="number"name="night">
            </div>
        </div>

        <div class="row">
            <div class="col1">
                <label>Ảnh thumnail</label>
                <input type="file" name="img_thumnail">
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Giới thiệu</label>
                <input name="introduction_heading">
            </div>
            <div class="col1">
                <label>Nội dung giới thiệu</label>
                <textarea name="introduction_content"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Tiêu đề mô tả</label>
                <input name="description_heading">
            </div>
            <div class="col1">
                <label>Nội mô tả</label>
                <textarea name="description_content"></textarea>
            </div>
        </div>
        <h2>Chính sách phụ thu</h2>
        <div class="row">
            <div class="col1">
                <label>Phụ thu</label>
                <textarea name="term_surcharge"></textarea>
            </div>
        </div>
        <h2>Điều khoản</h2>
        <div class="row">
            <div class="col1">
                <label>Giá bao gồm</label>
                <textarea name="term_price_included"></textarea>
            </div>
            <div class="col1">
                <label>Giá không bao gồm</label>
                <textarea name="term_price_not_included"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Giá hủy</label>
                <textarea name="term_cancelling"></textarea>
            </div>
            <div class="col1">
                <label>Ghi chú</label>
                <textarea name="term_note"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Giá trên 1 người lớn</label>
                <input name="price_per_adult">
            </div>
            <div class="col1">
                <label>Giá trên 1 trẻ em</label>
                <input  name="price_per_child">
            </div>
        </div>
        <h2>Dịch vụ đính kèm</h2>
        <div class="">
            <input name="service_tour[]" type="text">
            <button type="button">Thêm dịch vụ</button>
        </div>
        <h2>Chương trình tour</h2>
        <div>
            <div class="row">
                <div class="col1">
                    <label>Ngày</label>
                    <input name="day_number[]">
                </div>
            </div>
            <div class="row">
                <div class="col1">
                    <label>Tiêu đề ngày</label>
                    <input name="title[]" value="">
                </div>
            </div>
            <div class="row">
                <div class="col2">
                    <label>Hoạt động trong ngày</label>
                    <textarea name="description[]"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col1">
                    <label>Tiêu đề ảnh 1</label>
                    <input name="caption1[]" value="">
                </div>
                <div class="col1">
                    <input name="image1[]" type="file">
                </div>
            </div>
            <div class="row">
                <div class="col1">
                    <label>Tiêu đề ảnh 2</label>
                    <input name="caption2[]">
                </div>
                <div class="col1">
                    <input name="image2[]" type="file">
                </div>
            </div>
        </div>
        <div class="row">
            <button type="button">Thêm ngày</button>
        </div>
        <h2>Lịch khởi hành</h2>
        <table>
            <thead>
                <tr>
                    <th>Ngày khởi hành</th>
                    <th>Ngày về</th>
                    <th>Phụ thu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input name="start_date[]" type="text" ></td>
                    <td><input name="end_date[]" type="text" ></td>
                    <td><input name="holiday_surcharge[]" type="text"></td>
                </tr>
            </tbody>
        </table>
        <button type="button">Thêm lịch khởi hành</button>
        <br>
        <br>
        <div class="row">
            <button type="submit" class="btn_add_tour">Cập Nhật</button>
        </div>

    </form>
</div>

<div class="footer">
    <span>Copyright © Your Website 2020</span>
</div>
</div>
</body>

</html>