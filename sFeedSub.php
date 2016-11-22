<?php
	session_start();
	include("config.php");
	if($_SESSION['currentuser'] != NULL)
	{
		$sname = $_SESSION['name'];
		$s_roll = $_SESSION['currentuser'];
		$subject = $_SESSION['sub'];
		$sem = $_SESSION['sem'];
		$tname = $_SESSION['teacher_id'];
		$answer = $_POST['ans'];
		if (isset($_POST['submit']))
		{
			$query2 = "SELECT stud_roll,nitcuserid,subject FROM student_feedback where stud_roll='$s_roll' and nitcuserid='$tname' and subject='$subject' and semester='$sem'";
			$result2 = mysqli_query($db, $query2);
			$count2 =mysqli_num_rows($result2);
			if($count2 == 0)
			{
				$quer='INSERT INTO student_feedback(stud_roll,nitcuserid,subject,semester) VALUES("'.$s_roll.'","'.$tname.'","'.$subject.'","'.$sem.'")';
				$res=$db->query($quer);
				for($i=1;$i<=sizeof($answer);$i++)
				{	
					$temp = $answer[$i];
					$query='Update student_feedback set q'.$i.'="'.$temp.'" where stud_roll="'.$s_roll.'"';
					$result = mysqli_query($db, $query) or die("error in result".mysqli_error($db));
				}
				echo '<script type=text/javascript> alert("......Thanks for feedback.............")</script>';
				 header("Refresh: 0 ;URL=sPro.php");
			}
			else
			{
				echo '<script type=text/javascript> alert("!!!YOU HAVE ALREADY SUBMITTED YOUR FEEDBACK FOR THIS FACULTY CHOOSE ANOTHER ONE!!!!!!")</script>';
				 header("Refresh: 0 ;URL=sPro.php");
			}
		}
	}
	else
	{
		echo '<script type=text/javascript> alert(".....Plzzzz... Login First......")</script>';
			 header("Refresh: 0 ;URL=sAuth.php");
	}
?>

