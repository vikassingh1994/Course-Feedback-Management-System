<?php
	include("config.php");
	if(($_POST['email']!=NULL) && ($_POST['sec_que']!=NULL) && ($_POST['roll']!=NULL))
	{
		$ro = "'".$_POST['roll']."'";
		$ema = $_POST['email'];
		$sq = $_POST['sec_que'];
		$sql = "SELECT sec_que,email,password FROM student WHERE roll= $ro";
		$result = mysqli_query($db,$sql) ;
		$row = mysqli_fetch_array($result);
		if(($ema == $row['email']) && ($sq == $row['sec_que']))
		{
			echo '<script type=text/javascript> alert("Your Password is : '.$row['password'].'")</script>';
		}
		else
			echo '<script type=text/javascript> alert("!!! Details not matched Plzzzzzzz Try again !!!")</script>';
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
			font-weight:800;
			color:#ffffff;
			padding-top:3;
			
		}
		#content h3{
			text-align:center;
			font-size:28px;
			font-weight:500;
			color:#ffffff;
			
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
		#content form{
			width:45%;
			align:center;
			height:100%;
			
		}
	     input[type=text],input[type=password],input[type=email],input[type=date],input[type=number]
	     {
                        width: 50%;
                        text-align:center;
                        font-size:20px;
              }
		     
		
	</style>
</head>
<body>
<div class="background_wrap" style="height:32%;position:absolute;">
	<video  id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" width="100%">
		<source src="myvideo1.mp4" type="video/mp4">
	</video>
