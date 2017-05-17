<?php include __DIR__. '/__connect_db.php';

$page_name = 'wine';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;


if(empty($sid)){
	header("Location: product_red.php");
	exit;
}

$sql = "SELECT * FROM `products` WHERE `sid`= $sid";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();


$r_sql = "SELECT * FROM `products` WHERE `sid`<> `p_count` ORDER BY RAND() LIMIT 0, 3";
$r_result = $mysqli->query($r_sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
	<link rel="stylesheet" href="css/css_reset.css">
	<link rel="stylesheet" href="css/grid-system.css">
	<link rel="stylesheet" href="css/left_bar.css">
	<link rel="stylesheet" href="css/wine.css">
	<link rel="stylesheet" href="css/sweet-alert.css">
	<script src="js/sweet-alert.js"></script>
</head>
<body id="wine_body">
<?php include(__DIR__ . '/NSGnav.php')?>

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
				<a href="winetaste.php"><img src="imgs/wine_04_02.png"></a>
				<a href="winetaste.php"><img src="imgs/wine_04_01.png"></a>
			</div>
			<div class="wine_ad1">
				<a href="winetaste.php"><img src="imgs/wine_04_04.png"></a>
				<a href="winetaste.php"><img src="imgs/wine_04_03.png"></a>
			</div>
			<div class="wine_ad2">
				<a href="find_wine.php"><img src="imgs/wine_04_06.png"></a>
				<a href="find_wine.php"><img src="imgs/wine_04_05.png"></a>
			</div>
			<div class="wine_ad3">
				<a href="small_test.php"><img src="imgs/wine_04_08.png"></a>
				<a href="small_test.php"><img src="imgs/wine_04_07.png"></a>
			</div>
		</div>
	</div>
	<div class="c-sm-10 single_pro">
		<div class="single_wine">

			<div class="infor">
				<img src="imgs/big/<?= $row['p_id'] ?>.png" >
			</div>

			<ul class="single_pic">
				<li><h1><?= $row['p_name'] ?></h1></li>
				<li><h3>產區：<?= $row['category_country'] ?> &nbsp;<?= $row['p_areas'] ?></h3></li>
				<?php if(!empty($row['p_varieties'])): ?>
				<li><h3>葡萄品種：<?= $row['p_varieties'] ?></h3></li>
				<?php endif; ?>
				<li><h3>酒精濃度：<?= $row['p_alcohol'] ?></h3></li>
				<?php if(!empty($row['p_winning'])): ?>
					<li><h3 style="color:#ff0000">得獎記錄：<?= $row['p_winning'] ?></h3></li>
				<?php endif; ?>
				<?php if(!empty($row['p_products'])): ?>
					<li><h3>特色介紹：<?= $row['p_products'] ?></h3></li>
				<?php endif; ?>
				<?php if(!empty($row['p_winery'])): ?>
					<li><h3>酒莊介紹：<?= $row['p_winery'] ?></h3></li>
				<?php endif; ?>
				<li><h2>價格：＄<?= $row['price'] ?>&nbsp;&nbsp;&nbsp;
						<select name="qty" class="qty_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>&nbsp;&nbsp;&nbsp;

				<a data-sid="<?= $row['sid'] ?>" class="buy_btn" role="button">
					<i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i></a></h2></li>
			</ul>
		</div>
	</div>


	<div class="favorite_item">
		<h4>你可能有興趣的商品</h4>
		<ul class="favorite_item4">
			<?php

			while ($r_row = $r_result->fetch_assoc()): ?>


				<li class="favorite_item1" id="favorite_item1">
					<a class="single_product" href="wine.php?sid=<?= $r_row['sid'] ?>">
						<img src="imgs/small/<?= $r_row['p_id'] ?>.png"></a>
					<h3><?= $r_row['p_name'] ?></h3>
					<h2>NT $<?= $r_row['price'] ?></h2>
				</li>
			<?php endwhile; ?>

		</ul>
	</div>
	<script>
		var params = <?= json_encode($_GET) ?>;
		var cate_get = <?= empty($_GET['cate']) ? 0 : intval($_GET['cate']) ?>;



		$('#price_sel').on('change', function(){
			//alert( $(this).val() );

			var qs = '?price=' + $(this).val();

			if(params.cate){
				qs += '&cate=' + params.cate;
			}

			location.href = qs;
		});

		if(params.price){
			$('#price_sel').val(params.price);
		}

		$('.buy_btn').click(function(){

			var sid = $(this).attr('data-sid');
			//var qty = $(this).prev().val();

			var qty = $(this).closest('.single_pic').find('.qty_qty').val();

			//alert(sid+":"+qty);

			$.get('add_to_cart.php', {sid:sid, qty:qty}, function(data){
				console.log(data);

				calTotalQty(data);

				document.querySelector('.buy_btn').onclick =
					$(function () {
						swal({
							title: '已加入購物車',

							timer: 500
						}).then(
							function () {},
							// handling the promise rejection
							function (dismiss) {
								if (dismiss === 'timer') {
									console.log('I was closed by the timer')
								}
							}
						)
					});
			}, 'json');

		});



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
					$(this).css('color', '#e1bb56');
				}
			})
		});

	</script>
</body>
<?php include(__DIR__ . '/sg_footer.php') ?>
</html>