






<meta charset="UTF-8">

<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
<link rel="stylesheet" href="css/grid-system.css"><!-- 格線 -->
<!-- inject:css -->
<link rel="stylesheet" href="css/NSGnav.css">
<link rel="stylesheet" href="css/cocoen.min.css">
<link rel="stylesheet" href="css/demo.min.css">
<link rel="stylesheet" href="css/sghome.css">
<!-- endinject -->
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
<link rel="stylesheet" href="css/NSGnav.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
<link rel="stylesheet" href="css/css_reset.css">




<div class="bar">

    <a href="sghome.php"><img src="imgs/logo.svg" alt="" id="logo"></a>
    <div class="nav_header">
        <ul class="navbar">
            <li><a href="">NEWS</a></li>
            <li class="flyout"><a href="about.php">ABOUT</a>
                <ul class="dropdown">
                    <li><a href="about.php">品牌故事</a></li>
                    <li><a href="about.php">得獎紀錄</a></li>
                    <li><a href="about.php">環境</a></li>
                </ul>
            </li>
            <li class="flyout"><a href="cuisine.php">CUISINE</a>
                <ul class="dropdown">
                    <li><a href="cuisine.php">主廚推薦</a></li>
                    <li><a href="beef.php">牛肉介紹</a></li>
                </ul>
            </li>
            <li class="flyout"><a href="age.php">WINES</a>
                <ul class="dropdown">
                    <li><a href="small_test.php">選酒測驗</a></li>
                    <li><a href="find_wine.php">代客尋酒</a></li>
                    <li><a href="product_red.php">所有商品</a></li>
                    <li><a href="winetaste.php">品酒會</a></li>
                    <li><a href="wine_knowdege.php">品酒小知識</a></li>
                </ul>
            </li>
            <li><a href="menu.php">MENUS</a></li>
            <li><a href="">RESERVATIONS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li class="car">
                <a href="cart_list.php"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i><span
                            class="label_aa cart_qty">1</span></a></li>

            <?php if (isset($_SESSION['user'])): ?>
                <li <? echo ($page_name == 'user_edit') ? 'class="active"' : '' ?>>
                    <a href="user_edit.php"><?= $_SESSION['user']['nickname'] ?></a></li>
                <li>
                    <a href="logout.php">登出</a></li>
            <?php else: ?>
                <li <? echo ($page_name == 'login') ? 'class="active"' : '' ?>>
                    <a href="login.php">
                        <i class="fa fa-user-circle fa-lg" aria-hidden="true"> </i>LOGIN</a></li>
            <?php endif ?>

        </ul>

    </div>

</div>
<div class="redbar"></div>

<!--</body>-->
<!--</html>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
    function calTotalQty(data) {
        var count = 0;

        for (var s in data) {
            count += data[s];
        }
        $('.cart_qty').text(count);
    }

    $.get('sum_plus.php', function (data) {
        calTotalQty(data);
    }, 'json');
</script>
<!-- inject:js -->
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/requestAnimationFrame.min.js"></script>
<script src="js/cocoen.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

