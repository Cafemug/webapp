<?php
 	session_start();

	$user_info =array("user1" => "pass", "user2" => "1234", "user3" => "asdf");
	if(isset($_REQUEST['id']) && isset($_REQUEST['pw'])){
	 if( $user_info[$_REQUEST['id']] === $_REQUEST['pw']){
           
	    $_SESSION['id']= $_REQUEST['id'];
            $_SESSION['login_time']= date('Y-m-d');

		echo "<script> alert('login success'); </script>";
		}
	 else{
		echo "<script> alert('login failed'); </script>";

	}
	

	echo '<meta http-equiv="refresh" content="0">';
}
	else{
	print_r($_SESSION);
	print_r($_COOKIE);
	echo "<br>";
	if( !isset( $_SESSION['id']) && !isset($_SESSION['login_time'])){

	

?>


<!doctype html>

<html>
<head></head>
<body>
	<form method =POST action =login.php>
		id <input type=text name = id> <br>
		pw <input type=password name= pw> <br>
		<input type=submit value=login>
	
	</form>
</body>
</html>


<?php
 }
 else{
  echo "already login! <br>";
  echo "<a href=logout.php> logout</a>";
 }
}
?>
