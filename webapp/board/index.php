<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>게시판 메인 페이지 </title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href =# >Main page</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
<?php
 if( !isset($_SESSION['is_login']) || $_SESSION['is_login'] !=1){
?>
       
	 <form class="navbar-form navbar-right">
            <a href="http://cafemug.synology.me:8000/webapp/board/signup.php" target="_blank" title="로그인" >
            <button type="button" class="btn btn-success">Sign up</button>

            </a>

         </form>
        <form class="navbar-form navbar-right" method=POST action="signin.php" >
            <div class="form-group">
              <input type="text" name= user_id placeholder="Id" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name = user_pw placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
	</form>
<?php
} else{
?>
<style>

#main_nav { 
             position: relative; 
             margin-top: 6px ;
	     margin-right: 5px;  
      } 
</style>
	<form class="navbar-form navbar-right" method=POST action="signout.php">

            <button type="submit" class="btn btn-success">Log out</button>
        </form>

	<form class="navbar-form navbar-right">
	<nav id="main_nav">
	<font size=4 color =#9d9d9d>
<?php
 echo "{$_SESSION['user_id']}님 ";
?> 
	</font>
	</nav>
	</form>
 
<?php
}
?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, Seoul!</h1>
        <p></p>
        
      </div>
    </div>

    <div class="container">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> 번호  </th>
                  <th> 게시글 제목 </th>
                  <th> 작성자 </th>
                  <th> 작성시간 </th>
 </th>
                </tr>
              </thead>
              <tbody>

<?php

$sql = "SELECT no from board  ";
$rek= mysql_query($sql);
$count=mysql_num_rows($rek);
while( $count>=0){
$sql = "SELECT * from board where no= $count ";
$ret= mysql_query($sql);
$lens=ceil($count/10);
if($count%10){$lens++;}
if($ret){
$res = mysql_fetch_row($ret);
$_GET=$res;

?>
<tr>
<?php
 $i=0;
 while($i<4){
 

?>
 <td>
<?php
if($i==1){

print "<a href=http://cafemug.synology.me:8000/webapp/board/board.php?no={$res[0]}>";
?>
<?php
 echo $res[$i];
?>
</a>
<?php
}else{
 echo $res[$i];
}
?>
 </td>
<?php
$i++; }
}
?>
</tr>
<?php

$count--;}


?>
<tr>
<td colspan= 4 align=center> 
<?php 
$lens 
?>
</td>
</tr>
              </tbody>
            </table>
	<form class="navbar-form navbar-right" metho="POST" action="write.php" >
	  <button type="submit" class="btn btn-info">글쓰기</button>
	</form>

      <footer>
        <p>&copy; Made by Naturalboneidiots</p>
      </footer>
    </div> <!-- /container -->

  </body>
</html>

