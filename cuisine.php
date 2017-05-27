<?php
require_once(__DIR__ . '/__connect_db.php');

$page_name = 'cuisine';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/cuisine.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
    <!--<link rel="stylesheet" type="text/css" href="css/NSGnav.css">-->
    
    <!--<link rel="stylesheet" href="css/grid-system.css">-->
    <!--格線-->
    <link rel="stylesheet" type="text/css" href="css/style.css" /><!--cui_slider的css-->
    <script src="js/modernizr.custom.63321.js"></script><!--cui_slider的js-->
    </head>
<body class="lightbody">
<?php include(__DIR__ . '/NSGnav.php') ?>
<div class="container-fluid">
    <div class="row">
        <div class="cuisine_table">
            <div class="col-xs-4 col-md-4 cuisine_table1 cuisine_table1" id="cuisine_table1">
                <img src="imgs/cuisine/cuisine_01_03.png" alt="" >
                <p>溫烤法式芥末子羊排</p>
            </div>
            <div class="col-xs-4 col-md-4 cuisine_table1 cuisine_table1" id="cuisine_table2">
                <img src="imgs/cuisine/cuisine_01_04.png" alt="" style="width:65%;">
                <p>蒸烤加拿大纖活龍蝦</p>
            </div>
            <div class="col-xs-4 col-md-4 cuisine_table1 cuisine_table1" id="cuisine_table3">
                <img src="imgs/cuisine/cuisine_01_05.png" alt=""  style="width:60%;">
                <p>厚切紐約客牛排</p>
            </div>
            <h1 class="cuisine_h1 col-xs-12">
                主廚推薦 
            </h1>
           
        </div>
    </div>


<!-- ============= 餐點slider ================ -->
<div class="row">
        <div class=" cu_slider">
            <div id="mi-slider" class="mi-slider">
                <ul>
                    <li>
                        <a href="javascript:" class="can_open image_m01" onclick="previewImage('image_m01')">
                            <img src="imgs/cuisine_img/m01.jpg" alt="img01">
                            <h4>極致厚切肋眼</h4>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="can_open image_m02" onclick="previewImage('image_m02')">
                            <img src="imgs/cuisine_img/m02.jpg" alt="img02">
                            <h4>帶骨紐約客</h4>
                        </a>
                    </li>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/m03.jpg" alt="img03"><h4>戰斧豬排</h4></a></li>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/m04.jpg" alt="img04"><h4>丁骨牛排</h4></a></li>
                </ul>
                <ul>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/s02.jpg" alt="img05"><h4>炙燒北海道干貝佐青醬</h4></a></li>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/s03.jpg" alt="img06"><h4>乾煎圓鱈襯大明蝦佐白酒醬</h4></a></li>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/s04.jpg" alt="img07"><h4>蔬菜茴香煮海鮮</h4></a></li>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/s01.jpg" alt="img07"><h4>海鱺魚排佐漁夫醬</h4></a></li>

                </ul>
                <ul>
                    <li>
                        <a href="javascript:"><img src="imgs/cuisine_img/a04.jpg" alt="img09"><h4>普羅旺斯風味南瓜濃湯</h4>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:"><img src="imgs/cuisine_img/a01.jpg" class="can_open image_a01" onclick="previewImage('image_a01')" alt="img09"><h4>頂級挪威煙燻鮭魚凱薩沙拉</h4>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:"><img src="imgs/cuisine_img/a02.jpg" alt="img10"><h4>檸檬油漬海鱺魚</h4>
                        </a>
                    </li>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/a03.jpg" alt="img11"><h4>嫩煎鮮鵝肝</h4></a></li>
                </ul>
                <ul>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/d01.jpg" alt="img12"><h4>溫烤醇奶焦糖布丁</h4></a></li>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/d02.jpg" alt="img13"><h4>布朗尼佐香草冰淇淋</h4></a></li>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/d03.jpg" alt="img14"><h4>法式雙餡草莓塔</h4></a></li>
                    <li><a href="javascript:"><img src="imgs/cuisine_img/d04.jpg" alt="img15"><h4>莓果白巧克力雪寶</h4></a></li>
                </ul>
                <nav>
                    <a href="#">主餐</a>
                    <a href="#">海鮮</a>
                    <a href="#">前菜</a>
                    <a href="#">甜點</a>
                </nav>
            </div>
        </div>
     </div><!--- row-->
   
