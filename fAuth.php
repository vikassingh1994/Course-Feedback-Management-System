<?php
session_start();
include ("config.php");
if(isset($_POST["fname"]))
{
      $myusername = $_POST['fname'];
	$_SESSION["fuser"]=$myusername;
      $mypassword = $_POST['fpass'];
	$_SESSION["fid"]=$myusername;
      $sql = "SELECT nitcuserid FROM faculty WHERE nitcuserid = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);
      if($count == 1) 
      {
	if($_SESSION["fuser"]!=NULL)
          echo '<script type=text/javascript>window.location="fHome.php"</script>';
         
      }
      else 
      {
          echo '<script type=text/javascript> alert("Invalid Username or Password")</script>';
		 header("Refresh: 0 ;URL=fAuth.php");
		 

      }
}
?>
<html>
<title>Faculty Advisor Login</title>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="login_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="login_effect.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	<style type="text/css">
		*{
			margin:0;
			padding:0;
		}
		body{
			font-family:calibri,sans-serif;
		}
		.background_wrap{
			position:fixed;
			z-index:-1000;
			height:100%;
			width:100%;
			overflow:hidden;
			top:0;
			left:0;
		}
		.video_bg{
			position:absolute;
			min-height:100%;
			min-width:100%;
			
		}
		.content{
			position:absolute;
			min-height:100%;
			width:100%;
			z-index:1000;
			background-color:rgba(0,0,0,0.7);
		}
		#content h1{
			text-align:center;
			font-size:40px;
			align:center;
			text-transform:uppercase;
			font-weight:500;
			color:#ffffff;
			padding-top:3;
			padding-bottom:1;
			
		}
		#content h3{
			text-align:center;
			font-size:30px;
			font-weight:500;
			color:#ffffff;
			padding-top:0;
			
		}
		#content h21{
			text-align:center;
			font-size:25px;
			font-weight:200;
			color:#EEE8AA;
			
		}
		#content h11{
			text-align:center;
			font-size:50px;
			font-weight:100;
			color:#FFFF00;
			
		}
		#menu{
			margin-left:100;
			width:40%;
			align:center;
			
			
		}
		
		
	</style>
</head>
<body>
<div class="background_wrap" style="position:absolute;height:30%;">
	<video  id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" width="100%" >
		<source src="myvideo1.mp4" type="video/mp4">
	</video>
