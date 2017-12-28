<!DOCTYPE html>

<?php $text= file_get_contents("ticket.txt");
?>

<html lang="kr">
	<head>
		<link href="ticket.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8"/>
	</head>

	<body>
			<div id="header">
				  정액권에 관한 간단한 TIP!
			</div>
			<section id="text">
			<?= $text ?>
			</section>
			<section id="picture1">
				<img src="mpass.jpg">
			</section>
			<section id="picture2">
				<img src="sold.jpg" width="1000" height="800">
			</section>
	</body>
</html>