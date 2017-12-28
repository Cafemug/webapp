<!DOCTYPE html>

<?php $text= file_get_contents("ticketeng.txt");
?>

<html lang="en">
	<head>
		<link href="ticket.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8"/>
	</head>

	<body>
			<div id="header">
				TIP for ticket!
			</div>
			<section id="text">
			<?= $text ?>
			</section>
			<section id="picture1">
				<img src="mpass.jpg" width="600" height="400">
			</section>
			<section id="picture2">
				<img src="sold.jpg" width="1000" height="800">
			</section>
	</body>
</html>