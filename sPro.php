
<?php
session_start();
	include("config.php");
	//print_r($_SESSION);
	if($_SESSION['currentuser'] != NULL)
	{
		$username = $_SESSION['currentuser'];
		 $sql = "SELECT * FROM student WHERE roll = '$username'";
		 $result = mysqli_query($db,$sql);
		 $row = mysqli_fetch_array($result);
		 $count = mysqli_num_rows($result);
		 if($count == 1) 
		 {
		 	$_SESSION['name'] = $row['name'];
		 		$sname = $row['name'];
		 		$roll = $row['roll'];
		 		$email = $row['email'];
		 		$dob = $row['dob'];
		 		$fname = $row["father_name"];
		 		$course = $row['course'];
		 		$sem = $row['semester'];
		 	$_SESSION['sem'] = $sem;
		 		$ad_year = $row['admission_year'];
		 		$mobile = $row['mobile'];
		 }
	}
	else
	{
		echo '<script type=text/javascript> alert("Plzzzz... Login First")</script>';
		header("Refresh: 0 ;URL=sAuth.php");
	}


?>
<html>
<title>Welcome <?php echo $sname ?></title>

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
			background-color:#ffffff;
			text-decoration-color: black;
			text-decoration: none;
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
			padding-top:2;
			
		}
		#content h2{
			text-align:center;
			font-size:28px;
			font-weight:500;
			color:#ffffff;
			
		}
		#content h3{
			text-align:center;
			font-size:30px;
			font-weight:500;
			color:blue;
			
		}
		#content h4{
			text-align:right;
			font-size:20px;
			font-weight:500;
			color:blue;
			margin-left: 10px;
		}
		#content h5{
			text-align:center;
			font-size:20px;
			font-weight:500;
			color:#008000;
		}
		input{
			width: 120px;
			height: 40px;
			margin-left: 50px;
			color: black;

		}
		
		table ,tr,td
		{
			border: 0px solid black;
			border-collapse: collapse;
            	width: 50%;
            	vertical-align: left;
            	text-align:center;
		}
		tr:hover
		{
		        background-color:#f5f5f5
		}
		#content form{
			width:70%;
			text-align:center;
			height:100%;
			
		}
		
	</style>
</head>
<body>
<div class="background_wrap" style ="position: absolute; height:35%;">
	<video  id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" width="100%">
		<source src="myvideo1.mp4" type="video/mp4">
	</video>
