
<div class="container">
    <h1>Thêm tour</h1>
    <form>
        <div class="row">
            <div class="col1">
                <label>Tên tour</label>
                <input type="text">
            </div>
            <div class="col1">
                <label>Chọn chủ đề</label>
                <select>
                    <option selected="selected">Không chọn chủ đề nao</option>
                    <option>Chủ đề 1</option>
                    <option>Chủ đề 2</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col1">
                <label>Ngày</label>
                <input type="number" value="0">
            </div>
            <div class="col1">
                <label>Đêm</label>
                <input type="number" value="0">
            </div>
        </div>

        <div class="row">
            <div class="col1">
                <label>Ảnh thumnail</label>
                <input type="file">
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Tiêu đề giới thiệu</label>
                <input>
            </div>
            <div class="col1">
                <label>Nội giới thiệu</label>
                <textarea></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Tiêu đề mô tả</label>
                <input>
            </div>
            <div class="col1">
                <label>Nội mô tả</label>
                <textarea></textarea>
            </div>
        </div>

        <h2>Chính sách phụ thu</h2>
        <div class="row">
            <div class="col1">
                <label>Phụ thu</label>
                <textarea></textarea>
            </div>
        </div>
        <h2>Điều khoản</h2>
        <div class="row">
            <div class="col1">
                <label>Giá bao gồm</label>
                <textarea></textarea>
            </div>
            <div class="col1">
                <label>Giá không bao gồm</label>
                <textarea></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Giá hủy</label>
                <textarea></textarea>
            </div>
            <div class="col1">
                <label>Ghi chú</label>
                <textarea></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Giá trên 1 người lớn</label>
                <input>
            </div>
            <div class="col1">
                <label>Giá trên 1 trẻ em</label>
                <input>
            </div>
        </div>
        <h2>Dịch vụ đính kèm</h2>
        <div class="">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <button type="button">Thêm dịch vụ</button>
        </div>
        <h2>Chương trình tour</h2>
        <div class="row">
            <div class="col1">
                <label>Ngày</label>
                <input>
            </div>
        </div>
        <div class="row">
            <div class="col2">
                <label>Hoạt động trong ngày</label>
                <textarea></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col1">
                <label>Tiêu đề ảnh 1</label>
                <input>
            </div>
            <div class="col1">
                <input type="file">
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Tiêu đề ảnh 2</label>
                <input>
            </div>
            <div class="col1">
                <input type="file">
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
                    <th>Tình trạng</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="date"></td>
                    <td><input type="date"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td><input type="date"></td>
                    <td><input type="date"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td><input type="date"></td>
                    <td><input type="date"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
            </tbody>
        </table>
        <button type="button">Thêm lịch khởi hành</button>
        <br>
        <br>
        <div class="row">
            <button type="submit" class="btn_add_tour">Thêm tour</button>
        </div>

    </form>
</div>

<div class="footer">
    <span>Copyright © Your Website 2020</span>
</div>
</div>
</body>

</html>