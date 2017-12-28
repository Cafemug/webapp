window.onload = function(){
	var a = document.getElementById("ko");
	a.onclick = korean;

	var b = document.getElementById("en");
	b.onclick = english;
};

function korean(){
	window.location.href("교통.html");
}

function english(){
	window.location.href("trans.html");
}