</div>
<div id="content">
	
	<h1><a  style="text-decoration:none;color:white;"href="start.php" >Welcome to Feedback Management System</a></h1>
	<h3>National Institute of Technology, Calicut Kerala</h3>
	<a style="padding-left:50px;" href="start.php"><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-home"></span> Home</button> </a>
	<br><br>
	<h3 style="color:#008000;">Faculty Panel</h3><br>
	<center>
	<div id="menu">
	<form action="fAuth.php" method="POST">
		<ul class="nav nav-tabs">
		  <li><a data-toggle="tab" class="active" href="#log"><h4 style="font-size:15px; font-weight:800;color:#008000;">Login</h4></a></li>
		  <li><a data-toggle="tab" href="#reg"><h4 style="font-size:15px;font-weight:800;color:#008000;">Registration</h4></a></li>
		  <li><a data-toggle="tab" href="#fp"><h4 style="font-size:15px;font-weight:800;color:#008000;">Forget Password</h4></a></li>
		</ul>
		<div class="tab-content">
		<div id="log" class="tab-pane fade">
			<form >
				<br><br>
				<input type="email" class="form-control" name="fname" placeholder="Email ID" style="width:50%;text-align:center;font-size:20px;" required/><br>
				<input type="password" class="form-control" name="fpass" placeholder="Password"  style="width:50%;text-align:center;font-size:20px;" onfocus  required /><br><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
			</form>	
		</div>
     </form>
			<div id="reg" class="tab-pane fade">
				<form action="fAuth_reg.php" method="post" style="width:50%;">
				<br><br>
				<input type="text" class="form-control" name="name" placeholder="Full Name*" onfocus  maxlength="30" pattern="[A-Za-z/ ]{1,30}" style="text-align:center;font-size:20px;" required/><br>
				<input type="email" class="form-control" name="nitcuserid" placeholder="Email ID*" style="text-align:center;font-size:20px;" onfocus required/><br>
				<input type="password" class="form-control" name="password" placeholder="Password*" pattern="[A-Za-z0-9]{8,15}" maxlength="15" style="text-align:center;font-size:20px;" onfocus required/><br>
				<input type="password" class="form-control" name="repassword" placeholder="Re-enter Password*" pattern="[A-Za-z0-9]{8,15}" maxlength="15" style="text-align:center;font-size:20px;" onfocus required/><br>
				<input type="text" class="form-control" name="depart" placeholder="Department*" style="text-align:center;font-size:20px;" onfocus required/><br>
				<select name="spe1"class="form-control"   style="width: 100%;height:35px;font-size:18px; " onfocus required>
				   <?php

					     $result=array();
                              $sub = 'SELECT * FROM subject_list';
                              $subject = mysqli_query($db,$sub) or die('Could not look up user information; ' . mysqli_error($db));
					     while($row=$subject->fetch_assoc())
					     {
						     $result[]=$row;
					     }
					
					     $le=sizeof($result);
					     $le--;
					     //echo $le;
				     ?>
			           <option>Course 1 * </option>					 
					 <?php 
					 while($le>=0)
					 { ?>	
                         <option  value="<?php  echo $result[$le]['sub_code'];?>" > <?php echo $result[$le]['sub_name'].' ('.$result[$le]['sub_code'].')';?>
					</option>
					<?php $le--;}?> 
				</select><br>
				<select name="spe2"class="form-control"   style="width: 100%;height:35px;font-size:18px; text-align:center;" >
				   <?php

					     $result=array();
                              $sub = 'SELECT * FROM subject_list';
                              $subject = mysqli_query($db,$sub) or die('Could not look up user information; ' . mysqli_error($db));
					     while($row=$subject->fetch_assoc())
					     {
						     $result[]=$row;
					     }
					
					     $le=sizeof($result);
					     $le--;
					     //echo $le;
				     ?>
			           <option>Course 2 </option>					 
					 <?php 
					 while($le>=0)
					 { ?>	
                         <option  value="<?php  echo $result[$le]['sub_code'];?>" style="text-align:center;"> <?php echo $result[$le]['sub_name'].' ('.$result[$le]['sub_code'].')';?>
					</option>
					<?php $le--;}?> 
				</select><br>
				<select name="spe3"class="form-control"   style="width: 100%;height:35px;font-size:18px; " >
				   <?php

					     $result=array();
                              $sub = 'SELECT * FROM subject_list';
                              $subject = mysqli_query($db,$sub) or die('Could not look up user information; ' . mysqli_error($db));
					     while($row=$subject->fetch_assoc())
					     {
						     $result[]=$row;
					     }
					
					     $le=sizeof($result);
					     $le--;
					     //echo $le;
				     ?>
			           <option>Course 3 </option>					 
					 <?php 
					 while($le>=0)
					 { ?>	
                         <option  value="<?php  echo $result[$le]['sub_code'];?>" style="text-align:center;"> <?php echo $result[$le]['sub_name'].' ('.$result[$le]['sub_code'].')';?>
					</option>
					<?php $le--;}?> 
				</select><br>
				<input type="text" class="form-control" name="mob" placeholder="Mobile No.*" pattern="[789][0-9]{9}" maxlength="10" style="text-align:center;font-size:20px;" onfocus required/><br>
				<input type="text" class="form-control" name="sq" placeholder="Mother's maiden name*" pattern="[A-Za-z]{1,50}" maxlength="10" style="text-align:center;font-size:20px;" onfocus required/><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit"><br><br>
			</form>
		</div>
		<div id="fp" class="tab-pane fade">
			<form action="fAuth.php" method="post" style="width:50%;">
				<br><br>
				<input type="email" class="form-control" name="e" placeholder="Email"  style="text-align:center;font-size:20px;" /><br>
				<input type="text" class="form-control" name="s" placeholder="Mother's Maiden name" pattern="[A-Za-z]{1,30}" style="text-align:center;font-size:20px;" /><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
			</form>
		</div>
		
		</div>
		</div>
	</center>	
</div>

</body>


</html>
<?php
	if(isset($_POST['e']))
	{
		$email=$_POST['e'];
		$s1=$_POST['s'];


		$sql="select sec_que,password from faculty where nitcuserid='$email'";
		$q=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($q);
		//print_r($row);
		 

		if($row['sec_que']==$s1)
		{
			echo '<script type=text/javascript> alert("Your Password is : '.$row['password'].' ")</script>';
				header("Refresh: 0 ;URL=fAuth.php");

		}
		else
		{
			echo '<script type=text/javascript> alert("Wrong credentials")</script>';
				header("Refresh: 0 ;URL=fAuth.php");
		}


	}

?>



