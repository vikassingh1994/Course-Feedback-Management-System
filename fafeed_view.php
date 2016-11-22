<?php
session_start();
include ("config.php");
if(($_SESSION['fauserid']==NULL)  || ($_POST['nitid']==NULL))
{
     header('location:faAuth.php');
}
else
{
     $nituserid = $_POST['nitid'];
     $query2 = "SELECT name FROM faculty where nitcuserid='$nituserid'";
     $result2 = mysqli_query($db, $query2);
	$row2 = mysqli_fetch_array($result2);
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
			height:25%;
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
		#content h2{
			text-align:center;
			font-size:28px;
			font-weight:500;
			color:#ffffff;
			
		}
		#content h3{
			text-align:center;
			font-size:28px;
			font-weight:500;
			color:#080800;
			
		}
		
	</style>
</head>
<body>
<div class="background_wrap" style="position: absolute;width: 100%;height: 30%;">
	<video  id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" width="100%">
		<source src="myvideo1.mp4" type="video/mp4">
	</video>
</div>
<div id="content">
	<br>
	<h1>Welcome to Feedback Management System</h1>
	<h2>National Institute of Technology, Calicut Kerala</h2>
	<table>
	     <tr >
	          <td style="padding-left :50px;" ><a  href="admin_logout.php"><button type="button"  class="btn btn-default btn-lg"><span class="glyphicon glyphicon-off"></span> Logout</button> </a>
	     <tr>
	</table>
	<br><br>
	<center><br><br>
	 <h3> <?php echo $row2[0]."'s status"; ?></h3>
	     <form><br><br>
				<table style="algin-left:10%;">
				<tr>
					<td style="color:#008000; font-size:20px;">QNo.</td>
					<td style="color:#008000; font-size:20px;">Question</td>
					<td style="color:#008000; font-size:20px;">Response</td>
				</tr>
					<?php
						$query = "SELECT * FROM questions";
						$result = mysqli_query($db, $query);
						$row = mysqli_fetch_array($result);
						$n=0;
						$count = mysqli_num_rows($result);
						while($count > 0)
						{
							echo '<tr>"';
							$n=$n+1;
							echo '<td>(' .$n .') </td>';
							echo '<td>' . $row['question'].'</td>';
							echo '<td style="text-align:center;">';
								$query6 = "SELECT AVG(q$n) FROM student_feedback where nitcuserid='$nituserid'";
								$result6 = mysqli_query($db, $query6)   or die("result me galti ba".mysqli_error());
								$row6 = mysqli_fetch_array($result6) or die("rowe".mysqli_error());
								echo $row6[0]."<br><br><br>";
							echo '</td>';
							echo '</tr>';
							$row = mysqli_fetch_array($result);
							$count--;
						}
						
					?>	
				</table>
			</form>
			<br><br><br><br>
	</center>
</div>
</body>
</html>
	
