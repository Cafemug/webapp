<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="sight_top.css">
	 <link rel="stylesheet" type="text/css" href="../maptest.css">
	<script type="text/javascript" src="../maptest.js"></script>
	<script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhGHFO9pQBtVbE4YBzAxn-78HUiozJwpg&callback=initMap"></script>
</head>
<body>
	<table>
		<tr><td ondblclick="parent.contents('sight/contentsample.php_경복궁')" onclick="moveToDarwin(gyongbokkong)">경복궁</td></tr>
		<tr><td ondblclick="parent.contents('sight/dongdaemoon.php_동대문')" onclick="moveToDarwin(dongdaemoon)">동대문</td></tr>
		<tr><td ondblclick="parent.contents('sight/changduck.php_창덕궁')" onclick="moveToDarwin(changdeokkong)">창덕궁</td></tr>
		<tr><td ondblclick="parent.contents('sight/kwanghwa.php_광화문광장')" onclick="moveToDarwin(gwanghwa)">광화문 광장</td></tr>
		<tr><td ondblclick="parent.contents('sight/chunggye.php_청계천')" onclick="moveToDarwin(cheonggeycheon)">청계천</td></tr>
	</table>
	<div id="googlemap"></div>
</body>
</html>