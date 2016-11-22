
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
			font-size:50px;
			align:center;
			text-transform:uppercase;
			font-weight:100;
			color:#ffffff;
			padding-top:3;
			
		}
		#content h3{
			text-align:center;
			font-size:40px;
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
			width:35%;
			align:center;
			height:50%;
			
		}
		
		
	</style>
</head>
<body>
<div class="background_wrap">
	<video  id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" >
		<source src="myvideo1.mp4" type="video/mp4">
	</video>
</div>
<div id="content">
	
	<h1>Welcome to Feedback Management System</h1>
	<h3>National Institute of Technology, Calicut Kerala</h3>
	<br><br><br>
	<center>
	<form>
		<ul class="nav nav-pills">
		  <li><a data-toggle="tab" class="active" href="#log"><h4 style="font-size:20px; font-weight:800;color:#32CD32;">Login</h4></a></li>
		  <li><a data-toggle="tab" href="#reg"><h4 style="font-size:20px;font-weight:800;color:#32CD32;">Registration</h4></a></li>
		  <li><a data-toggle="tab" href="#fp"><h4 style="font-size:20px;font-weight:800;color:#32CD32;">Forget Password</h4></a></li>
		</ul>
		<div class="tab-content">
		<div id="log" class="tab-pane fade in active">
			<form action="" style="width:60%;" >
				<br><br>
				<input type="text" class="form-control" id="username" placeholder="User Name" style="text-align:center;font-size:20px;" required/><br>
				<input type="password" class="form-control" id="password" placeholder="Password" style="text-align:center;font-size:20px;" required /><br><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
			</form>
		</div>
		
			<div id="reg" class="tab-pane fade">
				<form action="" style="width:100%;">
				<br><br>
				<input type="text" class="form-control" id="name" placeholder="Full Name"  style="text-align:center;font-size:20px;" required/><br>
				<input type="text" class="form-control" id="n" placeholder="Roll Number" style="text-align:center;font-size:20px;" required/><br>
				<input type="password" class="form-control" id="n" placeholder="Password" style="text-align:center;font-size:20px;" required/><br>
				<input type="password" class="form-control" id="n" placeholder="Re-Enter Password" style="text-align:center;font-size:20px;" required/><br>
				<input type="email" class="form-control" id="n" placeholder="Email" style="text-align:center;font-size:20px;" required/><br>
				<input type="date" class="form-control" id="n" placeholder="Date of Birth (MM/DD/YYYY)" style="text-align:center;font-size:20px;" required/><br>
				<input type="text" class="form-control" id="n" placeholder="Course" style="text-align:center;font-size:20px;" required/><br>
				<input type="text" class="form-control" id="n" placeholder="Specialization" style="text-align:center;font-size:20px;" required/><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
			</form>
		</div>
		<div id="fp" class="tab-pane fade">
			<form action="" style="width:100%;">
				<br><br>
				<input type="text" class="form-control" id="name" placeholder="Roll Number"  style="text-align:center;font-size:20px;" /><br>
				<input type="email" class="form-control" id="n" placeholder="Email" style="text-align:center;font-size:20px;" /><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
			</form>
		</div>
		
		</div>
	</form>
	</center>	
</div>
	
	
</div>

</body>


</html>