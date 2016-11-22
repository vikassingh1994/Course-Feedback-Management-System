<?php
define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'm140384ca');
   define('DB_PASSWORD', 'm140384ca');
   define('DB_DATABASE', 'db_m140384ca');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("failed in coonection");
   
?>
