<?php
session_start();
include ("config.php");
$folder=getcwd();
$folder=$folder."/";
session_start();
if($_SESSION['fid'] != NULL)
	{
		$username = $_SESSION['fid'];
		 $sql = "SELECT * FROM faculty WHERE nitcuserid = '$username'";
		 $result = mysqli_query($db,$sql);
		 $row = mysqli_fetch_array($result);
		 $count = mysqli_num_rows($result);
		 if($count == 1) 
		 {
		 	$_SESSION['name'] = $row['name'];
		 		$fname = $row['name'];
		 		$id = $row['nitcuserid'];
		 		$email = $row['email'];
		 		$dept = $row['dept'];
		 		$spec = $row['spec1'];
		 		
		 		$mobile = $row['mobile'];
		 	//	$ad_year = $row['admission_year'];
		 		//$mobile = $row['mobile'];
		 		
		 }
	}
	else
	{
		echo '<script type=text/javascript> alert("Plzzzz... Login First")</script>';
		header("Refresh: 0 ;URL=fAuth.php");
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
			font-size:50px;
			align:center;
			text-transform:uppercase;
			font-weight:800;
			color:#ffffff;
			padding-top:3;
			
		}
		#content h3{
			text-align:center;
			font-size:40px;
			font-weight:500;
			color:#ffffff;
			
		}
		#content h31{
			text-align:center;
			font-size:20px;
			font-weight:500;
			color:#008000;
			
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
		#mainform{
			margin-left:180px;
			width:65%;
			align:center;
			height:100%;

			
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
		
		
		tr:hover
		{
		        background-color:#2471A3;
		        color:#ffffff;
		        font-size:24px;
		        font-weight:400;
		        font-family: 'Tangerine', serif;
		}
		
		
	</style>
</head>
<body>
<div class="background_wrap" style="position: absolute;width: 100%;height: 30%;">
	<video  id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" width="100%" >
		<source src="myvideo1.mp4" type="video/mp4">
	</video>
