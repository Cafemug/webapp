<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
   
	<meta charset="utf-8">
	<title>SEOUL</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="webapp2eng.js" type="text/javascript"></script>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="web.css" rel="stylesheet">
    <script type="text/javascript" src="maptest.js"></script>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <span class="navbar-brand">Naturalboneidiots</span>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" onclick="callnav('attraction')" id="navattraction">Attraction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="callnav('food')" id="navfood">Food</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="callnav('traffic')" id="navtraffic">Traffic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="callnav('community')" href="http://cafemug.synology.me:8000/webapp/board/index.php" id="navcommunity">Community</a>
            </li>
          </ul>
          <div id="kor" onclick="korean()">
             한국어
                       </div>
          <div id="eng" onclick="english()">
            English
          </div>
        </div>
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar" id="leftnav">
          
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">

          <section class="row text-center placeholders">
          <iframe src="logo.html" name="main" scrolling="no" id="main" onload="resize()"></iframe>  
          </section>

          
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
