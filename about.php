<?php include __DIR__ . '/__connect_db.php';

$page_name = 'about';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
    <link rel="stylesheet" type="text/css" href="css/grid-system.css">
      <link rel="stylesheet" type="text/css" href="css/about.css">
<link rel="stylesheet" href="css/vegas.min.css">
<link rel="stylesheet" type="text/css" href="css/vegas.css">
</head>
  <body>
  <?php include(__DIR__ . '/NSGnav.php') ?>

  <section id="about01" class="about c-sm-12 c-xs-12">
      <article class="art_h2 c-sm-4 x-sm-4">
        <h2>品牌故事</h2>
        <p>
steak gallery座落於熱鬧的忠孝商圈內，位置鬧中取靜、優雅簡約。
店內的氣氛溫馨，優雅明亮的裝潢吸引了許多政商名流在此用餐；機動而實用的三間包廂，更成為附近不少金融機構及公司行號洽談公事、開會聚餐的首選。

我們秉持著「Love」的經營理念，造就了獨特的烹調藝術與精緻風格。
嚴選美國安格斯(CAB)等級牛肉，深蘊熟成、香溢多汁；絕對讓您回味無窮。
steak gallery本持著愛的理念，不斷的追求創新與進步，希望能融合美味、健康、愛地球，完成百年餐廳的夢想。</p>      
      </article>

  </section>

  <section id="about2" class="about c-sm-12 c-xs-12">
             <h2 class="about_h2">店內環境</h2>
             <div class="c-sm-4 c-xs-4 ab_img2">
                <img src="imgs/about/about_00_02.png">
              </div>
              <div class="c-sm-4 c-xs-4 ab_img3">
                <img src="imgs/about/about_00_03.png">
              </div>
  </section>
   

    <section id="about3" class="about c-sm-12 c-xs-12" >
		
		    <div class="c-sm-4 c-xs-4 ab3_left">
        	   <img src="imgs/about/about_03_08.jpg">
        </div>
        <div class="c-sm-4 c-xs-4 ab3_middle">
          	<img src="imgs/about/about_03_04.jpg">
        </div>
        <div class="c-sm-4 c-xs-4 ab3_right">
        	<img src="imgs/about/about_01_02.jpg">
        </div>
         <div class="c-sm-4 c-xs-4 ab3_left">
         	<img src="imgs/about/about_03_07.jpg">
         </div>
         <div class="c-sm-4 c-xs-4 ab3_middle">
          <img src="imgs/about/about_03_06.jpg">
         </div>          
         <div class="c-sm-4 c-xs-4 ab3_right">
          <img src="imgs/about/about_03_05.jpg">
         </div>
         
    </section>
    
<section id="about4" class="about c-sm-12 c-xs-12" >
<div class="p_bgcolor">
<h2>經營理念</h2>
   <p>
       追求-食物的樸實原味，
       渴望-顧客的幸福笑容，
       分享-樂活的美味內涵<br>
       我所做的一切，真的滿足了我內心深處的需要，使我覺得人生有意義，我的每一天不但過得充實，而且對他人付出關懷，也希望steak gallery可以讓我們發揮這個簡單的理想，與在這裡互相認識的朋友們可以體會到steal gallery所想要表達出來有關食物與飲食文化真善美的追求！
       食物是連結人與地球，人與人的橋樑，我們藉由奉獻與分享食物的過程，從彼此身上認識人性的善良面，透過食物來達到人生冒險歡樂的生活模式的追求，因此料理的意義若有了這麼深層涵義就變得很有意思。</p>

</div>

</section>



</body>
  <?php include(__DIR__ . '/sg_footer.php') ?>
</html>

<script src="js/vegas.min.js"></script>
<script src="js/vegas.js"></script>
<script>

$('#about4').vegas({
  
  transition: 'fade', 
  transitionDuration: 4000,
  delay: 10000,
  animation: 'random',
  animationDuration: 20000,
  slides: [
    { src: 'imgs/about/about_01_02.jpg' },
    { src: 'imgs/about/about_03_09.jpg' }
  ]
});


</script>



