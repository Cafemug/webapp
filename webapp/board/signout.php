<?php
include 'db.php';
session_start();

$id= $_SESSION['user_id'];


?>
<script>
var res=confirm("로그아웃 하시겠습니까?");
if(res){
<?php
$sql= "delete from session where user_id='{$id}'";
$ret = mysql_query($sql);

$_SESSION['is_login']=0; 
setcookie(session_name(), '',time()-999999999999);
session_destroy();
echo "<script> alert('로그 아웃이 되었습니다. '); </script>";
?>
<meta http-equiv='refresh' content="0;url='http://cafemug.synology.me:8000/webapp/board/index.php'"> 
}

else{

<meta http-equiv='refresh' content="0;url='http://cafemug.synology.me:8000/webapp/board/index.php'">



</script>
