<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.css">

<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
<!--<link rel="stylesheet" href="css/grid-system.css"> -->
<!-- inject:css -->

<link rel="stylesheet" href="css/cocoen.min.css">
<link rel="stylesheet" href="css/demo.min.css">
<link rel="stylesheet" href="css/sghome.css">
<!-- endinject -->
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
<link rel="stylesheet" href="css/NSGnav.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
<link rel="stylesheet" href="css/css_reset.css">




<nav class="navbar navbar-default mynavbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="sghome.php">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav mynav">
        <li><a href="#"><span class="sr-only">(current)</span></a></li>
        <li><a href="#">ABOUT </a></li>
        <li class="dropdown mydropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CUISINE <span class="caret"></span></a>
          <ul class="dropdown-menu mydropdown-menu">
            
            <li><a href="cuisine.php">主廚推薦</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="beef.php">牛肉介紹</a></li>
          </ul>
        </li>

        <li class="dropdown mydropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WINES <span class="caret"></span></a>
          <ul class="dropdown-menu mydropdown-menu">
            <li><a href="small_test.php">選酒測驗</a></li>
            <li><a href="find_wine.php">代客尋酒</a></li>
            <li><a href="product_red.php">所有商品</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="winetaste.php">品酒會</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="wine_knowdege.php">品酒小知識</a></li>
          </ul>
        </li>

         <li><a href="contact.php">RESERVATIONS </a></li>
          <li><a href="contact.php">CONTACT </a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart_list.php"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i><span
                            class="label_aa cart_qty">1</span></a></li>
        <!--<li><a href="#">會員登入</a></li>-->
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


        <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">

                <li><a href="">NEWS</a></li>
                <li class="dropdown menu__item "><a href="about.php" class="dropdown-toggle menu__link">About</a>
                    <ul class="dropdown-menu agile_short_dropdown">
                        <li><a href="about.php">品牌故事</a></li>
                        <li><a href="about.php">得獎紀錄</a></li>
                        <li><a href="about.php">環境</a></li>
                    </ul>
                </li>
                <li class="dropdown menu__item"><a href="cuisine.php" class="dropdown-toggle menu__link">CUISINE</a>
                    <ul class="dropdown-menu agile_short_dropdown">
                        <li><a href="cuisine.php">主廚推薦</a></li>
                        <li><a href="beef.php">牛肉介紹</a></li>
                    </ul>
                </li>
                <li class="dropdown menu__item"><a href="age.php" class="dropdown-toggle menu__link">WINES</a>
                    <ul class="dropdown-menu agile_short_dropdown"
                    ">
                <li><a href="small_test.php">選酒測驗</a></li>
                <li><a href="find_wine.php">代客尋酒</a></li>
                <li><a href="product_red.php">所有商品</a></li>
                <li><a href="winetaste.php">品酒會</a></li>
                <li><a href="wine_knowdege.php">品酒小知識</a></li>
            </ul>
            </li>
            <li><a href="contact.php">RESERVATIONS</a></li>
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
        </div>-->




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

    
   

    // $('.mynav li.dropdown').hover(function () {

    // if ($(window).width() < 769) {
        
    //     // JavaScript here
    //     // 當CSS media query計算的視窗寬度小於768px時執行
        
    // } else {
    //     // JavaScript here
    //     // 當CSS media query計算的視窗寬度大於等於769px時執行
    //     $(this).find('.mydropdown-menu').stop(true, true).delay(100).fadeIn(300);
    // }
        
    // }, function () {
    //     $(this).find('.mydropdown-menu').stop(true, true).delay(100).fadeOut(300);
         
    // });

   

        $('ul.nav li.mydropdown').hover(function () {
             if ($(window).width() > 769) {
                  $(this).find('.mydropdown-menu').stop(true, true).delay(100).fadeIn(300);
             } else {
                                   $(this).find('.mydropdown-menu').stop(true, true).delay(100).fadeIn(300);
             }
           
        }, function () {
             if ($(window).width() > 769) {
                $(this).find('.mydropdown-menu').stop(true, true).delay(100).fadeOut(300);
             } else {
                                 $(this).find('.mydropdown-menu').stop(true, true).delay(100).fadeOut(300);

             }
        });

     


</script>
<!-- inject:js -->
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/requestAnimationFrame.min.js"></script>
<script src="js/cocoen.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>


