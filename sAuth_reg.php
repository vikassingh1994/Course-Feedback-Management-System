<?php
include("config.php");

      $myusername = $_POST['name'];
	  $myroll = $_POST['roll'];
      $mypassword = $_POST['pass'];
	 $repass=$_POST['repass'];
      $email = $_POST['email'];
	  $dob = $_POST['dob'];
	  $father_name = $_POST['fname'];
	  $course = $_POST['course'];
	  $spec = $_POST['spec'];
	  $admission_year = $_POST['admission_year'];
	  $curr_sem = $_POST['curr_sem'];
	  $mob = $_POST['mob'];
	  $secq = $_POST['sec_q'];
	  $sq="select roll,password from student where roll='$myroll'";
	  $res=mysqli_query($db,$sq);
	  $row = mysqli_fetch_array($res);
       $count = mysqli_num_rows($res);
     if($mypassword==$repass) 
     { 
    		if($count == 1)
	 	{
	 	if($row['password']==NULL)
	 	 {
	 	 	$sql1 = "UPDATE student SET name='$myusername',password='$mypassword',email='$email', dob='$dob', father_name='$father_name', course='$course', specialization='$spec',semester='$curr_sem', admission_year='$admission_year', mobile='$mob' , sec_que ='$secq' where roll = '$myroll' " ;        
			 $result1 = mysqli_query($db,$sql1) or die("result me problerm ba");
			 if($result1)
			{
				echo '<script type=text/javascript> alert("Thank You.....You can login NOW.")</script>';
				header("Refresh: 0 ;URL=sAuth.php");
			}
			  else
				  echo "failed". $db->error;
	 	 }
	 	 else
	 	 {
	 	 	echo '<script type=text/javascript> alert("You are already registered!!!!!!....login NOW.")</script>';
	 	 	header("Refresh: 0 ;URL=sAuth.php");
	 	 }
	 }
	 else
	 {
	 	echo '<script type=text/javascript> alert("Not Enrolled. Please contact to Administrator")</script>';
	 	header("Refresh: 0 ;URL=sAuth.php");
	 }
	}
	else
	{
		echo '<script type=text/javascript> alert("Re-password should match with Passwords")</script>';
	 	header("Refresh: 0 ;URL=sAuth.php");
	}



?>
