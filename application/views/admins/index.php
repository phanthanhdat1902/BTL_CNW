<div class="container">
    <h1>Dashboard</h1>
    <div class="row">
        <div class="col1">
            <label>Tổng số thành viên</label>
            <input value="<?php echo(count($users))?>">
        </div>
        <div class="col1">
            <label>Tổng số tour</label>
            <input value="<?php echo(count($tours))?>">
        </div>
        <div class="col1">
            <label>Tổng số order tour</label>
            <input value="<?php echo(count($order_tours))?>">
        </div>
        <div class="col1">
            <label>Tổng số hotel</label>
            <input value="<?php echo(count($hotels))?>">
        </div>
        <div class="col1">
            <label>Tổng số order hotel</label>
            <input value="<?php echo(count($order_hotels))?>">
        </div>
    </div>
</div>

<div class="footer">
    <span>Copyright © Your Website 2020</span>
</div>
</div>
</body>

</html>