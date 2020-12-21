<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel detail</title>

</head>
<link rel="stylesheet" href="/public/css/hoteldetail.css">

<body>
    <div class="container">
        <div class="logo" style="background-image: url('/public/img/<?php echo $theme['Theme_hotel']['background'] ?>');">
            <p class="title_logo"> Bạn đang tìm kiếm trải nghiệm du lịch nào ?</p>
            <p class="title_detail"> <?php echo $theme['Theme_hotel']['description'] ?></p>
        </div>

        <div class="select">
            <div class="input_search">
                <form>
                    <input type="text" placeholder="Bạn muốn đi đâu ?" class="location">
                </form>
                <input class="start" type="date" value="Ngày bắt đầu">
                <input class="end" type="date">
                <div class="room">
                    <form action="http://127.0.0.1:5500/hotelbooking.html">
                        <input type="submit" value="Tìm" class="search_location">
                    </form>
                </div>

            </div>

            <!-- column -->
            <?php for($i = 1; $i <= count($hotelList)/3 + 1; ++$i) { ?>
                <?php echo '<div class="row">' ?>
                    <?php for($j = 1; $j <= 3; ++$i) { ?>
                        <?php if (3*($i-1)+$j-1 >= count($hotelList)) break; ?>
                        <?php echo '<div class="column">' ?>
                            <?php echo '<div class="image" style="background-image: url(\'/public/img/'.$hotel[3*($i-1)+$j-1]['Hotel']['thumbnail'].'\');"></div>' ?>
                            <?php echo '<p class="city">'.$hotel[3*($i-1)+$j-1]['City']['name'].'</p>' ?>
                            <?php echo '<p class="hotel">'.$hotel[3*($i-1)+$j-1]['Hotel']['title'].'</p>' ?>
                            <?php echo '<p class="price">'.$html->asDollars($hotel[3*($i-1)+$j-1]['Package']['price_per_night']).' đ/phòng</p>' ?>
                        <?php echo '</div>' ?>
                    <?php }?>
                <?php echo '</div>' ?>
            <?php } ?>    
        </div>
    </div>


    </div>
</body>

</html>
