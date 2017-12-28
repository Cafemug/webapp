function sight(sightname){
	var form = document.createElement("form");
	form.setAttribute("charset", "UTF-8");
	form.setAttribute("method", "GET");
	form.setAttribute("action", "sighteng.php");
	document.body.appendChild(form);
	var input = document.createElement("input");
	input.setAttribute("type","hidden");
	input.setAttribute("name","sight");
	input.setAttribute("value",sightname);
	form.appendChild(input);
	form.submit();
}
function fe_mapSelect(){
	var $container = $(".mapSelect");
	var $overImgae = $container.find("li");
	var $trigger = $container.find("area");
    document.getElementById('bo').style.height = "700px";
	$trigger.each(function(i){
		$(this).mouseenter(function(){
			$overImgae.hide();
			$overImgae.eq(i).show();
		});
	});
	$container.mouseleave(function(){
		$overImgae.hide();
	});
}
fe_mapSelect();