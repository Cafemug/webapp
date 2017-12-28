<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="food_top.css">
	<link rel="stylesheet" type="text/css" href="../maptest.css">
	<script type="text/javascript" src="../maptest.js"></script>
	<script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhGHFO9pQBtVbE4YBzAxn-78HUiozJwpg&callback=initMap&language=en&region=en"></script>
</head>
<body>
	<table>
		<tr><td ondblclick="parent.contents('food/foodsampleen.php_Jokbal')" onclick="moveToDarwin(pig)">Jokbal</td></tr>
		<tr><td ondblclick="parent.contents('food/foodsampleen.php_Naengmyeon')" onclick="moveToDarwin(cold)">Naengmyeon</td></tr>
		<tr><td ondblclick="parent.contents('food/foodsampleen.php_Bulgogi')" onclick="moveToDarwin(bul)">Bulgogi</td></tr>
		<tr><td ondblclick="parent.contents('food/foodsampleen.php_Bibimbap')" onclick="moveToDarwin(bibim)">Bibimbap</td></tr>
		<tr><td ondblclick="parent.contents('food/foodsampleen.php_Galbii')" onclick="moveToDarwin(gal)">Galbii</td></tr>
	</table>
	<div id="googlemap"></div>
</body>
</html>