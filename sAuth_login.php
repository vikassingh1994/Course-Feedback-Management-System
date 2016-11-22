
<?php
session_start();
	include("config.php");
      $myusername = $_POST['sname'];
      $mypassword = $_POST['spass'];
      $sql = "SELECT * FROM student WHERE roll = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);
      if($count == 1) 
      {
      		$_SESSION['currentuser'] = $row['roll'] ;
      		//print_r($_SESSION);
      		header("Refresh: 0 ;URL=sPro.php");
      }
      else
      {
      	echo '<script type=text/javascript> alert("Invalid Username or Password")</script>';
		header("Refresh: 0 ;URL=sAuth.php");

      }


?>
