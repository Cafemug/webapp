function menu(menuname) {
    var form = document.createElement("form");
    form.setAttribute("charset", "UTF-8");
    form.setAttribute("method", "GET");
    form.setAttribute("action", menuname);
    form.setAttribute("target", "main");
    form.setAttribute("id", "submit");
    document.body.appendChild(form);
    form.submit();
}

function contents(contentsname) {
    var str = contentsname.split("_");
    var form = document.createElement("form");
    form.setAttribute("charset", "UTF-8");
    form.setAttribute("method", "GET");
    form.setAttribute("action", str[0]);
    form.setAttribute("target", "main");
    var input = document.createElement("input");
    input.setAttribute("type","hidden");
    input.setAttribute("name","contents_name");
    input.setAttribute("value",str[1]);
    form.appendChild(input);
    document.body.appendChild(form);
    form.submit();
}
function resize() {
    document.getElementById('main').style.height = "400px";
    document.getElementById('main').style.height = document.getElementById("main").contentWindow.document.body.scrollHeight + 150 + "px";
    window.scrollTo(0, 0);
}
function callnav(name){
    if(name=="attraction"){
        document.getElementById("leftnav").innerHTML = '<ul class="nav nav-pills flex-column"><li class="nav-item" onclick="menu(\'sight/sight.php\')"><a class="nav-link" href="#">명소 찾기 <span class="sr-only">(current)</span></a></li><li class="nav-item" onclick="menu(\'sight/sight_top.php\')"><a class="nav-link" href="#">명소 Top 5</a></li><li class="nav-item" onclick="menu(\'sight/course.html\')"><a class="nav-link" href="#">추천 코스</a></li></ul>';
    }
    else if(name=="food"){
        document.getElementById("leftnav").innerHTML = '<ul class="nav nav-pills flex-column"><li class="nav-item" onclick="menu(\'food/food.php\')"><a class="nav-link" href="#">음식 리스트 <span class="sr-only">(current)</span></a></li><li class="nav-item" onclick="menu(\'food/food_top.php\')"><a class="nav-link" href="#">음식 Top 5</a></li></ul>';
    }
    else if(name=="traffic"){
        document.getElementById("leftnav").innerHTML = '<ul class="nav nav-pills flex-column"><li class="nav-item" onclick="menu(\'traffic/taxi.php\')"><a class="nav-link" href="#">택시 <span class="sr-only">(current)</span></a></li><li class="nav-item" onclick="menu(\'traffic/bus.php\')"><a class="nav-link" href="#">버스</a></li><li class="nav-item" onclick="menu(\'traffic/subway.php\')"><a class="nav-link" href="#">지하철</a></li><li class="nav-item" onclick="menu(\'traffic/ticket.php\')"><a class="nav-link" href="#">티켓</a></li></ul>';
    }
}
function english(){
    var form = document.createElement("form");
    form.setAttribute("charset", "UTF-8");
    form.setAttribute("method", "GET");
    form.setAttribute("action", "webappeng.php");
    document.body.appendChild(form);
    form.submit();
}