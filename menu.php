<?php include __DIR__ . '/__connect_db.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MENU</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- 字型 -->
	<link rel="stylesheet" href="css/grid-system.css"><!-- 格線 -->
	<link rel="stylesheet" href="css/menu.css">


</head>
<body style="overflow-y: hidden;">
<?php include(__DIR__ . '/NSGnav.php') ?>

<div class="bigmenu">
	<table class=menuicon_big>
		<tr><br>
			<td><a target="_blank" href="imgs/menu/Special菜單.pdf"></a><br>Special菜單</td>
			<td><a target="_blank" href="imgs/menu/午餐菜單.pdf"></a><br>午餐菜單</td>
			<td><a target="_blank" href="imgs/menu/Special菜單.pdf"></a><br>晚餐菜單</td>
		</tr>
		<tr>
			<td><a target="_blank" href="imgs/menu/2017雙人龍蝦餐.pdf"></a><br>早餐菜單</td>
			<td><a target="_blank" href="imgs/menu/聖誕菜單.pdf"></a><br>聖誕菜單</td>
			<td><a target="_blank" href="imgs/menu/新年期間菜單.pdf"></a><br>新年期間菜單</td>
		</tr>
	</table>
</div>



	
</body>
<?php include(__DIR__ . '/sg_footer.php') ?>

</html>