</div><br><br>
<div id="content">
	
	<h1>Welcome to Feedback Management System</h1>
	<h2>National Institute of Technology, Calicut Kerala</h2>
	
	<Button class="btn btn-default btn-lg"  onclick="Javascript:window.location.href = 'logout.php';" style ="margin-left: 85%;"><span class="glyphicon glyphicon-off"></span> Logout</Button>
	<br><br>
	<center>
		<ul class="nav nav-tabs" style="padding-left: 200px;align:center;">
			  <li><a data-toggle="tab" class="active" href="#pro"><h4 style="font-size:20px; font-weight:800;color:#008000;">Profile</h4></a></li>
			  <li><a data-toggle="tab" href="#feed"><h4 style="font-size:20px;font-weight:800;color:#008000;">Feedback</h4></a></li>
		</ul>
		<div class="tab-content">
		<div id="pro" class="tab-pane fade in active">
		        <br>
			
                <br>
			<table>
			<tr>
				<td ><h4>Student Name :</h4></td>
				<td><h5> <?php echo $sname ?></h5></td>
			</tr>
			<tr>
				<td><h4>Roll Number : </h4></td>
				<td><h5><?php echo $roll ?></h5></td>
			</tr>
			<tr>
				<td><h4>Date of birth : </h4></td>
				<td><h5><?php echo $dob ?></h5></td>
			</tr>
			<tr>
				<td><h4>Father's Name : </h4></td>
				<td><h5><?php echo $fname ?></h5></td>
			</tr>
			<tr>
				<td><h4>Course : </h4></td>
				<td><h5><?php echo $course ?></h5></td>
			</tr>
			<tr>
				<td><h4>Semester : </h4></td>
				<td><h5><?php echo $sem ?></h5></td>
			</tr>
			<tr>
				<td><h4>Admission Year : </h4></td>
				<td><h5><?php echo $ad_year ?></h5></td>
			</tr>
			<tr>
				<td><h4>Mobile No. : </h4></td>
				<td><h5><?php echo $mobile ?></h5></td>
			</tr></table>
		</div>
		<div id="feed" class="tab-pane fade">
		
			<br><br>
			<div style="width:50%; background-color:lightgrey; font-size: 20px;">
			     <h5>Course : <?php echo $course ?></h5>
			     <h5>Semester :<?php echo $sem ?></h5>
			</div>
			<div>
			     <marquee behavior="alternate" dir="ltr" direction="left" dataFormatAs="text" scrolldelay="150" 
			     style="FONT-WEIGHT: bold; COLOR: brown; FONT-FAMILY: Monospace" onmouseover="this.stop();"
			     onmouseout="this.start();" id="MARQUEE1"> 
				CLICK ON FACULTY NAME FOR GIVE FEEDBACK</marquee>
			</div>
			<br><br>
			<table >
			<tr>
			        <td><p style="color: #008000; font-size: 20px; text-align:center;">S.No</p></td>
			        <td><p style="color: #008000; font-size: 20px; text-align:center;">Subjects</p></td>
			        <td><p style="color: #008000; font-size: 20px; text-align:center;">Faculty</p></td>
			</tr>
			
			<?php
			    $sql1 = "SELECT * FROM subjects_taken WHERE roll_no = '$roll'";
			    $result1 = mysqli_query($db,$sql1);
			    $row1 = mysqli_fetch_array($result1);
				echo '<tr>';
				if($row1['subject1'])
				{
				     echo '<td>1)</td>';
					echo '<form action="sFeed.php" type="GET">';
					echo '<input type="hidden" name="subject" value='.$row1['subject1'].' >';
					$sub1=$row1['subject1'];
					$sql3 = "SELECT sub_name FROM subject_list WHERE sub_code = '$sub1'";
			         $result3 = mysqli_query($db,$sql3);
			         $row3 = mysqli_fetch_array($result3);
			         echo '<td style="text-align:left;"><label> '.$row3[0].' ('.$sub1.')'.'</label></td>';
					$sql2 = "SELECT name,nitcuserid FROM faculty WHERE nitcuserid in(SELECT nitcuserid FROM teacher_allot WHERE course='$course' and semester='$sem' and subject='$sub1' )";
				    $result2 = mysqli_query($db,$sql2);
				    $row2 = mysqli_fetch_array($result2);
				    if($row2['nitcuserid'])
				     {
				          echo '<input type="hidden" name="tname" value='.$row2['nitcuserid'].'>';
				          echo '<td><input type="submit" class="btn btn-info btn-lg" value='.$row2['name'].'></td></form>';
				     }
					
					
				}
				echo "</tr>";
				echo '<tr>';
				if($row1['subject2'])
				{
				     echo '<td>2)</td>';
					echo '<form action="sFeed.php" type="GET">';
					echo '<input type="hidden" name="subject" value='.$row1['subject2'].'>';
					$sub2=$row1['subject2'];
					$sql3 = "SELECT sub_name FROM subject_list WHERE sub_code = '$sub2'";
			         $result3 = mysqli_query($db,$sql3);
			         $row3 = mysqli_fetch_array($result3);
			         echo '<td style="text-align:left;"><label> '.$row3[0].' ('.$sub2.')'.'</label></td>';
					$sql2 = "SELECT name,nitcuserid FROM faculty WHERE nitcuserid in(SELECT nitcuserid FROM teacher_allot WHERE course='$course' and semester='$sem' and subject='$sub2' )";
				    $result2 = mysqli_query($db,$sql2);
				    $row2 = mysqli_fetch_array($result2);
				    if($row2['nitcuserid'])
					{
				          echo '<input type="hidden" name="tname" value='.$row2['nitcuserid'].'>';
				          echo '<td><input type="submit" class="btn btn-info btn-lg" value='.$row2['name'].'></td></form>';
				     }
				}
				echo "</tr>";
				echo '<tr>';
				if($row1['subject3'])
				{
				     echo '<td>3)</td>';
					echo '<form action="sFeed.php" type="GET">';
					echo '<input type="hidden" name="subject" value='.$row1['subject3'].'>';
					$sub3=$row1['subject3'];
					$sql3 = "SELECT sub_name FROM subject_list WHERE sub_code = '$sub3'";
			         $result3 = mysqli_query($db,$sql3);
			         $row3 = mysqli_fetch_array($result3);
			         echo '<td style="text-align:left;"><label> '.$row3[0].' ('.$sub3.')'.'</label></td>';
					$sql2 = "SELECT name,nitcuserid FROM faculty WHERE nitcuserid in(SELECT nitcuserid FROM teacher_allot WHERE course='$course' and semester='$sem' and subject='$sub3' )";
				    $result2 = mysqli_query($db,$sql2);
				    $row2 = mysqli_fetch_array($result2);
				    if($row2['nitcuserid'])
					{
				          echo '<input type="hidden" name="tname" value='.$row2['nitcuserid'].'>';
				          echo '<td><input type="submit" class="btn btn-info btn-lg" value='.$row2['name'].'></td></form>';
				     }
				}
				echo "</tr>";
				echo '<tr>';
				if($row1['subject4'])
				{
				     echo '<td>4)</td>';
					echo '<form action="sFeed.php" type="GET">';
					echo '<input type="hidden" name="subject" value='.$row1['subject4'].'>';
					$sub4=$row1['subject4'];
					$sql3 = "SELECT sub_name FROM subject_list WHERE sub_code = '$sub4'";
			         $result3 = mysqli_query($db,$sql3);
			         $row3 = mysqli_fetch_array($result3);
			         echo '<td style="text-align:left;"><label> '.$row3[0].' ('.$sub4.')'.'</label></td>';
					$sql2 = "SELECT name,nitcuserid FROM faculty WHERE nitcuserid in(SELECT nitcuserid FROM teacher_allot WHERE course='$course' and semester='$sem' and subject='$sub4' )";
				    $result2 = mysqli_query($db,$sql2);
				    $row2 = mysqli_fetch_array($result2);
				    if($row2['nitcuserid'])
					{
				          echo '<input type="hidden" name="tname" value='.$row2['nitcuserid'].'>';
				          echo '<td><input type="submit" class="btn btn-info btn-lg" value='.$row2['name'].'></td></form>';
				     }
				}
				echo "</tr>";
				echo '<tr>';
				if($row1['subject5'])
				{
				     echo '<td>5)</td>';
					echo '<form action="sFeed.php" type="GET">';
					echo '<input type="hidden" name="subject" value='.$row1['subject5'].'>';
					$sub5=$row1['subject5'];
					$sql3 = "SELECT sub_name FROM subject_list WHERE sub_code = '$sub5'";
			         $result3 = mysqli_query($db,$sql3);
			         $row3 = mysqli_fetch_array($result3);
			         echo '<td style="text-align:left;"><label> '.$row3[0].' ('.$sub5.')'.'</label></td>';
					$sql2 = "SELECT name,nitcuserid FROM faculty WHERE nitcuserid in(SELECT nitcuserid FROM teacher_allot WHERE course='$course' and semester='$sem' and subject='$sub5' )";
				    $result2 = mysqli_query($db,$sql2);
				    $row2 = mysqli_fetch_array($result2);
				    if($row2['nitcuserid'])
					{
				          echo '<input type="hidden" name="tname" value='.$row2['nitcuserid'].'>';
				          echo '<td><input type="submit" class="btn btn-info btn-lg" value='.$row2['name'].'></td></form>';
				     }
				}
				echo "</tr>";
				echo '<tr>';
				if($row1['subject6'])
				{
				     echo '<td>6)</td>';
					echo '<form action="sFeed.php" type="GET">';
					echo '<input type="hidden" name="subject" value='.$row1['subject6'].'>';
					$sub6=$row1['subject6'];
					$sql3 = "SELECT sub_name FROM subject_list WHERE sub_code = '$sub6'";
			         $result3 = mysqli_query($db,$sql3);
			         $row3 = mysqli_fetch_array($result3);
			         echo '<td style="text-align:left;"><label> '.$row3[0].' ('.$sub6.')'.'</label></td>';
					$sql2 = "SELECT name,nitcuserid FROM faculty WHERE nitcuserid in(SELECT nitcuserid FROM teacher_allot WHERE course='$course' and semester='$sem' and subject='$sub6' )";
				    $result2 = mysqli_query($db,$sql2);
				    $row2 = mysqli_fetch_array($result2);
				    if($row2['nitcuserid'])
					{
				          echo '<input type="hidden" name="tname" value='.$row2['nitcuserid'].'>';
				          echo '<td><input type="submit" class="btn btn-info btn-lg" value='.$row2['name'].'></td></form>';
				     }
				}
				echo "</tr>";
				echo '<tr>';
				if($row1['subject7'])
				{
				     echo '<td>7)</td>';
					echo '<form action="sFeed.php" type="GET">';
					echo '<input type="hidden" name="subject" value='.$row1['subject7'].'>';
					$sub7=$row1['subject7'];
					$sql3 = "SELECT sub_name FROM subject_list WHERE sub_code = '$sub7'";
			         $result3 = mysqli_query($db,$sql3);
			         $row3 = mysqli_fetch_array($result3);
			         echo '<td style="text-align:left;"><label> '.$row3[0].' ('.$sub7.')'.'</label></td>';
					$sql2 = "SELECT name,nitcuserid FROM faculty WHERE nitcuserid in(SELECT nitcuserid FROM teacher_allot WHERE course='$course' and semester='$sem' and subject='$sub7' )";
				    $result2 = mysqli_query($db,$sql2);
				    $row2 = mysqli_fetch_array($result2);
				    if($row2['nitcuserid'])
					{
				          echo '<input type="hidden" name="tname" value='.$row2['nitcuserid'].'>';
				          echo '<td><input type="submit" class="btn btn-info btn-lg" value='.$row2['name'].'></td></form>';
				     }
				}
				echo "</tr>";
				echo '<tr>';
				if($row1['subject8'])
				{
				     echo '<td>8)</td>';
					echo '<form action="sFeed.php" type="GET">';
					echo '<input type="hidden" name="subject" value='.$row1['subject8'].'>';
					$sub8=$row1['subject8'];
					$sql3 = "SELECT sub_name FROM subject_list WHERE sub_code = '$sub8'";
			         $result3 = mysqli_query($db,$sql3);
			         $row3 = mysqli_fetch_array($result3);
			         echo '<td style="text-align:left;"><label> '.$row3[0].' ('.$sub8.')'.'</label></td>';
					$sql2 = "SELECT name,nitcuserid FROM faculty WHERE nitcuserid in(SELECT nitcuserid FROM teacher_allot WHERE course='$course' and semester='$sem' and subject='$sub8' )";
				    $result2 = mysqli_query($db,$sql2);
				    $row2 = mysqli_fetch_array($result2);
				    if($row2['nitcuserid'])
					{
				          echo '<input type="hidden" name="tname" value='.$row2['nitcuserid'].'>';
				          echo '<td><input type="submit" class="btn btn-info btn-lg" value='.$row2['name'].'></td></form>';
				     }
				}
				echo "</tr>";
			?>
			</table>
		</div>	
		</div>
	</center><br><br><br>
</div>
</body>
</html>
