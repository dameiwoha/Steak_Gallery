<?php include __DIR__ . '/__connect_db.php';

$page_name = 'cart_list';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;


$sql = "SELECT * FROM `products` WHERE `sid`= $sid";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/normalize_wine.css">
    <link rel="stylesheet" href="css/wine_foundation.min.css">
    <link rel="stylesheet" href="css/winetaste_style.css">
    <link rel="stylesheet" href="css/left_bar.css">
    <link rel="stylesheet" href="css/wine_taste.css">
    <link rel="stylesheet" href="css/grid-system.css">
    <link rel="stylesheet" href="css/jquery.circular-carousel.css">
</head>
<body>
<?php include __DIR__ . '/NSGnav.php' ?>
<div class="c-sm-12 background_div">
    <div class="c-xs-12 c-sm-2 wine_box">
        <div class="wine_item">
            <div class="wine_title" style="letter-spacing:50px;">價格</div>
            <div class="price">
                <select name="price_sel" id="price_sel" class="form-control">
                    <option value="選擇價格">選擇價格</option>
                    <option value="p1">NT 1000以下</option>
                    <option value="p2">NT 1000~1500</option>
                    <option value="p3">NT 1500~2000</option>
                    <option value="p4">NT 2000以上</option>
                </select>
            </div>
        </div>

        <div class="wine_item">
            <div class="wine_title">
                <a href="product_red.php" style="text-decoration: none; color: #fff; letter-spacing:7px;">所有商品</a>
            </div>
        </div>
        <div class="wine_item">
            <div class="wine_title" style="letter-spacing:50px;">紅酒</div>
            <div class="wine_list">
                <ul>
                    <li><a href="product_red.php?cate=1" style="letter-spacing:50px;">法國</a></li>
                    <li><a href="product_red.php?cate=2" style="letter-spacing:50px;">美國</a></li>
                    <li><a href="product_red.php?cate=3" style="letter-spacing:50px;">智利</a></li>
                </ul>
            </div>
        </div>
        <div class="wine_item">
            <div class="wine_title" style="letter-spacing:50px;">白酒</div>
            <div class="wine_list">
                <ul>
                    <li><a href="product_red.php?cate=4" style="letter-spacing:50px;">法國</a></li>
                    <li><a href="product_red.php?cate=5" style="letter-spacing:50px;">德國</a></li>
                    <li><a href="product_red.php?cate=6" style="letter-spacing:50px;">智利</a></li>
                </ul>
            </div>
        </div>
        <div class="wine_item">
            <div class="wine_title">香檳 / 氣泡酒</div>
            <div class="wine_list">
                <ul>
                    <li><a href="product_red.php?cate=7" style="letter-spacing:50px;">法國</a></li>
                    <li><a href="product_red.php?cate=8" style="letter-spacing:20px;">義大利</a></li>
                    <li><a href="product_red.php?cate=9" style="letter-spacing:20px;">西班牙</a></li>
                </ul>
            </div>
        </div>
        <div class="ad">
            <div class="wine_ad">
                <a href="find_wine.php"><img src="imgs/wine_04_06.png"></a>
                <a href="find_wine.php"><img src="imgs/wine_04_06.png"></a>
            </div>
            <div class="wine_ad1">
                <a href="small_test.php"><img src="imgs/wine_04_08.png"></a>
                <a href="small_test.php"><img src="imgs/wine_04_08.png"></a>
            </div>

        </div>
    </div>
    <div class="c-sm-10 wine_taste">

        <h1 align="center" style="margin-top:25px;">品酒會活動</h1>
        <div class="row">
            <ul class="carousel">
                <li class="item active" style="background-image: url('imgs/winetaste01.jpg');"></li>
                <li class="item" style="background-image: url('imgs/winetaste02.jpg');"></li>
                <li class="item" style="background-image: url('imgs/winetaste03.jpg');"></li>
            </ul>
        </div>
        <div class="controls">
            <a href="#" class="previous">Previous</a>
            <a href="#" class="next">Next</a>
        </div>
            <div class="box_white">

                    <h3>最新品酒會活動資訊會不定時更新，若有興趣請打(02)2775-3011謝小姐！</h3>
            </div>
</div>


</body>
<?php include __DIR__ . '/sg_footer.php' ?>

</html>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery.circular-carousel.js"></script>
<script src="js/wine_script.js"></script>
<script type="text/javascript">
    $(function () {
        var wine_title = $('.wine_title');
        wine_title.click(function () {
            $(this).siblings().slideToggle().parent().siblings().children('.wine_list').slideUp();

        });

        switch(cate_get){
            case 1:
            case 2:
            case 3:
                wine_title.eq(2).click();
                break;
            case 4:
            case 5:
            case 6:
                wine_title.eq(3).click();

                break;
            case 7:
            case 8:
            case 9:
                wine_title.eq(4).click();
                break;
            default:
        }

        $('a[href]').each(function(){
            if( $(this).attr('href')== '?cate='+cate_get ){
                $(this).css('color', 'yellow');
            }
        })
    });

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>