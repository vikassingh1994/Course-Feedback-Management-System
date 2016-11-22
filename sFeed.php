<?php
session_start();
	include("config.php");
	if($_SESSION['currentuser'] != NULL)
	{
		$student_name = $_SESSION['name'];
		$sem = $_SESSION['sem'];
	}
	else
	{
		echo '<script type=text/javascript> alert("Plzzzz... Login First")</script>';
		header("Refresh: 0 ;URL=sAuth.php");
	}
	
?>

<html>
<title><?php echo $student_name ?>'s feedback form</title>
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
			background-color:white;
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
		#content h11{
			text-align:center;
			font-size:30px;
			font-weight:700;
			color:#008000;
			
		}
		#content h2{
			text-align:center;
			font-size:40px;
			font-weight:500;
			color:#ffffff;
			
		}
		#content h21{
			text-align:center;
			font-size:40px;
			font-weight:500;
			color:darkblue;
			
		}
		#content h3{
			text-align:center;
			font-size:25px;
			font-weight:500;
			color:#888000;
			
		}
		#content h4{
			text-align:center;
			font-size:20px;
			font-weight:500;
			color:#800800;
			
		}
		#content qu{
			text-align:center;
			font-size:25px;
			font-weight:500;
			color:#008000;
		}
		#content an{
			text-align:left;
			font-size:20px;
			font-weight:500;
			color: red;
			
		}
		
		
		#content form{
			width:100%;
			align:center;
			
		}
		#content form input{
			text-align:center;
			font-size:20px;
		}
		
		label
		{
			color:#000000;
			text-shadow:0 .0px 0;
			font-weight:700;
			font-size:20px
			
		}
		#content center{
			width: 60%;
			height: 100%;
			align-content: center;
			align:center;
			align-items: center;
			margin-left: 300px;
		}
		table ,tr,td
		{
		     vertical-align: left;
            	text-align:center;
		}
		tr:hover
		{
		        background-color:#f5f5f5
		}
		
	</style>
</head>
<body>
<div class="background_wrap" style ="position: absolute;height:250;">
	<video  id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" width ="100%" >
		<source src="myvideo1.mp4" type="video/mp4">
	</video>
</div>
<div id="content">
	
	<h1>Welcome to Feedback Management System</h1>
	<h2>National Institute of Technology, Calicut Kerala</h2><br>
	<Button class="btn btn-default btn-lg"  onclick="Javascript:window.location.href = 'logout.php';" style ="margin-left: 85%;"><span class="glyphicon glyphicon-off"></span> Logout</Button>

	<br>
	<center>
	<form action="sFeedSub.php" method="POST">
	<br><br><br>
		<h11>Student Feedback Form</h11><br><br>
		<?php
			$s_roll = $_SESSION['currentuser'];
		     $_SESSION['sub'] = $_GET['subject'];
		     $sub = $_GET['subject'];
		     
		     $_SESSION['teacher_id'] =  $_GET['tname'];
		     $tname=$_GET['tname'];
			
			$query2 = "SELECT name FROM faculty where nitcuserid='$tname'";
			$result2 = mysqli_query($db, $query2);
			$row2 = mysqli_fetch_array($result2);
			echo '<table style="width:100%;">';
			echo '<tr><td><h3>Student Name : </h3><h4>'.$_SESSION['name'].'</h4></td>' ;
			echo '<td><h3>Teacher Name : </h3><h4>'.$row2[0].'</h4></td>' ;
			echo '<td><h3>Subject : </h3><h4>'.$sub.'</h4></td></tr>' ;
			echo '</table><br><br>';
			
			$query = "SELECT * FROM questions";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result);
			$n=0;
			$count = mysqli_num_rows($result);
			while($count > 0)
			{
			     $n=$n+1;
				echo '<qu>' .$n .' ). </qu>';
				echo '<qu>' . $row['question'].'</qu><br/>';
				echo '<an><label><input type="radio" name="ans['.$n.']" value="5" > Excellent </label></an><br>';
				echo '<an><label><input type="radio" name="ans['.$n.']" value="4"> Very Good </label></an><br>';
				echo '<an><label><input type="radio" name="ans['.$n.']" value="3" checked="checked"> Good </label></an><br>';
				echo '<an><label><input type="radio" name="ans['.$n.']" value="2"> Fair </label></an><br>';
				echo '<an><label><input type="radio" name="ans['.$n.']" value="1"> Poor </label></an><br><br>';
				$row = mysqli_fetch_array($result);
				$count--;
			}
			
			
			
			$query1 = "SELECT question FROM faculty_ques where nitcuserid='$tname'";
			$result1 = mysqli_query($db, $query1) or die("problrm in result".mysqli_error($db));
			$row1 = mysqli_fetch_array($result1);
			$count=mysqli_num_rows($result1);
			if($count > 0)
			{
				echo '<h21>Faculty Question</h21><br><br>';
				while($count > 0)
				{
				    $n=$n+1;
					echo '<qu>' .$n .' ). </qu>';
					echo '<qu>' . $row1['question'].'</qu><br/>';
					echo '<an><label><input type="radio" name="ans['.$n.']" value="5" > Excellent </label></an><br>';
					echo '<an><label><input type="radio" name="ans['.$n.']" value="4"> Very Good </label></an><br>';
					echo '<an><label><input type="radio" name="ans['.$n.']" value="3" checked="checked"> Good </label></an><br>';
					echo '<an><label><input type="radio" name="ans['.$n.']" value="2"> Fair </label></an><br>';
					echo '<an><label><input type="radio" name="ans['.$n.']" value="1"> Poor </label></an><br><br>';
					$row1 = mysqli_fetch_array($result1);
					$count--;
				}
			}
			
			echo '<br><br><input type="submit" class="btn btn-primary" name ="submit" value ="Submit Your Feedback"/><br><br><br>';
			mysqli_close($db);
		?>
		
		
	</form>
	</center>	
</div>
</body>
</html>
