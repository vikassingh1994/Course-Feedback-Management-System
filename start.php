
<html>
<title>Feedback Management System</title>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="login_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="login_effect.js"></script>



  
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
			height:100%;
			width:100%;
			
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
			
			font-weight:500;
			color:#ffffff;
			padding-top:52;
		}
		#content h3{
			text-align:center;
			font-size:28px;
			font-weight:500;
			color:#ffffff;
		}
		
		
		
	</style>
</head>
<body>
<div class="background_wrap" >
	<video  id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" width="100%" >
		<source src="myvideo1.mp4" type="video/mp4">
	</video>
</div>
<div id="content">
	
	<h1>Welcome to Feedback Management System</h1>
	
	<h3>National Institute of Technology, Calicut Kerala</h3>
	<br><br><br>
	<center>
	
		<form action="faAuth.php" method="post">
		<button type="submit" class="btn btn-warning btn-lg" style="width:15%;"><span class="glyphicon glyphicon-user" > </span> Faculty Advisor</button>
		</form>
	<br>
	<form action="fAuth.php" method="post">
		<button type="submit" class="btn btn-info btn-lg" style="width:15%;"><span class="glyphicon glyphicon-user"> </span> Faculty</button> 
	</form>
	<br>
	<form action="sAuth.php" method="post">
		<button type="submit" class="btn btn-default btn-lg" style="width:15%;"><span class="glyphicon glyphicon-education"> </span> Student</button> 
	</form>
	</center>
</div>

</body>


</html>
