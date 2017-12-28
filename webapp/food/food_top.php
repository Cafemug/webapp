<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="food_top.css">
	<link rel="stylesheet" type="text/css" href="../maptest.css">
	<script type="text/javascript" src="../maptest.js"></script>
	<script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhGHFO9pQBtVbE4YBzAxn-78HUiozJwpg&callback=initMap"></script>
</head>
<body>
	<table>
		<tr><td ondblclick="parent.contents('food/foodsample.php_족발')" onclick="moveToDarwin(pig)">족발</td></tr>
		<tr><td ondblclick="parent.contents('food/foodsample.php_냉면')" onclick="moveToDarwin(cold)">냉면</td></tr>
		<tr><td ondblclick="parent.contents('food/foodsample.php_불고기')" onclick="moveToDarwin(bul)">불고기</td></tr>
		<tr><td ondblclick="parent.contents('food/foodsample.php_비빔밥')" onclick="moveToDarwin(bibim)">비빔밥</td></tr>
		<tr><td ondblclick="parent.contents('food/foodsample.php_갈비')" onclick="moveToDarwin(gal)">갈비</td></tr>
	</table>
	<div id="googlemap"></div>
</body>
</html>