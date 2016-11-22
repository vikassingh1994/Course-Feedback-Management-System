<?php
session_start();
//print_r($_SESSION);
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
			font-size:30px;
			font-weight:900;
			color:#ffffff;
			
		}
		#content h5{
			text-align:center;
			font-size:20px;
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
		#content center mainform{
			width:40%;
			align:center;
			height:50%;
			
		}
		
		
	</style>
</head>
<body>
<div class="background_wrap" style="width:100%;height:30%;">
	<video  id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" width="100%" >
		<source src="myvideo1.mp4" type="video/mp4">
	</video>
</div>
<div id="content">
	
	<h1><a  style="text-decoration:none;color:white;"href="start.php" >Welcome to Feedback Management System</a></h1>
	<h3>National Institute of Technology, Calicut Kerala</h3>
	
<a style="padding-left:50px;" href="start.php"><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-home"></span> Home</button> </a>
	<br><br>
	<h3 style="color:#008000;">Admin Panel</h3>
	<br>
	
	<center>
	<div id="mainform" style="width:25%">
		<ul class="nav nav-tabs">
		  <li><a data-toggle="tab" class="active" href="#log"><h4 style="font-size:15px; font-weight:800;color:#008000;">Login</h4></a></li>
		  
		  <li><a data-toggle="tab" href="#fp"><h4 style="font-size:15px;font-weight:800;color:#008000;">Forget Password</h4></a></li>
		</ul>
		<div class="tab-content">
		<div id="log" class="tab-pane fade in active">
			<form action="faAuth_login.php" method="post" style="width:70%" >
				<br><br>
				<input type="text" class="form-control" name="fausername" maxlength="10"placeholder="User Name" style="text-align:center;font-size:20px;" required/><br>
	               <input type="password" class="form-control" name="fapass" maxlength="15" placeholder="Password" style="text-align:center;font-size:20px;" required /><br><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
			</form>
		</div>
		
			
		<div id="fp" class="tab-pane fade">
			<form action="" method="post"  style="width:70%">
				<br><br>
				<input type="text" class="form-control" id="username" maxlength="10" placeholder="User Name"  style="text-align:center;font-size:20px;" /><br>
				<input type="email" class="form-control" id="emailid" placeholder="Email" style="text-align:center;font-size:20px;" /><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
			</form>
		</div>
		
		</div>
		</div>
	</center>	
</div>
	
	
</div>

</body>



</html>



