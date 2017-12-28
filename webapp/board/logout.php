<?php

 session_start();
 session_destroy();
 
 setcookie( session_name(), '',time()-9999999999999,'');
?>

<meta http-equiv="refresh" content="0;url=http://cafemug.synology.me:8000/webapp/board/login.php">

