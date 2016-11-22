<?php
include("config.php");
	if($_POST['email']!=NULL && $_POST['sec_q']!=NULL && $_POST['roll']!=NULL)
	{
		$roll_no = $_POST['roll'];
		$email = $_POST['email'];
		$sq = $_POST['sec_q'];
		$sql = "SELECT sec_que,email,password FROM subject WHERE roll_no = '$roll_no'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result);
		if($email==$row['email'] && $sq==$row['sec_que'])
		{
			echo '<script type=text/javascript> alert("'.$row['password'].'")</script>';
		}
		else
			echo '<script type=text/javascript> alert("!!! Details not matched !!!")</script>';
	}
	else
	{
		header("Refresh: 0 ;URL=sAuth.php");
	}
?>
