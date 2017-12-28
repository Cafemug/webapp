<!DOCTYPE html>

<?php $text= file_get_contents("bus.txt");
?>

<html lang="en">
	<head>
		<link href="bus.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8"/>
	</head>

	<body>
			<div id="header">
				버스에 관한 간단한 TIP!
			</div>
			<section id="text">
				<?= $text ?>
			</section>
			<section id="picture1">
				<img src="bus.gif">
			</section>
			<section id="picture2">
				<a href="http://www.seoulcitybus.com/korean.php" target="_blank"><img src="seoulcity_bus.jpg">
			</section>

	</body>
</html>