<?php
session_start();
include("config.php");
	
      $myusername = $_POST['fausername'];
      $mypassword = $_POST['fapass']; 
      
      
      $sql = "SELECT id FROM admin WHERE id = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);
      
      
		
      if($count == 1) {
      $_SESSION['fauserid']=$myusername;
         header("location: faHome.php");
      }
      else
      {
      	echo '<script type=text/javascript> alert("Invalid Username or Password")</script>';
				header("Refresh: 0 ; URL=faAuth.php");
      }
	
?>