</div>
<div id="content">
	
	<h1><a href="start.php" style="text-decoration:none;color:white;">Welcome to Feedback Management System</a></h1>
	<h3>National Institute of Technology, Calicut Kerala</h3>
	<a style="padding-left:50px;" href="start.php"><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-home"></span> Home</button> </a>
	<br><br>
	<h3 style="color:#008000;padding-top:50px;">Student Panel</h3><br>
	<center>
	<form  action="sAuth_login.php" method="post">
		<ul class="nav nav-tabs">
		  <li><a data-toggle="tab" class="active" href="#log"><h4 style="font-size:15px; font-weight:800;color:#008000;">Login</h4></a></li>
		  <li><a data-toggle="tab" href="#reg"><h4 style="font-size:15px;font-weight:800;color:#008000;">Registration</h4></a></li>
		  <li><a data-toggle="tab" href="#fp"><h4 style="font-size:15px;font-weight:800;color:#008000;">Forget Password</h4></a></li>
		</ul>
		<div class="tab-content">
		<div id="log" class="tab-pane fade in active">
			<form style="width:50%;" >
				<br><br>
				<input type="text" class="form-control" name="sname" placeholder="User Name"  pattern=[A-Za-z][0-9][0-9][0-9][0-9][0-9][0-9][A-za-z]{2} maxlength="9" required/><br>
				<input type="password" class="form-control" name="spass" placeholder="Password" maxlength="15" required /><br><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
			</form>
		</div>
	</form>
			<div id="reg" class="tab-pane fade">
				<form action="sAuth_reg.php" method="post" style="height:100%;width:100%;"  >
				<br><br>
				<input type="text" class="form-control" name="name" placeholder="Full Name *" onfocus maxlength="30" pattern="[A-Za-z/ ]{1,30}"  required autofocus/><br>
				<input type="text" class="form-control" name="roll"  placeholder="Roll Number *"  pattern=[A-Za-z][0-9][0-9][0-9][0-9][0-9][0-9][A-za-z]{2} maxlength="9" onfocus required/><br>
				<input type="password" class="form-control" name="pass" placeholder="Password *" pattern=[A-Za-z0-9]{8,15} maxlength="15" onfocus required/><br>
				<input type="password" class="form-control" name="repass" placeholder="Re-Enter Password *" pattern=[A-Za-z0-9]{8,15} maxlength="15" onfocus required/><br>
				<input type="email" class="form-control" name="email" placeholder="Email *"  required/><br>
				<input type="text" class="form-control" name="dob" placeholder="DoB(yyyy-mm-dd) *"  pattern="[12][0-9][0-9][0-9][-][01][0-9][-][0123][0-9]" onfocus required/><br>
				<input type="text" class="form-control" name="fname" placeholder="Father's name *" onfocus maxlength="30" pattern="[A-Za-z/ ]{1,30}" required/><br>
               <input type="text" class="form-control" name="sec_q" placeholder="Name of your favorite childhood friend?*" style="font-size:17px;" onfocus maxlength="30" pattern="[A-Za-z/ ]{1,30}" required/><br>
               
                      <select name="course" class="custom-select"   style="text-align:center; width: 50%; height:40px;font-size:20px;">
				  <option  selected>Select Course *</option>
				  <option  value="B.Tech">B.Tech</option>
                       <option value="MCA">MCA</option> 				
				   <option value="M.Tech">M.Tech</option>
				   <option value="Ph.D">Ph.D</option>
				</select><br><br>
				
				<input type="text" class="form-control" name="spec" placeholder="Specialization" onfocus maxlength="50" pattern="[A-Za-z/ ]{1,30}" style="text-align:center;font-size:20px;" /><br>
				
                   <select name="admission_year" class="custom-select"   style="text-align:center; width: 50%;height:40px;font-size:20px;">
				  <option selected>     Admission Year *</option>
				  <option value="1990">1990</option>
				  <option value="1991">1991</option>
				  <option value="1992">1992</option>
				  <option value="1993">1993</option>
				  <option value="1994">1994</option>
				  <option value="1995">1995</option>
				  <option value="1996">1996</option>
				  <option value="1997">1997</option>
				  <option value="1998">1998</option>
				  <option value="1999">1999</option>
				  <option value="2000">2000</option>
				  <option value="2001">2001</option>
				  <option value="2002">2002</option>
				  <option value="2003">2003</option>
				  <option value="2004">2004</option>
				  <option value="2005">2005</option>
				  <option value="2006">2006</option>
				  <option value="2005">2005</option>
				   <option value="2006">2006</option>
                       <option value="2007">2007</option> 				
				   <option value="2008">2008</option>
				   <option value="2009">2009</option>
				   <option value="2010">2010</option>
				   <option value="2011">2011</option>
				   <option value="2012">2012</option>
				   <option value="2013">2013</option>
				   <option value="2014">2014</option>
				   <option value="2015">2015</option>
				   <option value="2016">2016</option>
				   <option value="2017">2017</option>
				   <option value="2018">2018</option>
				   <option value="2019">2019</option>
				   <option value="2020">2020</option>
				   <option value="2021">2021</option>
				   <option value="2022">2022</option>
				   <option value="2023">2023</option>
				   <option value="2024">2024</option>
				   <option value="2025">2025</option>
				</select><br><br>
				
				<select name="curr_sem"class="custom-select"   style="text-align:center; width: 50%;height:40px;font-size:20px;">
				  <option selected>Current Semester *</option>
				  <option value="1">I</option>
                      <option value="2">II</option> 				
				   <option value="3">III</option>
				   <option value="4">IV</option>
				   <option value="5">V</option>
				   <option value="6">VI</option>
				   <option value="7">VII</option>
				   <option value="8">VIII</option>
				</select><br><br>
				
				<input type="text" class="form-control" name="mob" placeholder="Mobile Number *" onfocus maxlength="10" pattern="[789][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required/><br>
				
				<input type="submit" class="btn btn-info btn-lg" value="Submit"><br><br>
			</form>	
		</div>
		<div id="fp" class="tab-pane fade">
			<form action="sAuth.php" style="width:100%;" method="POST">
				<br><br>
				<input type="text" class="form-control" name="roll" placeholder="Roll No *" style="text-align:center;font-size:18px;" required/><br>
				<input type="email" class="form-control" name="email" placeholder="Email *" style="text-align:center;font-size:18px;" required/><br>
				<input type="text" class="form-control" name="sec_que" placeholder="favorite childhood friend?*" style="font-size:18px;" onfocus maxlength="30" pattern="[A-Za-z/ ]{1,30}" required/><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit"><br><br>
			</form>
		</div>
		
		</div>
	
	</center>	
</div>
	
	
</div>

</body>

</html>

