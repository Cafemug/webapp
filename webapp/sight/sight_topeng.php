<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="sight_top.css">
	 <link rel="stylesheet" type="text/css" href="../maptest.css">
	<script type="text/javascript" src="../maptest.js"></script>
	<script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhGHFO9pQBtVbE4YBzAxn-78HUiozJwpg&callback=initMap&language=en&region=en"></script>
</head>
<body>
	<table>
		<tr><td ondblclick="parent.contents('sight/contentsampleeng.php_Gyeongbokgung')" onclick="moveToDarwin(gyongbokkong)">Gyeongbokgung</td></tr>
		<tr><td ondblclick="parent.contents('sight/contentsampleeng.php_Dongdaemun')" onclick="moveToDarwin(dongdaemoon)">Dongdaemun</td></tr>
		<tr><td ondblclick="parent.contents('sight/contentsampleeng.php_Changdeokgung')" onclick="moveToDarwin(changdeokkong)">Changdeokgung</td></tr>
		<tr><td ondblclick="parent.contents('sight/contentsampleeng.php_Gwanghwamun-Square')" onclick="moveToDarwin(gwanghwa)">Gwanghwamun-Square</td></tr>
		<tr><td ondblclick="parent.contents('sight/contentsampleeng.php_Cheonggyecheon')" onclick="moveToDarwin(cheonggeycheon)">Cheonggyecheon</td></tr>
	</table>
	<div id="googlemap"></div>
</body>
</html>
