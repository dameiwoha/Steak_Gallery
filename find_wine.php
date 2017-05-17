<?php include __DIR__ . '/__connect_db.php';


$page_name = 'find_wine';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
    <link rel="stylesheet" href="css/NSGnav.css">
    <link rel="stylesheet" href="css/grid-system.css"><!-- 格線 -->
    <link rel="stylesheet" href="css/find_wine.css">
    <link rel="stylesheet" href="css/left_bar.css">
    <link rel="stylesheet" href="css/sweet-alert.css">
    <script src="js/sweet-alert.js"></script>
</head>
<?php include(__DIR__ . '/NSGnav.php') ?>
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
                    <li><a href="?cate=1" style="letter-spacing:50px;">法國</a></li>
                    <li><a href="?cate=2" style="letter-spacing:50px;">美國</a></li>
                    <li><a href="?cate=3" style="letter-spacing:50px;">智利</a></li>
                </ul>
            </div>
        </div>
        <div class="wine_item">
            <div class="wine_title" style="letter-spacing:50px;">白酒</div>
            <div class="wine_list">
                <ul>
                    <li><a href="?cate=4" style="letter-spacing:50px;">法國</a></li>
                    <li><a href="?cate=5" style="letter-spacing:50px;">德國</a></li>
                    <li><a href="?cate=6" style="letter-spacing:50px;">智利</a></li>
                </ul>
            </div>
        </div>
        <div class="wine_item">
            <div class="wine_title">香檳 / 氣泡酒</div>
            <div class="wine_list">
                <ul>
                    <li><a href="?cate=7" style="letter-spacing:50px;">法國</a></li>
                    <li><a href="?cate=8" style="letter-spacing:20px;">義大利</a></li>
                    <li><a href="?cate=9" style="letter-spacing:20px;">西班牙</a></li>
                </ul>
            </div>
        </div>
        <div class="ad">
            <div class="wine_ad">
                <a href="winetaste.php"><img src="imgs/wine_04_02.png"></a>
                <a href="winetaste.php"><img src="imgs/wine_04_01.png"></a>
            </div>
            <div class="wine_ad1">
                <a href="winetaste.php"><img src="imgs/wine_04_04.png"></a>
                <a href="winetaste.php"><img src="imgs/wine_04_03.png"></a>
            </div>
            <div class="wine_ad2">
                <a href="small_test.php"><img src="imgs/wine_04_08.png"></a>
                <a href="small_test.php"><img src="imgs/wine_04_07.png"></a>
            </div>

        </div>
    </div>







<body class="fine_wine">
<div class="fond_wine1">
    <div class="form">

        <p class="fond_wine2">代客尋酒</p>
        <div class="find_abc"><h3>找不到心儀的酒嗎？我們提供代客尋找各式酒類服務，填寫以下表格，由我們Steak Gallery為您尋找！</h3></div>

        <div class="form-group">
            <input type="name" name="f_name"  placeholder="聯絡人姓名"/>
        </div>
        <div class="form-group">
            <input type="text" name="f_phone" placeholder="聯絡電話"/>
        </div>
        <div class="form-group">
            <input type="mail" name="f_mail"  placeholder="EMAIL"/>
        </div>
        <div class="form-group form-group_b">
            <textarea type="mail" name="f_disscr"  placeholder="欲尋酒品敘述"></textarea>

        </div>

        <div class="form-find">
            <button type="submit" class="btn_foid">送出</button>
        </div>
        </form>
    </div>
</div>
<script>

    $(function () {
        $('.btn_foid').click(function(){

            swal(
                '詢問單送出成功!',
                '感謝您的來函！會盡快為您處理，謝謝！',
                'success'
            )
        })
    });



</script>
</body>
<?php include(__DIR__ . '/sg_footer.php') ?>

</html >