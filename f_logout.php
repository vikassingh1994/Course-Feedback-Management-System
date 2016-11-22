<?php
session_start();
$_SESSION['fuser']=NULL;
session_destroy();
header("location:fAuth.php");
?>