<div class="row">
    <div class="cui_msg">
        <div class="wine_msg m_big1">
            <p>以美國Prime等級牛肉的肋眼部位為主角，<br>為了提昇肋眼的軟嫩感，主廚挑選美牛第10到12根的肋眼部位，<br>這個部位兼具紐約客的獨特風味與肋眼的豐美油花，<br>搭配上主廚精心研發以大蒜為基底，創造出低油低脂的牛排佐醬，<br>讓賓客們在大啖美食的同時，也能吃的健康與安心。</p>
            <a href="javascript:" class="btn-close">X</a>
        </div>
        <div class="wine_msg m_big2">
            <p>
                牛前腰脊肉部分（strip loin)，<br>大理石紋油花(marbling)
                分佈均勻，是美國人的最愛故名紐約客，<br>特色：口感厚實有嚼勁，側邊帶有一條完整嫩筋，脆軟的口感讓人大呼過癮。<br>搭配上本店主廚精心的烹調技法能將紐約客真實的風味完整呈現！<br>
            </p>
            <a href="javascript:" class="btn-close">X</a>
        </div>
        <div class="wine_msg a_big1">
            <a href="javascript:" class="btn-close">X</a>
        </div>
    </div>
</div>


<!-- =================搭餐酒================== -->
<div class="row">
    <div class=" cuisine_wine col-xs-12">
         
         <hr class="cu_hr">
    <div class="page-title">
        <span>
            <h1 class="cuisine_h1_2">
            本月主打星
            </h1>
        </span>
    </div>
    </div>
   
   

        
            <div class="col-xs-12 col-md-4 steak_wine">
                <a href="wine.php?sid=7"><img src="imgs/small/r1017.png" class="img-responsive myimg-res"></a>
                <h3>Joseph Roty Marsannay Village En Ouzelois</h3>
                <p >
                    有著豐富和複雜的香氣，如黑色水果，香草香料等。<br>
                    口感的單寧與酸度結構完整，水果風味十足。</p>
                <p >搭配美食:乾煎鴨胸跟莎朗牛排</p>
               
                <a href="wine.php?sid=7">
                     <button type="button" class="btn btn-primary mybuybtn">MORE
                         </button>    
                </a>

            </div>
            <div class="col-xs-12 col-md-4 steak_wine" >
                <a href="wine.php?sid=44"><img src="imgs/small/c3013.png" class="img-responsive myimg-res"></a>
                <h3>FREIXENET CORDON ROSADO</h3>
                <p>顏色飽滿美麗的玫瑰色。黑葡萄帶出的沉穩單寧味與成熟草莓帶有的自然甜味形成完美的搭配。可以感受到草莓與華麗深厚風味的超人氣甜味玫瑰氣泡酒。</p>
                <a href="wine.php?sid=44">
                     <button type="button" class="btn btn-primary mybuybtn">MORE
                         </button>    
                </a>
            </div>
            <div class="col-xs-12 col-md-4 steak_wine">
                <a href="wine.php?sid=35">
                    <img src="imgs/cuisine/cuisine_04_02.png" class="img-responsive myimg-res" style="width: 20%;">
                </a>
                <h3>PACO & LOLA 2012</h3>
                <p>
                    青蘋果、梨子、柑橘、桃子以及香草和細緻花香。<br>新鮮飽滿，滑潤的脂質口感如絲絹，<br>熱帶水果和礦物風味彼此和諧。
                </p>
                <p>搭配美食:新鮮海鮮料理。</p>
                <a href="wine.php?sid=35">
                     <button type="button" class="btn btn-primary mybuybtn">MORE
                         </button>    
                </a>
                 
            </div>
       

        <a href="javascript:;" class="goTop">
            <i class="fa fa-arrow-up"></i>
        </a>


    </div>    
</div> <!--con end-->
</body>

<?php include(__DIR__ . '/sg_footer.php') ?>

</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!--===================== cui_slider的js =================================-->
<script src="js/jquery.catslider.js"></script>
<script>
    $(function() {
        $('#mi-slider').catslider();
    });


    function previewImage(selectedImage){
        $('.cui_msg').fadeIn();


        if(selectedImage == 'image_m01') {
            $(".m_big1").css("visibility", "visible");
        } else if(selectedImage == 'image_m02') {
            $(".m_big2").css("visibility", "visible");
        } else if(selectedImage == 'image_a01') {
            $(".a_big1").css("visibility", "visible");
        }
    };
    $(function() {
        $('.btn-close').click(function(){
            $('.cui_msg').fadeOut();
            $('.m_big1').css("visibility","hidden");
            $('.m_big2').css("visibility","hidden");
            $('.a_big1').css("visibility","hidden");
        })
    });

    $(function(){
        var _body21 = $('body').height() / 2;
        var $window = $(window);
        var $goTop = $('.goTop');

        $window.scroll(function(){

            if( $window.scrollTop() > _body21 ){
                $goTop.fadeIn();
            }else{
                $goTop.fadeOut();
            }

        })

        $goTop.click(function(){
            $('html,body').animate({scrollTop:0},1000);
        })
    })
</script>