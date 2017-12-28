<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="sight.css">
</head>
<body id=bo>
	<script type="text/javascript" src="seoulmap/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="seoulmap/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="seoulmap/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="seoulmap/jquery.cycle2.swipe.min.js"></script>
	<script type="text/javascript" src="seoulmap/master.js"></script>
	<script type="text/javascript" src="seoulmap/common.js"></script>
	<script type="text/javascript" src="sight.js"></script>
	<div class="map_area" id="map1">	
		<div class="mapSelect">
			<ul>
				<li class="map1" style="display: none;"><img src="seoulmap/seoul1.png" alt="강서구" style="width: 450px;height: 300px;"></li>
				<li class="map2" style="display: none;"><img src="seoulmap/seoul2.png" alt="양천구" style="width: 450px;height: 300px;"></li>
				<li class="map3" style="display: none;"><img src="seoulmap/seoul3.png" alt="구로구" style="width: 450px;height: 300px;"></li>
				<li class="map4" style="display: none;"><img src="seoulmap/seoul4.png" alt="영등포구" style="width: 450px;height: 300px;"></li>
				<li class="map5" style="display: none;"><img src="seoulmap/seoul5.png" alt="동작구" style="width: 450px;height: 300px;"></li>
				<li class="map6" style="display: none;"><img src="seoulmap/seoul6.png" alt="관악구" style="width: 450px;height: 300px;"></li>
				<li class="map7" style="display: none;"><img src="seoulmap/seoul7.png" alt="금천구" style="width: 450px;height: 300px;"></li>
				<li class="map8" style="display: none;"><img src="seoulmap/seoul8.png" alt="서초구" style="width: 450px;height: 300px;"></li>
				<li class="map9" style="display: none;"><img src="seoulmap/seoul9.png" alt="강남구" style="width: 450px;height: 300px;"></li>
				<li class="map10" style="display: none;"><img src="seoulmap/seoul10.png" alt="송파구" style="width: 450px;height: 300px;"></li>
				<li class="map11" style="display: none;"><img src="seoulmap/seoul11.png" alt="강동구" style="width: 450px;height: 300px;"></li>
				<li class="map12" style="display: none;"><img src="seoulmap/seoul12.png" alt="마포구" style="width: 450px;height: 300px;"></li>
				<li class="map13" style="display: none;"><img src="seoulmap/seoul13.png" alt="서대문구" style="width: 450px;height: 300px;"></li>
				<li class="map14" style="display: none;"><img src="seoulmap/seoul14.png" alt="은평구" style="width: 450px;height: 300px;"></li>
				<li class="map15" style="display: none;"><img src="seoulmap/seoul15.png" alt="용산구" style="width: 450px;height: 300px;"></li>
				<li class="map16" style="display: none;"><img src="seoulmap/seoul16.png" alt="중구" style="width: 450px;height: 300px;"></li>
				<li class="map17" style="display: none;"><img src="seoulmap/seoul17.png" alt="종로구" style="width: 450px;height: 300px;"></li>
				<li class="map18" style="display: none;"><img src="seoulmap/seoul18.png" alt="성북구" style="width: 450px;height: 300px;"></li>
				<li class="map19" style="display: none;"><img src="seoulmap/seoul19.png" alt="강북구" style="width: 450px;height: 300px;"></li>
				<li class="map20" style="display: none;"><img src="seoulmap/seoul20.png" alt="도봉구" style="width: 450px;height: 300px;"></li>
				<li class="map21" style="display: none;"><img src="seoulmap/seoul21.png" alt="성동구" style="width: 450px;height: 300px;"></li>
				<li class="map22" style="display: none;"><img src="seoulmap/seoul22.png" alt="동대문구" style="width: 450px;height: 300px;"></li>
				<li class="map23" style="display: none;"><img src="seoulmap/seoul23.png" alt="광진구" style="width: 450px;height: 300px;"></li>
				<li class="map24" style="display: none;"><img src="seoulmap/seoul24.png" alt="중랑구" style="width: 450px;height: 300px;"></li>
				<li class="map25" style="display: none;"><img src="seoulmap/seoul25.png" alt="노원구" style="width: 450px;height: 300px;"></li>
			</ul>
			<img src="seoulmap/img_map_area.gif" alt="" usemap="#Map" class="imgMap" border="0" width="450px" height="300px">
			<map name="Map" id="Map">
				<area shape="poly" coords="43,108,110,154,105,162,102,180,84,186,73,165,10,160" title="강천구" onclick="sight('sight.txt')">
				<area shape="poly" coords="70,170,67,206,80,211,120,200,130,180,111,168,110,187,81,194" title="양천구" onclick="sight('sight.txt')">
				<area shape="poly" coords="67,213,65,240,81,240,111,225,140,238,126,206,118,216" title="구로구" onclick="sight('sight.txt')">
				<area shape="poly" coords="127,165,136,184,128,198,139,208,150,231,165,219,173,201,192,199,192,188" title="영등포구" onclick="sight('sight.txt')">
				<area shape="poly" coords="194,204,175,207,168,220,156,233,181,225,213,225,218,242,230,244,232,221" title="동작구" onclick="sight('sight.txt')">
				<area shape="poly" coords="155,239,163,263,181,273,188,285,208,285,220,267,237,263,230,251,215,248,207,233" title="관악구" onclick="sight('sight.txt')">
				<area shape="poly" coords="120,237,149,286,170,276,156,269,152,245" title="금천구" onclick="sight('sight.txt')">
				<area shape="poly" coords="239,220,236,244,241,260,258,254,264,265,286,257,295,283,324,293,326,277,344,278,348,267,337,252,304,259,296,241,282,238,263,200" title="서초구" onclick="sight('sight.txt')">
				<area shape="poly" coords="272,192,289,232,300,237,305,254,334,245,344,245,354,263,379,257,360,231,323,218,319,202" title="강남구" onclick="sight('sight.txt')">
				<area shape="poly" coords="326,202,328,214,362,225,386,256,418,224,402,218,401,205,379,193,380,179" title="송파구" onclick="sight('sight.txt')">
				<area shape="poly" coords="380,156,374,173,385,175,384,190,402,197,421,172,443,170,440,136," title="강동구" onclick="sight('sight.txt')">
				<area shape="poly" coords="103,141,199,178,209,157,182,162,127,124" title="마포구" onclick="sight('sight.txt')">
				<area shape="poly" coords="152,135,184,156,214,151,203,139,200,107,173,130,158,127" title="서대문구" onclick="sight('sight.txt')">
				<area shape="poly" coords="135,123,149,132,157,122,170,126,195,99,197,82,208,74,205,56,194,51,163,67,147,122" title="은평구" onclick="sight('sight.txt')">
				<area shape="poly" coords="217,165,206,183,207,201,233,208,267,183,257,171" title="용산구" onclick="sight('sight.txt')">
				<area shape="poly" coords="222,147,218,159,262,164,274,145" title="중구" onclick="sight('sight.txt')">
				<area shape="poly" coords="201,86,217,143,274,140,258,136,250,125,225,115,235,105,222,79" title="종로구" onclick="sight('sight.txt')">
				<area shape="poly" coords="233,76,240,106,233,115,255,120,262,132,274,132,296,113,324,102,326,96,313,95,306,89,289,102,263,98,259,87" title="성북구" onclick="sight('sight.txt')">
				<area shape="poly" coords="239,67,265,85,268,94,290,97,300,84,268,60,262,51,268,35,254,23,246,42,235,51" title="강북구" onclick="sight('sight.txt')">
				<area shape="poly" coords="267,5,302,17,308,58,294,75,281,57,269,54,274,29,263,21" title="도봉구" onclick="sight('sight.txt')">
				<area shape="poly" coords="284,146,265,173,310,182,326,158," title="성동구" onclick="sight('sight.txt')">
				<area shape="poly" coords="281,139,328,150,331,139,323,121,325,107" title="동대문구" onclick="sight('sight.txt')">
				<area shape="poly" coords="336,146,315,187,343,189,367,164,358,160,359,145" title="광진구" onclick="sight('sight.txt')">
				<area shape="poly" coords="330,96,338,140,358,139,370,119,374,93" title="중랑구" onclick="sight('sight.txt')">
				<area shape="poly" coords="311,17,313,70,306,67,303,78,322,91,363,86,370,69,350,65,350,19,329,10" title="노원구" onclick="sight('sight.txt')">
			</map>
		</div>
		<script>
			fe_mapSelect();
		</script>
	</div>
	<?php
		$filename = $_GET["sight"];
		$filetext = file_get_contents($filename);
		echo $filetext;
	?>
</body>
</html>