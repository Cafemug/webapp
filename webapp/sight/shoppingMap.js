var map;
var ssamjigil = {lat:37.574216, lng:126.984575};
var dongdeamun = {lat:37.570936, lng:127.009300};
var line = [
	{lat:37.574216, lng:126.984575},
	{lat:37.572938, lng:126.986239},
	{lat:37.572258, lng:126.984350},
	{lat:37.571408, lng:126.984597},
	{lat:37.570149, lng:126.984029},
	{lat:37.570957, lng:127.002675},
	{lat:37.570404, lng:127.002734},
	{lat:37.570243, lng:127.005599},
	{lat:37.570374, lng:127.006747},
	{lat:37.570936, lng:127.009300}];





function initMap() {
	var cen = {lat:37.570488, lng:126.995428};
	map = new google.maps.Map(document.getElementById('googlemap'), {
		center : cen,
		zoom: 14
	});
	var marker1 = new google.maps.Marker({
		position : ssamjigil,
		map: map
	});
	var marker2 = new google.maps.Marker({
		position : dongdeamun,
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
