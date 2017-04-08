<?php include __DIR__ . '/__connect_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
    <link rel="stylesheet" href="css/grid-system.css"><!-- 格線 -->
    <link rel="stylesheet" href="css/contact.css"><!-- 格線 -->


</head>
<body id="contact_body">
<?php include(__DIR__ . '/NSGnav.php') ?>




<div class="c-sm-12 c-xs-12">

    <div id="map" class="c-sm-7 c-xs-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.8722077688444!2d121.54952541487542!3d25.038410544269006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abcf0b943a1b%3A0xa355aaa445fdef1!2zU3RlYWtJbm4g6ZuF5a6k54mb5o6S!5e0!3m2!1szh-TW!2stw!4v1482908455041" width="100%" height="365px" frameborder="0" style="border:0" allowfullscreen></iframe></div>

    <div class="c-sm-4 c-xs-4">
        <form id="cont_Form">
            <input name="name" type="text" class="feedback-input" placeholder="Name姓名">
            <input name="email" type="text" class="feedback-input" placeholder="Email">
            <textarea name="text" class="feedback-input" placeholder="留下您的意見，我們會儘速與您聯絡"></textarea>
            <input type="submit" value="送出"/>
        </form>
    </div>
</div>
<div id="map_P" class="c-sm-12 c-xs-12">
    <p><i class="fa fa-clock-o" aria-hidden="true"></i>營業時間:
        週日到週六 08:00–10:30 11:30–14:00 17:30–22:00
        <i class="fa fa-phone" aria-hidden="true"></i> (02)2775-3011<br>
        台北市大安區安和路一段49巷10號1樓<br>
        <br><br>
    </p>
</div>





</body>
</html>

