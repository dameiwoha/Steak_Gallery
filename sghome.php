<?php include __DIR__ . '/__connect_db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
    <link rel="stylesheet" href="css/grid-system.css"><!-- 格線 -->

   
    <link rel="stylesheet" href="css/cocoen.min.css">
    <link rel="stylesheet" href="css/demo.min.css">
    <link rel="stylesheet" href="css/sghome.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
  
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
    <link rel="stylesheet" href="css/css_reset.css">

</head>







<body id="sghome_body">
<?php include(__DIR__ . '/NSGnav.php') ?>



























<div class="c-sm-12 c-xs-12 sghome1 sghome ">
    <!-- <img src="img/sghome/sghome1.jpg" alt="" class="sgimg" id="sghome1"> -->
    <!-- 	<img src="img/sghome/1207alogo.svg" alt="" class="sghomelogo" id="sghome00001"> -->

</div>


<div class="c-sm-12 c-xs-12 sghome2 sghome">
    <img src="imgs/sghome/sghome8.png" alt="" class="sgimg">
    <p id="sghome00002">Ready&nbsp;&nbsp;for&nbsp;&nbsp;dinner?</p>
    <a target="_blank" href="menu.php">
        <img src="imgs/sghome/icon_01.png" alt="" id="sghome00003"></a>
    <!-- <img src="img/sghome/icon_01-1.png" > -->
</div>


<div class="c-sm-12 c-xs-12 sghome3 sghome ">
    <img src="imgs/sghome/sghome3.jpg" alt="">
    <h2 id="sghome3_h2">CUISINE & WINES</h2>
    <p>STEAK GALLERY的牛排料理，使用美國CAB級和USDA Primer級的牛肉，</p>
    <p>細分乾式熟成與濕式熟成兩種，熟成後風味更加濃郁而多層次，鮮美又多汁</p>
</div>


<div class="c-sm-12 c-xs-12 sghome4 sghome ">

    <a href="cuisine.php">
        <div class="c-sm-4 sghome_small">
            <img src="imgs/sghome/sghome4_1.jpg" alt="">
        </div>
    </a>
    <a href="">
        <div class="c-sm-4 sghome_small">
            <img src="imgs/sghome/sghome4_2.jpeg" alt="">
        </div>
    </a>
    <a href="">
        <div class="c-sm-4 sghome_small">
            <img src="imgs/sghome/sghome4_3.jpeg" alt="">
        </div>
    </a>
    <a href="">
        <div class="c-sm-4 sghome_small">
            <img src="imgs/sghome/sghome4_4.jpg" alt="">
        </div>
    </a>
    <a href="">
        <div class="c-sm-4 sghome_small">
            <img src="imgs/sghome/sghome4_7.jpg" alt="">
        </div>
    </a>
    <a href="">
        <div class="c-sm-4 sghome_small">
            <img src="imgs/sghome/sghome4_6.jpg" alt="">
        </div>
    </a>
</div>

<div class="c-sm-12 sghome5 sghome ">
    <div class="sghome_container">
        <div class="cocoen">
            <img src="imgs/sghome/sghome5_1 .png" alt="">
            <img src="imgs/sghome/sghome5_2.png" alt="">
        </div>
    </div>
</div>


<div class="c-sm-12 sghome6 sghome ">
    <img src="imgs/sghome/sghome6.jpg" alt="" class="sgimg" style="-webkit-filter:saturate(80%);
	-moz-filter:saturate(80%);
	-ms-filter:saturate(80%);
	-o-filter:saturate(80%);
	filter:saturate(80%);">
    <p id="sghome00006">Great wines!&nbsp;&nbsp;Great steaks!<br>make your next great memory with us!</p>
    <a href="age.php">
        <img src="imgs/sghome/icon_02.png" alt="" id="sghome00003"></a>
</div>

<a href="javascript:;" class="goTop">
    <i class="fa fa-arrow-up"></i>
</a>

<!--<footer class=" c-xs-12 c-sm-12 c-lg-2 " id="home_footer">
    <h2 id="foot_h2">未滿十八歲請勿飲酒&nbsp;&nbsp;&nbsp;酒後不開車&nbsp;&nbsp;&nbsp;安全有保障</h2>
    <div class="bk"><span class="c-xs-3 c-sm-2 ">book a reservation </span>
        <label for="dateof"></label>
        <input type="date" name="dateof" id="dateof" class="c-xs-2 c-sm-2">
        <select id="time" class="c-xs-3 c-sm-2 c-lg-2">
            <option value="1130">11:30</option>
            <option value="1230" disabled>12:30 已額滿</option>
            <option value="1330">13:30</option>
            <option value="1730" disabled>17:30 已額滿</option>
            <option value="1800">18:00</option>
            <option value="1830">18:30</option>
            <option value="1900" disabled>19:00 已額滿</option>
            <option value="1930">19:30</option>
            <option value="2000">20:00</option>
            <option value="2030">20:30</option>
        </select>
        <select id="people" class="c-xs-2 c-sm-2 c-lg-2">
            <option value="2P">2位</option>
            <option value="3P">3位</option>
            <option value="4P">4位</option>
            <option value="5P">5位</option>
            <option value="6P">6位</option>
            <option value="7P">7位</option>
        </select>
        <a href="#inline" data-modaal-type="inline" data-modaal-animation="fade" id="enter_footer" class="btn modaal"
           style="color:#fff; font-size:1.2vw; ">訂位</a>
       
    </div>
    <div class="cnt c-xs-12 c-sm-12">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"><a href="#"> 台北市大安區安和路一段49巷10號1樓</a></i></li>
            <li><i class="fa fa-phone" aria-hidden="true"><a href="#"> (02)2775-3011</a></i></li>
            <li><i class="fa fa-facebook" aria-hidden="true"><a href="#"> FACEBOOK</a></i></li>
            <li><i class="fa fa-instagram" aria-hidden="true"><a href="#"> INSTAGRAM</a></i></li>
        </ul>

        <i class="fa fa-copyright c-xs-6 c-sm-6" style="font-size: 10px; text-align: center;">steak gallery</i>

    </div>
</footer>-->
</body>

<?php include(__DIR__ . '/sg_footer.php') ?>

</html>
<!-- inject:js -->
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/requestAnimationFrame.min.js"></script>
<script src="js/cocoen.min.js"></script>
<!-- endinject -->
<script>
    $(function () {
        $('.cocoen').cocoen();
    });

    $(function () {


        var _body21 = $('body').height() / 2;
        var $window = $(window);
        var $goTop = $('.goTop');

        $window.scroll(function () {

            if ($window.scrollTop() > _body21) {
                $goTop.fadeIn();
            } else {
                $goTop.fadeOut();
            }

        })

        $goTop.click(function () {
            $('html,body').animate({scrollTop: 0}, 1000);
        })
    })

</script>

<!--</body>
</html>-->