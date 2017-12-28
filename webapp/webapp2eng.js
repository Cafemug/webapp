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
        document.getElementById("leftnav").innerHTML = '<ul class="nav nav-pills flex-column"><li class="nav-item" onclick="menu(\'sight/sighteng.php\')"><a class="nav-link" href="#">Search Attraction <span class="sr-only">(current)</span></a></li><li class="nav-item" onclick="menu(\'sight/sight_topeng.php\')"><a class="nav-link" href="#">Attraction Top 5</a></li><li class="nav-item" onclick="menu(\'sight/courseeng.html\')"><a class="nav-link" href="#">Recommended Course</a></li></ul>';
    }
    else if(name=="food"){
        document.getElementById("leftnav").innerHTML = '<ul class="nav nav-pills flex-column"><li class="nav-item" onclick="menu(\'food/foodeng.php\')"><a class="nav-link" href="#">Food List <span class="sr-only">(current)</span></a></li><li class="nav-item" onclick="menu(\'food/food_topeng.php\')"><a class="nav-link" href="#">Food Top 5</a></li></ul>';
    }
    else if(name=="traffic"){
        document.getElementById("leftnav").innerHTML = '<ul class="nav nav-pills flex-column"><li class="nav-item" onclick="menu(\'traffic/taxieng.php\')"><a class="nav-link" href="#">Taxi <span class="sr-only">(current)</span></a></li><li class="nav-item" onclick="menu(\'traffic/buseng.php\')"><a class="nav-link" href="#">Bus</a></li><li class="nav-item" onclick="menu(\'traffic/subwayeng.php\')"><a class="nav-link" href="#">Subway</a></li><li class="nav-item" onclick="menu(\'traffic/ticketeng.php\')"><a class="nav-link" href="#">Ticket</a></li></ul>';
    }
}
function korean(){
    var form = document.createElement("form");
    form.setAttribute("charset", "UTF-8");
    form.setAttribute("method", "GET");
    form.setAttribute("action", "webappkor.php");
    document.body.appendChild(form);
    form.submit();
}