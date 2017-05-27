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
	
	<link rel="stylesheet" href="css/left_bar.css">
	<link rel="stylesheet" href="css/wine.css">
	<link rel="stylesheet" href="css/sweet-alert.css">
	<script src="js/sweet-alert.js"></script>
</head>
<body class="lightbody">
<?php include(__DIR__ . '/NSGnav.php')?>

<div class="container-fliud">
    <div class="row">

		<div class="col-xs-12 col-md-2 wine_box">
                <div class="wine_item">
                    <div class="wine_title">
                       / 價格 /
                    </div>
                    <div class="price">
                        <select name="price_sel" id="price_sel" class="form-control myprice">
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
                        <a href="product_red.php">
                        / 所有商品 /
                        </a>
                    </div>
                </div>
                <div class="wine_item">
                    <div class="wine_title">
                        <p>/ 紅酒 /</p>
                        </div>
                    <div class="wine_list">
                        <ul>
                            <li><a href="?cate=1">法國</a></li>
                            <li><a href="?cate=2">美國</a></li>
                            <li><a href="?cate=3">智利</a></li>
                        </ul>
                    </div>
                </div>
                <div class="wine_item">
                    <div class="wine_title">
                        <p>/ 白酒 /</p>
                        </div>
                    <div class="wine_list">
                        <ul>
                            <li><a href="?cate=4" >法國</a></li>
                            <li><a href="?cate=5">德國</a></li>
                            <li><a href="?cate=6">智利</a></li>
                        </ul>
                    </div>
                </div>
                <div class="wine_item">
                    <div class="wine_title">
                        <p>/ 香檳  氣泡酒 /</p>
                        </div>
                    <div class="wine_list">
                        <ul>
                            <li><a href="?cate=7">法國</a></li>
                            <li><a href="?cate=8">義大利</a></li>
                            <li><a href="?cate=9">西班牙</a></li>
                        </ul>
                    </div>
                </div>
		 </div> <!-- wine_box div end -->		

			<div class="col-xs-12 col-md-10 single_pro">
					<div class="single_wine">

						<div class="infor">
							<img src="imgs/big/<?= $row['p_id'] ?>.png" >
						
						</div>

						<ul class="single_pic">
							<li><h2><?= $row['p_name'] ?></h2></li>
						
							<li><h3>＄<?= $row['price'] ?>&nbsp;&nbsp;&nbsp;
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
									</select>
								</h3>
								<a data-sid="<?= $row['sid'] ?>" class="buy_btn" role="button">加入購物車
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
								</a>
							</li>
							
							<li><h4>產區</h4>
								<p><?= $row['category_country'] ?> &nbsp;<?= $row['p_areas'] ?></p>
							</li>
							<?php if(!empty($row['p_varieties'])): ?>
							<li><h4>葡萄品種</h4>
								<p><?= $row['p_varieties'] ?></p>
							</li>
							<?php endif; ?>
							<li><h4>酒精濃度</h4>
								<p><?= $row['p_alcohol'] ?></p>
							</li>
							<?php if(!empty($row['p_winning'])): ?>
								<li><h4>得獎記錄</h4>
									<p><?= $row['p_winning'] ?></p>
								</li>
							<?php endif; ?>
								<?php if(!empty($row['p_products'])): ?>
								<li><h4>特色介紹</h4>
									<p><?= $row['p_products'] ?></p>
								</li>
							<?php endif; ?>
							<?php if(!empty($row['p_winery'])): ?>
								<li><h4>酒莊介紹</h4>
									<p><?= $row['p_winery'] ?></p>
								</li>
							<?php endif; ?>
							
							
						</ul>
						
					</div>
			</div><!-- single_pro div end -->	


			<div class="col-xs-12 favorite_item">
				
					<ul class="favorite_item4">
						
						<hr class="cu_hr">
							<div class="page-title">
								<span>
									<h3 class="maybeulike_h3">
										  你可能有興趣的商品 
									</h3>
								</span>
							</div>
						<?php

						while ($r_row = $r_result->fetch_assoc()): ?>

							<li class="col-xs-12 col-md-4 favorite_item1" id="favorite_item1">
								<a class="single_product" href="wine.php?sid=<?= $r_row['sid'] ?>">
									<img src="imgs/small/<?= $r_row['p_id'] ?>.png"></a>
								<h3><?= $r_row['p_name'] ?></h3>
								<h5>NT $<?= $r_row['price'] ?></h5>
							</li>
						<?php endwhile; ?>

					</ul>
			</div>
				
 </div> <!--row-->
    
</div> <!--  container-fliud 結束  -->
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

							timer: 3000
						})
						
						
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