<!DOCTYPE html>

<?php $text= file_get_contents("taxi.txt");
?>

<html lang="en">
	<head>
		<link href="taxi.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8"/>
	</head>

	<body>
			<div id="header">
			 	택시에 관한 간단한 TIP!
			</div>
			<section id="text">
				<?= $text; ?>
			</section>

			<section id="picture">
				<img src="taxi.jpg">
				<img src="black_taxi.jpg">
			</section>
	</body>
</html>