</div>
<div id="content">
	
	<h1>Welcome to Feedback Management System</h1>
	<h3>National Institute of Technology, Calicut Kerala</h3>
	<a style="padding-left:85%" href="f_logout.php"><button type="button"  class="btn btn-default btn-lg"><span class="glyphicon glyphicon-off"></span> Logout</button> </a>
	<br><br>
	
	<h3 style="color: #008000;font-weight: 900;color:#008000;">Faculty Panel </h3><br><p></p>
    
	<div id="mainform">
			
		<ul class="nav nav-tabs" style="padding-left:15%">
		  <li><a data-toggle="tab" class="active" href="#View_profile"><h4 style="font-size:15px; font-weight:800;color:#008000;">View Profile</h4></a></li>
		  
		<li><a data-toggle="tab" href="#Add_question"><h4 style="font-size:15px;font-weight:800;color:#008000;">Add Question</h4></a></li>
		 <li><a data-toggle="tab" href="#view_rating"><h4 style="font-size:15px;font-weight:800;color:#008000;">View Rating</h4></a></li>
		</ul>
		<div class="tab-content">
		<div id="View_profile" class="tab-pane fade" style="padding-left:20%"><br><br>
			  <br>
			<h2 style="color:black; "><?php echo $fname ?>'s Profile</h2>
                        <br>
			<table>
			<tr>
				<td ><h4>Name :</h4></td>
				<td><h5> <?php echo $fname ?></h5></td>
			</tr>
			<tr>
				<td><h4>NITC User ID : </h4></td>
				<td><h5><?php echo $id ?></h5></td>
			</tr>
			<tr>
				<td><h4>Email ID : </h4></td>
				<td><h5><?php echo $id ?></h5></td>
			</tr>
			<tr>
				<td><h4>Department: </h4></td>
				<td><h5><?php echo $dept ?></h5></td>
			</tr>
			<tr>
				
				<td><h4>Specialization : </h4></td>
				<td><h5><?php echo $spec ?></h5></td>
			</tr>
			<tr>
				
				<td><h4>Mobile No. : </h4></td>
				<td><h5><?php echo $mobile ?></h5></td>
			</tr></table>
		</div>
		
		
	
		
		<div id="Add_question" class="tab-pane fade" style="padding-left:20%">
			<form action="fHome.php" method="post" style="width:70%;">
				<br><br><p style="color:#008000;font-size: 25px;">Add Questions : </p>

				<input type="text" class="form-control" name="q" placeholder="Enter the Question "  style="text-align:center;font-size:20px;" /><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
				
			
		</div>


		<div id="view_rating" class="tab-pane fade" style="padding-left:20%">
			<form><br><br>
				<table>
				<tr>
					<td ><font size="5" color="red">Qno. </font></td>
					<td ><font size="5" color="red">Questions</font></td>
					<td ><font size="5" color="red">Response</font></td>
				</tr>
					<?php
						$query5 = "SELECT * FROM questions";
						$result5 = mysqli_query($db, $query5);
						$row5 = mysqli_fetch_array($result5);
						$n=0;
						$count5 = mysqli_num_rows($result5);
						while($count5 > 0)
						{
							echo '<tr>"';
							$n=$n+1;
							echo '<td width="10%">(' .$n .') </td>';
							echo '<td>' . $row5['question'].'</td>';
							echo '<td style="text-align:center;">';
								$query6 = "SELECT AVG(q$n) FROM student_feedback where nitcuserid='$username'";
								$result6 = mysqli_query($db, $query6)   or die("result me galti ba".mysqli_error());
								$row6 = mysqli_fetch_array($result6) or die("rowe".mysqli_error());
								echo $row6[0]."<br><br><br>";
							echo '</td>';
							echo '</tr>';
							$row5 = mysqli_fetch_array($result5);
							$count5--;
						}
						$query7 = "SELECT question FROM faculty_ques where nitcuserid='$username'";
						$result7 = mysqli_query($db, $query7);
						$row7 = mysqli_fetch_array($result7);
						$count7 = mysqli_num_rows($result7);
						while($count7 > 0)
						{						     
						     echo '<tr>';
							$n=$n+1;
							echo '<td>(' .$n .') </td>';
							echo '<td>' . $row7['question'].'</td>';
							echo '<td style="text-align:center;">';
								$query8 = "SELECT AVG(q$n) FROM student_feedback where nitcuserid='$username'";
								$result8 = mysqli_query($db, $query8)   or die("result me galti ba".mysqli_error());
								$row8 = mysqli_fetch_array($result8) or die("rowe".mysqli_error());
								echo $row8[0]."<br><br><br>";
							echo '</td>';
							echo '</tr>';
							$row7 = mysqli_fetch_array($result7);
							$count7--;
						}
					?>	
				</table>
			</form>

		</div>
		<br><br><br>
	
		</div>
		</div>
	    
</div>

</body>


</html>



<?php
	if(isset($_POST['q']))
	{
		$q=$_POST['q'];
		$i=$_SESSION["fid"];
		$s="insert into faculty_ques values('$i','$q')";
		$sql=mysqli_query($db,$s);
		echo '<script type=text/javascript> alert("....Question inserted...")</script>';
		//header("Refresh: 0 ;URL=faHome.php");
	}
?>

<?php
	if(isset($_POST['ques']))
	{
		$q1=$_POST['ques'];
	
		$q2="delete from questions where question='$q1'";
		$sql=mysqli_query($db,$q2);
		echo '<script type=text/javascript> alert("....Question deleted!!!!!!!...")</script>';
		//header("Refresh: 0 ;URL=faHome.php");
	

	}
?>

<?php
if(isset($_POST['course']))
{
	$c=$_POST['course'];
	$sem=$_POST['curr_sem'];
	$sub=$_POST['subject'];
	$f=$_POST['faculty_id'];
	$q3="insert into teacher_allot(course,semester,subject,nitcuserid) values('$c','$sem','$sub','$f')";
	$sql=mysqli_query($db,$q3);
	echo '<script type=text/javascript> alert("Teacher alloted for classes!!!!!!!")</script>';
	//header("Refresh: 0 ;URL=faHome.php");
}

?>

