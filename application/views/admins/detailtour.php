<div class="container">
    <h1>Xem chi tiết tour</h1>
    <form>
        <div class="row">
            <div class="col1">
                <label>Tên tour</label>
                <input type="text" value="<?php echo ($tours['name']); ?>">
            </div>
            <div class="col1">
                <label>Chọn chủ đề</label>
                <select>
                    <?php
                    foreach ($tours['listThemeTours'] as $item):
                        if ($item['Theme_tour']['id_theme_tour'] == $tours['id_theme_tour']) {
                            
                        }
                        ?>
                        <option <?php
                        if ($item['Theme_tour']['id_theme_tour'] == $tours['id_theme_tour']) {
                            echo 'selected="selected"';
                        }
                        ?> ><?php echo $item['Theme_tour']['name'] ?></option>
                            <?php
                        endforeach;
                        ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col1">
                <label>Ngày</label>
                <input type="number" value="<?php echo ($tours['number_of_days']); ?>">
            </div>
            <div class="col1">
                <label>Đêm</label>
                <input type="number" value="<?php echo ($tours['number_of_nights']); ?>">
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
                <input value="<?php echo ($tours['introduction_heading']); ?>">
            </div>
            <div class="col1">
                <label>Nội giới thiệu</label>
                <textarea ><?php
                    foreach ($tours['introduction'] as $item):
                        echo $item;
                        echo "\n";
                    endforeach;
                    ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Tiêu đề mô tả</label>
                <input value="<?php echo ($tours['description_heading']); ?>">
            </div>
            <div class="col1">
                <label>Nội mô tả</label>
                <textarea><?php
                    foreach ($tours['description'] as $item):
                        echo $item;
                        echo "\n";
                    endforeach;
                    ?></textarea>
            </div>
        </div>
        <h2>Chính sách phụ thu</h2>
        <div class="row">
            <div class="col1">
                <label>Phụ thu</label>
                <textarea><?php
                    foreach ($tours['term_surcharge'] as $item):
                        echo $item;
                        echo "\n";
                        ;
                    endforeach;
                    ?></textarea>
            </div>
        </div>
        <h2>Điều khoản</h2>
        <div class="row">
            <div class="col1">
                <label>Giá bao gồm</label>
                <textarea><?php
                    foreach ($tours['term_price_included'] as $item):
                        echo $item;
                        echo "\n";
                    endforeach;
                    ?></textarea>
            </div>
            <div class="col1">
                <label>Giá không bao gồm</label>
                <textarea><?php
                    foreach ($tours['term_price_not_included'] as $item):
                        echo $item;
                        echo "\n";
                    endforeach;
                    ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Giá hủy</label>
                <textarea ><?php
                    foreach ($tours['term_cancelling'] as $item):
                        echo $item;
                        echo "\n";
                    endforeach;
                    ?></textarea>
            </div>
            <div class="col1">
                <label>Ghi chú</label>
                <textarea><?php
                    foreach ($tours['term_note'] as $item):
                        echo $item;
                        echo "\n";
                    endforeach;
                    ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <label>Giá trên 1 người lớn</label>
                <input value="<?php echo ($html->asDollars($tours['price_per_adult'])) ?>">
            </div>
            <div class="col1">
                <label>Giá trên 1 trẻ em</label>
                <input value="<?php echo ($html->asDollars($tours['price_per_child'])) ?>">
            </div>
        </div>
        <h2>Dịch vụ đính kèm</h2>
        <div class="">
            <?php
            foreach ($tours['service_tours'] as $item):
                ?>
                <input type="text" value="<?php echo $item ?>">
                <?php
            endforeach;
            ?>
            <button type="button">Thêm dịch vụ</button>
        </div>
        <h2>Chương trình tour</h2>
        <?php foreach ($tours['schedules'] as $item): ?>

            <div>
                <div class="row">
                    <div class="col1">
                        <label>Ngày</label>
                        <input value="<?php echo $item['Schedule']['day_number'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col1">
                        <label>Tiêu đề ngày</label>
                        <input value="<?php echo $item['Schedule']['title'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <label>Hoạt động trong ngày</label>
                        <textarea><?php echo $item['Schedule']['description'] ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col1">
                        <label>Tiêu đề ảnh 1</label>
                        <input value="<?php echo $item['Schedule']['caption1'] ?>">
                    </div>
                    <div class="col1">
                        <input type="file">
                    </div>
                </div>
                <div class="row">
                    <div class="col1">
                        <label>Tiêu đề ảnh 2</label>
                        <input value="<?php echo $item['Schedule']['caption2'] ?>">
                    </div>
                    <div class="col1">
                        <input type="file">
                    </div>
                </div>
            </div>

            <?php
        endforeach;
        ?>
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
                <?php foreach ($tours['departures'] as $item) : ?>
                    <tr>
                        <td><input type="text" value="<?php echo $item['Departure']['start_date'] ?>"></td>
                        <td><input type="text" value="<?php echo $item['Departure']['end_date'] ?>"></td>
                        <td><input type="text" value="<?php echo $item['Departure']['holiday_surcharge'] ?>"></td>
                    </tr>
                <?php endforeach; ?>
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