<?php include __DIR__. '/__connect_db.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
    <link rel="stylesheet" href="css/grid-system.css">
    <link rel="stylesheet" href="css/wine_knowledge.css">
</head>
<body id="knowledge_body" style="position: relative;">
<?php include(__DIR__ . '/NSGnav.php') ?>
<div class="know1">
    <img src="imgs/wine_knowedge/wine_05_01.jpg" alt="">
</div>
<div class="c-sm-12 know2">
    <div class="c-sm-12 know00002">
        <p>葡萄酒顏色特徵</p>
        釀酒葡萄依顏色可分為紅葡萄跟白葡萄兩大類，而葡萄酒的顏色的差異主要源自於葡萄皮。<br/>
        紅酒在釀造過程中須將紅葡萄皮與葡萄汁接觸，以萃取出紅色素與其他成分。<br/>
        而粉紅酒則是縮短果皮與果汁接觸的時間，所以顏色才不如紅酒般深沈。<br/>
        白酒因不需要紅色素之故，所以在醞釀過程中省略此步驟。<br/>
    </div>
    <a target="_blank" href="product_red.php"><div class="c-sm-4 knowbox" id="img00001"><img src="imgs/wine_knowedge/wine_05_02.png" alt=""></div></a>
    <div class="c-sm-4 knowbox" id="img00002"><img src="imgs/wine_knowedge/wine_05_03.png" alt=""></div>
    <div class="c-sm-4 knowbox" id="img00003"><img src="imgs/wine_knowedge/wine_05_04.png" alt=""></div>
</div>
<div class=" c-sm-12 know3"><img src="imgs/wine_knowedge/wine_05_06.png" alt=""></div>
<div class="c-sm-12 know4">
    <div class="c-sm-8">
        <p>透過選酒測驗 找出您的專屬好酒</p>
        <div id=gototest><a href="small_test.php">點我進入選酒測驗</a></div>
    </div>
    <div class="c-sm-4">
        <img src="imgs/wine_knowedge/wine_05_07.jpg" alt="">
    </div>
</div>

<footer class=" c-xs-12 c-sm-12 c-lg-2 " id="home_footer">
    <h2 id="foot_h2">未滿十八歲請勿飲酒&nbsp;&nbsp;&nbsp;酒後不開車&nbsp;&nbsp;&nbsp;安全有保障</h2>
    <div class="bk"><span class="c-xs-3 c-sm-2 ">book a reservation </span>
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
        <a href="#inline" data-modaal-type="inline" data-modaal-animation="fade" id="enter" class="btn modaal" style="color:#fff; font-size:1.2vw; ">訂位</a>
        <!--			 <a href="#inline"> <input type="submit" value="訂位"  class="c-xs-2 c-sm-2 c-lg-2" "></a>-->
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
</footer>
</body>

</html>