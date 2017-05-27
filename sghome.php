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

