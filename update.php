<?php
	session_start();
	include ("config.php");
	if($_SESSION['fauserid']==NULL)
	{
		echo '<script type=text/javascript> alert("******LOGIN FIRST****")</script>';
		header('location:faAuth.php');
	}
	
	$sql =' update student set semester = semester+1 where course="MCA" and semester < "6" ';
	$result = mysqli_query($db,$sql) or die("query is not correct".mysqli_error($db));
	
	$sql =' update student set semester = semester+1 where course="M.Tech" and semester < "4" ';
	$result = mysqli_query($db,$sql) or die("query is not correct".mysqli_error($db));
	
	$sql =' update student set semester = semester+1 where course="B.Tech" and semester < "8" ';
	$result = mysqli_query($db,$sql) or die("query is not correct".mysqli_error($db));
	
	$sql =' update student set semester = semester+1 where course="Ph.D" and semester < "12" ';
	$result = mysqli_query($db,$sql) or die("query is not correct".mysqli_error($db));
	
	echo '<script type=text/javascript> alert("****** Semester Updated ****")</script>';
	header("Refresh: 0 ;URL=faHome.php");
?>


