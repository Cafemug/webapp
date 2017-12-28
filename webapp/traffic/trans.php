<!DOCTYPE html>

<?php $text = file("정액권.txt"); 
	$text1 = file_get_contents("taxi.txt");
	$print1 = explode("\n",$text1);
	$text2 = file_get_contents("subway.txt");
	$print2 = explode("\n",$text2);
	?>
<html lang="en">
	<head>
		<link href="layout.css" type="text/css" rel="stylesheet" />
		<script src="trans.js" type="text/javascript"></script>
		<meta charset="utf-8"/>
	</head>

	<body>
		<section>
			<div id ="header">
				머리

				</br>
				</br>
				</br>
				
			</div>
		
			<div id="aside">
				<ul>
					<div id="bus">
					<li>BUS</li>
					</div>

					<div id="subway">
					<li>SUBWAY</li>

					</div>

					<div id="taxi">
					<li>TAXI</li>
					</div>
					<div id="ticket">
					<li>정액권</li>
					</div>
				</ul>

			</div>

			<?= foreach($text as $texts){
				 $texts;
			} ?>
		</section>
	</body>
</html>