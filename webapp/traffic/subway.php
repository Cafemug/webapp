<!DOCTYPE html>


<html lang="en">
	<head>
		<link href="subway.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8"/>
	</head>

	<body>
			<div id="header">
				지하철에 관한 간단한 TIP!
			</div>
			<section id="text">
				<?php $text = file_get_contents("subway.txt");?>
				<?= $text?>	
			</section>
			<setion id="picture">
				<a href="http://dmzap1.seoulmetro.co.kr/upload/station/map_korea.jpg" target="_blank"><img src="seoul_metro.jpg"></a>
				<a href="http://dmzap1.seoulmetro.co.kr/upload/station/map_english.jpg" target="_blank"><img src="metro_english.jpg"></a>
			</setion>
			<section id="movie">
			<object data="https://www.youtube.com/embed/WTRE2BXvSf8" type="text/html" allowfullscreen></object>
			<object data="https://www.youtube.com/embed/GQPInb3uL5w" type="text/html" allowfullscreen></object>
			</section>
	</body>
</html>