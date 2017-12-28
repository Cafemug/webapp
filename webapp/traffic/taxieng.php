<!DOCTYPE html>

<?php $text= file_get_contents("taxieng.txt");
?>

<html lang="en">
	<head>
		<link href="taxi.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8"/>
	</head>

	<body>
			<div id="header">
			 	TIP for taxi!
			</div>
			<section id="text">
				<?= $text; ?>
			</section>

			<section id="picture">
				<img src="taxi.jpg" width=400 height=400>
				<img src="black_taxi.jpg" width=400 heigt = 400>
			</section>
	</body>
</html>