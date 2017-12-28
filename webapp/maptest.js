var map;
var marker;
var gyongbokkong = {lat:37.578024, lng: 126.976891};
var dongdaemoon = {lat:37.5695682, lng:127.0091068};
var changdeokkong = {lat:37.579470, lng:126.991042};
var gwanghwa = {lat:37.574030, lng:126.976780};
var cheonggeycheon = {lat:37.571425, lng:127.024355};
var pig = {lat:37.575633, lng:126.971417};
var cold = {lat:37.563106, lng:127.006540};
var bul = {lat:37.524931, lng:127.032507};
var bibim = {lat:37.555402, lng:126.985352};
var gal = {lat:37.509970, lng:127.126204};
function initMap() {
	var cen = {lat:37.551903, lng:126.991726};
	map = new google.maps.Map(document.getElementById('googlemap'), {
		center : cen,
		zoom: 15
	});
	marker = new google.maps.Marker({
		position : cen,
		map: map
	});
}


function moveToDarwin(name){
	map.setCenter(name);
	marker.setPosition(name);
}