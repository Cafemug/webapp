<?php
include 'db.php';
date_default_timezone_set("Asia/Seoul");

session_start();
$title=$_POST['title'];
$main=$_POST['text'];
$user_id=$_SESSION['user_id'];
$now=date("Y-m-d A h:i:s");
$sql="insert into board(title,user_id,time,text) value('{$title}','{$user_id}','{$now}','{$main}')";
$ret=mysql_query($sql);
if ($ret){
echo "<script> alert('write success!'); </script>";
?>


<meta http-equiv='refresh' content="0;url='http://cafemug.synology.me:8000/webapp/board/index.php'">



<?php
}else{
echo "<script> alert('write failed !'); </script>";


?>
<meta http-equiv='refresh' content="0;url='http://cafemug.synology.me:8000/write.php'">
<?php
}
?>
