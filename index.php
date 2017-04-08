<?php include __DIR__ . '/__connect_db.php';
?>



<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Steak Gallery</title>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
				list-style:none;
			}
		</style>
	</head>


	<body>

	<video id="movie" width="100%" height="100%" autoplay >
  <source src="videos/intro.mp4" type="video/mp4" />
  <source src="videos/intro.webm" type="video/web" />
  您的瀏覽器不支援HTML 5影片播放標籤<video>格式。
  Your browser doesn't support the <video> tag.
</video>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">

	setTimeout(aa,6600);

	function aa(){
		location.assign('sghome.php');

	}


</script>
		
	</body>
	</html>