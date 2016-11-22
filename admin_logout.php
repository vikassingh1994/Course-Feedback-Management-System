<?php
session_start();
$_SESSION['fauserid']=NULL;
session_destroy();
header('location:faAuth.php');

?>
