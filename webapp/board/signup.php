<?php
include 'db.php';
$user_id=$_POST['user_id'];
$user_pw=$_POST['user_pw'];
$email=$_POST['email'];

if( $user_id !='' && $user_pw !='' & $email!=''){

 //duplication check

 $sql="SELECT * FROM user WHERE user_id='{$user_id}'";
 $resource = mysql_query($sql);
 $num= mysql_num_rows($resource);

 // echo "number of rows: $num";

 if($num > 0){
 echo "<script> alert('already user'); </script>";
 echo "<script> window.history.back(); </script>";
 exit(0);
 }
 $sql= "INSERT INTO user(user_id,user_pw,email) VALUE('{$user_id}',md5('{$user_pw}'),'{$email}')";
 $ret= mysql_query($sql);
 if($ret){
 echo "<script> alert('success'); </script>";
 echo "<meta http-equiv='refresh' content=\"0;url='http://cafemug.synology.me:8000/webapp/board/index.php'\">";
 exit(0); 
 }else{
 die('MySQL select ERROR:'.mysql_error());

 }

}else{

?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <title>  õêÍ∞ ûÖ</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin", method=POST >
        <h2 class="form-signin-heading">Please sign up</h2>
	
        <input type="text"  name=user_id class="form-control" placeholder="User ID" required autofocus>

	<input type="password" name=user_pw class="form-control" placeholder="Password" required>
        <input type="email" name= email class="form-control" placeholder="Email address" required >
     	<!--<a herf=#>
	  <button type="button" class="btn btn-xs btn-link">Check ID</button>
	</a>
	-->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      </form>

    </div> <!-- /container -->


    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php
}
?>
