var map;
var gyongbokkong = {lat:37.578024, lng:126.976891};
var changgyeongkong = {lat:37.578722, lng:126.995249};
var changdeokkong = {lat:37.579470, lng:126.991042};
var line = [
	{lat:37.578722, lng:126.995249},
	{lat:37.579470, lng:126.991042},
	{lat:37.577388, lng:126.989658},
	{lat:37.577232, lng:126.987230},
	{lat:37.575481, lng:126.982855},
	{lat:37.575764, lng:126.976918}, 
	{lat:37.578024, lng:126.976891}];





function initMap() {
	var cen = {lat:37.577739, lng: 126.984484};
	map = new google.maps.Map(document.getElementById('googlemap'), {
		center : cen,
		zoom: 14
	});
	var marker1 = new google.maps.Marker({
		position : gyongbokkong,
		map: map
	});
	var marker2 = new google.maps.Marker({
		position : changdeokkong,
		map: map
	});
	var marker3 = new google.maps.Marker({
		position : changgyeongkong,
		map: map
	});
	
	var bulidline = new google.maps.Polyline({
		path: line,
		geodesic : true,
		strokeColor : '#FF0000',
		strokeOpacity : 1.0,
		strokeWeight : 2
	});
	
	bulidline.setMap(map);
}
