<!DOCTYPE html>

<?php $text= file_get_contents("buseng.txt");
?>

<html lang="en">
	<head>
		<link href="bus.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8"/>
	</head>

	<body>
			<div id="header">
				TIP for bus!
			</div>
			<section id="text">
				<?= $text ?>
			</section>
			<section id="picture1">
				<img src="bus.gif" width="800" hegiht="400">
			</section>
			<section id="picture2">
				<a href="http://www.seoulcitybus.com/korean.php" target="_blank"><img src="seoulcity_bus.jpg" width=300 height=200>
			</section>

	</body>
</html>