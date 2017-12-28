<?php
$db=mysql_connect('192.168.219.101:3307','root','j.8750116');
if( !$db ){
 die('MySQL connect ERROR:' .mysql_error());

}
$ret= mysql_select_db('webapp',$db);
if( !$ret){
 die('MySQL select ERROR:'.mysql_error());
 }

?>
