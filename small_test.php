<?php include __DIR__ . '/__connect_db.php';
$page_name = 'product_red';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/grid-system.css">
    <link rel="stylesheet" href="css/small_test.css">


</head>
<body>
<?php include(__DIR__ . '/NSGnav.php') ?>

<div class="game_big">
    <div class="game">
        <ul>
            <li id="wine_000" >
                <h1>找出你的專屬好酒
                    <img src="https://storage.googleapis.com/winentaste-assets/images/glass_clink.png" alt="Glass clink" >
                </h1>
                <div id="wineP" class="c-sm-6 c-xs-12">酒單上的酒琳琅滿目百百種，該要如何選擇呢？紅肉配紅酒？白肉配白酒？酒和食物搭配得宜時是相輔相成，相得益彰的好朋友，搭錯時卻像牽錯了女朋友的手，喝不出好味道還互相干擾，要如何能找出你的專屬好酒呢？？選酒不求人，利用簡單的選酒測驗找出今天的專屬好酒吧。
                </div>
                <a href="javascript:;" class="wine_starbtn">開始測驗</a>
            </li>
            <li id="wine_001">
                <fieldset class="c-sm-4 c-xs-12 qqq">
                    <h2>你喜歡吃哪一種水果？？</h2>
                    <label><input type="radio" name="acidity" >檸檬汁</label>
                    <label><input type="radio" name="acidity" >西瓜汁</label>
                    <label><input type="radio" name="acidity" >柳橙汁</label>
                    <label><input type="radio" name="acidity" >蘋果汁</label>
                    <label><input type="radio" name="acidity" >百香果</label>
                </fieldset>
                <a href="javascript:;" class="wine_starbtn">下一題</a>
            </li>
            <li id="wine_002" >
                <fieldset class="c-sm-4 c-xs-12 qqq">
                    <h2>到飲料店點了飲料，你會加多少糖？</h2>
                    <label><input type="radio" name="acidity" >不加糖</label>
                    <label><input type="radio" name="acidity" >三分糖</label>
                    <label><input type="radio" name="acidity" >半糖</label>
                    <label><input type="radio" name="acidity" >七分糖（少糖）</label>
                    <label><input type="radio" name="acidity" >全糖</label>
                </fieldset>
                <a href="javascript:;" class="wine_starbtn">下一題</a>
            </li>
            <li id="wine_003">
                <fieldset class="c-sm-4 c-xs-12 qqq">
                    <h2>控肉便當，你喜歡吃多肥的肉？？</h2>
                    <label><input type="radio" name="acidity" >瘦肉多一點</label>
                    <label><input type="radio" name="acidity" >肥肉能多少就多少～</label>
                    <label><input type="radio" name="acidity" >肥肉多一點</label>
                    <label><input type="radio" name="acidity" >我不吃肥肉</label>
                    <label><input type="radio" name="acidity" >半肥半瘦</label>
                </fieldset>
                <a href="javascript:;" class="wine_starbtn">下一題</a>
            </li>
            <li id="wine_004">
                <fieldset class="c-sm-4 c-xs-12 qqq">
                    <h2>喝紅茶包的時候你喜歡泡多濃？？</h2>
                    <label><input type="radio" name="acidity" >茶包泡一分鐘</label>
                    <label><input type="radio" name="acidity" >濃一點好</label>
                    <label><input type="radio" name="acidity" >茶包撈一撈就拿起來，30秒之內</label>
                    <label><input type="radio" name="acidity" >超濃</label>
                    <label><input type="radio" name="acidity" >淡淡的</label>
                </fieldset>
                <a href="javascript:;" class="wine_starbtn">下一題</a>
            </li>
            <li id="wine_005">
                <div class="c-sm-12 c-xs-12 wine_endP">推薦好酒</div>
                <div class="c-sm-3 c-xs-12 wine_end">
                    <a target="_blank" href="wine.php?sid=3"><img src="imgs/wine_test/wine_01_05r2013.png" alt=""></a>
                    <p>Clarendelle Rouge, Bordeaux A.O.C. 2011</p>
                </div>
                <div class="c-sm-3 c-xs-12 wine_end">
                    <a target="_blank" href="wine.php?sid=14"><img src="imgs/wine_test/wine_01_05r2016.png" alt=""></a>
                    <p>Hahn Family Wines - Smith & Hook Cabernet Sauvignon 2012</p>
                </div>
                <div class="c-sm-3 c-xs-12 wine_end">
                    <a target="_blank" href="wine.php?sid=23"><img src="imgs/small/r3017.png" alt=""></a>
                    <p> Vina Santa Carolina (VSC)</p>
                </div>
                <div class="c-sm-3 c-xs-12 wine_end">
                    <a target="_blank" href="wine.php?sid=16"><img src="imgs/wine_test/wine_01_05r2018.png" alt=""></a>
                    <p>Edgewood Cabernet Sauvignon Napa Valley</p>
                </div>



                <a href="" class="wine_starbtn">再玩一次</a>
            </li>
        </ul>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

    $(function () {
        $('#wine_000 a').click(function () {
            $('#wine_000').addClass('now')
        })

        $('#wine_001 a').click(function () {
            $('#wine_001').addClass('now')
        })

        $('#wine_002 a').click(function () {
            $('#wine_002').addClass('now')
        })

        $('#wine_003 a').click(function () {
            $('#wine_003').addClass('now')
        })

        $('#wine_004 a').click(function () {
            $('#wine_004').addClass('now')
        })
    });

</script>

</body>

<?php include(__DIR__ . '/sg_footer.php') ?>

</html>
