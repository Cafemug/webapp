<!DOCTYPE html>


<html lang="en">
	<head>
		<link href="subway.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8"/>
	</head>

	<body>
			<div id="header">
				TIP for subway!
			</div>
			<section id="text">
				<?php $text = file_get_contents("subwayeng.txt");?>
				<?= $text?>	
			</section>
			<setion id="picture">
				<a href="http://dmzap1.seoulmetro.co.kr/upload/station/map_korea.jpg" target="_blank"><img src="seoul_metro.jpg" width="450" hegith="450"></a>
				<a href="http://dmzap1.seoulmetro.co.kr/upload/station/map_english.jpg" target="_blank"><img src="metro_english.jpg" width="450" hegith="450"></a>
			</setion>
			<section id="movie">
			<object width="400" height="300" data="https://www.youtube.com/embed/WTRE2BXvSf8" type="text/html" allowfullscreen></object>
			<object width="400" height="300" data="https://www.youtube.com/embed/GQPInb3uL5w" type="text/html" allowfullscreen></object>
			</section>
	</body>
</html>