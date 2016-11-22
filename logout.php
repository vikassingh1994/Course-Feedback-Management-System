<?php
session_start();
$_SESSION['currentuser']=NULL;
session_destroy();
header("location:start.php");
?>
