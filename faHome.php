<?php
session_start();
include ("config.php");
$folder=getcwd();
$folder=$folder."/";
if($_SESSION['fauserid']==NULL)
{
	header('location:faAuth.php');
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
		#mainform{
			margin-left:50px;
			width:70%;
			align:center;
			height:70%;

			
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
	
	<h1>Welcome to Feedback Management System</h1>
	<h3>National Institute of Technology, Calicut Kerala</h3>
	<table>
	     <tr >
	          <td style="padding-left :50px;" ><a  href="admin_logout.php"><button type="button"  class="btn btn-default btn-lg"><span class="glyphicon glyphicon-off"></span> Logout</button> </a>
	     <tr>
	</table>
	
	</form>
	<h3 style="color: #008000;font-weight: 900;color:#008000;padding-top:120;">Admin Panel</h3>
	<center>
	<div id="mainform">
		<ul class="nav nav-tabs" style="background-color:#ffdead;">
		  <li><a data-toggle="tab" class="active" href="#faculty_enroll"><h4 style="font-size:15px; font-weight:800;color:#008000;">Faculty Enroll</h4></a></li>
		  <li><a data-toggle="tab" href="#Student_Enroll"><h4 style="font-size:15px;font-weight:800;color:#008000;">Student Enroll</h4></a></li>
		<li><a data-toggle="tab" href="#Modify_question"><h4 style="font-size:15px;font-weight:800;color:#008000;">Modify Question</h4></a></li>
		 <li><a data-toggle="tab" href="#TA"><h4 style="font-size:15px;font-weight:800;color:#008000;">Teacher Allotment</h4></a></li>
		  <li><a data-toggle="tab" href="#sub_allot"><h4 style="font-size:15px;font-weight:800;color:#008000;">Subject Allotment</h4></a></li>
		  <li><a data-toggle="tab" href="#feed"><h4 style="font-size:15px;font-weight:800;color:#008000;">Feedback</h4></a></li>
		  <li><a data-toggle="tab" href="#update"><h4 style="font-size:15px;font-weight:800;color:#008000;">Update semester</h4></a></li>
		</ul>
		<div class="tab-content">
		<div id="faculty_enroll" class="tab-pane fade"><br><br>
			<form action="faHome.php" method="POST">
				<input type="email" class="form-control" name="fid" placeholder="Faculty Email Id" style="text-align:center;font-size:20px;width:50%;"required/><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
			</form>
		</div>
		<div id="Student_Enroll" class="tab-pane fade">
				<form action="" method="post" enctype="multipart/form-data" style="width:50%;">
				<br><br><p style="color:white;font-size:30px;">Select File: </p> 
				<input type="file"  class="btn btn-info" name="image" style="text-align:center;font-size:20px;"><br>
			<input type="submit" class="btn btn-info btn-lg"  value="Upload"><br><br>
			</form>
			
		</div>
		
		<div id="sub_allot" class="tab-pane fade">
			<form action="" method="post" enctype="multipart/form-data" style="width:50%;">
				<br><br><p style="color:white;font-size:30px;">Select File: </p> 
				<input type="file"  class="btn btn-info" name="image1" style="text-align:center;font-size:20px;"><br>
			<input type="submit" class="btn btn-info btn-lg"  value="Upload"><br><br>
			</form>
			
		</div>
		
		<div id="Modify_question" class="tab-pane fade">
			<form action="faHome.php" method="post" style="width:70%;">
				<br><br><p style="color:#008000;font-size: 25px;">Add Questions : </p>

				<input type="text" class="form-control" name="q" placeholder="Enter the Question "  style="text-align:center;font-size:20px;" required/><br>
				<input type="submit" class="btn btn-info btn-lg" value="Submit">
				
			</form>
			<form method="post" action="faHome.php" style="width:70%;">
				<br><br><p style="color:#008000;font-size: 25px;">Delete Questions : </p>
				<?php
					$result_array=array();
					$subjectName = 'SELECT question FROM questions';
					$subject = mysqli_query($db,$subjectName) or die('Could not look up user information; ' . mysqli_error($db));
					while($row=$subject->fetch_assoc()){
						$result_array[]=$row;
					}
					$le=sizeof($result_array);
					$le--;
					//echo $le;
				?>
				
					 					 
					 <select name="ques" class="form-control" style="align:center;">					 
					 <option>---Select Question to Delete---</option>					 
					 <?php 
					 while($le>=0)
					 	{ ?>					 
					<option  value="<?php echo $result_array[$le]['question'];?>"> <?php echo $result_array[$le]['question'];?>
					</option>
					<?php $le--;}?> 
					 </select>
					 
				<br>
				<input type="submit" class="btn btn-info btn-lg" value="delete"><br><br><br>
			</form>
		</div>
		<div id="TA" class="tab-pane fade">
			<form action="faHome.php" method="post"><br><br>
				<select name="course" class="form-control"   style="width: 300px; height:40px;font-size:20px;">
				  <option style="align:center;" selected>Select Course</option>
				  <option  value="B.Tech">B.Tech</option>
                   <option value="MCA">MCA</option> 				
				   <option value="M.Tech">M.Tech</option>
				   <option value="Ph.D">Ph.D</option>
				</select><br>
			<select name="curr_sem"class="form-control"   style="width: 300px;height:40px;font-size:20px;">
				  <option selected>Current Semester</option>
				  <option value="1">1</option>
                   <option value="2">2</option> 				
				   <option value="3">3</option>
				   <option value="4">4</option>
				   <option value="5">5</option>
				   <option value="6">6</option>
				   <option value="7">7</option>
				   <option value="8">8</option>
				</select><br>
			<select name="subject"class="form-control"   style="width: 300px;height:40px;font-size:20px;">
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
			           <option>Select subject </option>					 
					 <?php 
					 while($le>=0)
					 { ?>	
                         <option  value="<?php  echo $result[$le]['sub_code'];?>"> <?php echo $result[$le]['sub_code'].' ('.$result[$le]['sub_name'].')';?>
					</option>
					<?php $le--;}?> 
				</select><br>
				<?php
					$result=array();
					$subjectName = 'SELECT name,nitcuserid FROM faculty where name!=""';
			          $subject = mysqli_query($db,$subjectName) or die('Could not look up user information; ' . mysqli_error($db));
					while($row=$subject->fetch_assoc())
					{
						$result[]=$row;
					}
					
					$le=sizeof($result);
					$le--;
					//echo $le;
				?>
				
					 					 
			     <select name="faculty_id" class="form-control" style="width: 300px;height:40px;font-size:20px;">					 
					 <option>Allocate the faculty</option>					 
					 <?php 
					 while($le>=0)
					 { ?>	
								 
					<option  value="<?php  echo $result[$le]['nitcuserid'];?>"> <?php echo $result[$le]['name'].' ('.$result[$le]['nitcuserid'].')';?>
					</option>
					<?php $le--;}?> 
					 </select>	<br>
				<input type="submit" value="Allocate" class="btn btn-info btn-lg"><br><br>

			</form>

		</div>
		<div id="feed" class="tab-pane fade"><br><br>
		   <form action="fafeed_view.php" method="post">
			<?php
					$result=array();
					$subjectName = 'SELECT name,nitcuserid FROM faculty where name!=""';
			          $subject = mysqli_query($db,$subjectName) or die('Could not look up user information; ' . mysqli_error($db));
					while($row=$subject->fetch_assoc())
					{
						$result[]=$row;
					}
					$le=sizeof($result);
					$le--;
				?>
				<select name="nitid" class="form-control" style="width: 300px;height:40px;font-size:20px;">					 
					 <option>Select faculty</option>					 
					 <?php 
					 while($le>=0)
					 { ?>	
								 
					<option  value="<?php  echo $result[$le]['nitcuserid'];?>"> <?php echo $result[$le]['name'].' ('.$result[$le]['nitcuserid'].')';?>
					</option>
					<?php $le--;}?> 
				</select>
				<input type="submit" class="btn btn-info btn-lg" value="Check Status">
			</form>
		</div>
		<div id="update" class="tab-pane fade"><br><br>
			<marquee behavior="alternate" dir="ltr" direction="left" dataFormatAs="text" scrolldelay="150" 
			     style="FONT-WEIGHT: bold; COLOR: brown; FONT-FAMILY: Monospace" onmouseover="this.stop();"
			     onmouseout="this.start();" id="MARQUEE1"> 
				Plz.... Update only once in every semester for update semester of all the student</marquee>
			<br><Button class="btn btn-default btn-lg"><a href="update.php" onclick="return confirm('Alert !!!!!!!  Are you sure?');">Update the semester</a></Button>
		</div>
		</div>
		</div>
		<br><br><br>
	</center>
</div>
</body>


</html>
<?php

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      ///echo $file_name;
      $expensions= array("csv","txt");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true)
      {
         move_uploaded_file($file_tmp,$folder.$file_name);
         
         	
      		$fi=fopen($folder.$file_name,'r');
      		$filecon=fread($fi,filesize($folder.$file_name));
      		//print $filecon;
      		$arr=explode("\n",$filecon);
      		$sql="insert into student(roll) values(";
      		for($i=0;$i<sizeof($arr);$i++)
      		{   
      			// $newarr=explode(",",$arr[$i]);
      			$fin=$sql."'".$arr[$i]."')";
      			//echo $fin;
      			$result = mysqli_query($db,$fin);
      			// echo $result;
      		}
      	
      }
      else{
         print_r($errors);
      }
   }
?>

<?php

   if(isset($_FILES['image1'])){
      $errors= array();
      $file_name = $_FILES['image1']['name'];
      $file_size =$_FILES['image1']['size'];
      $file_tmp =$_FILES['image1']['tmp_name'];
      $file_type=$_FILES['image1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));
      $expensions= array("csv","txt");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a csv file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true)
      {
         move_uploaded_file($file_tmp,$folder.$file_name);
         
         	
      		$fi=fopen($folder.$file_name,'r');
      		$filecon=fread($fi,filesize($folder.$file_name));
      		$arr=explode("\n",$filecon);
      		for($i=0;$i<sizeof($arr);$i++)
      		{    $sql="insert into subjects_taken(roll_no, subject1, subject2, subject3, subject4, subject5, subject6, subject7, subject8) values(";
      			$newarr=explode(",",$arr[$i]);
				for($j=0;$j<sizeof($newarr);$j++)
				{
					if($j==sizeof($newarr)-1)
					{
					    if($newarr[$j]=="")
					    	$sql=$sql."NULL)";
					    	else						
						$sql=$sql."'".$newarr[$j]."')";}
					else
					{
					 if($newarr[$j]=="")
					 $sql=$sql."NULL,";
					 else
					 $sql=$sql."'".$newarr[$j]."',";
					}
					
				}
				$result = mysqli_query($db,$sql);
      			echo $result;
      		}
      }
      else{
         print_r($errors);
      }
   }
?>

<?php
	if(isset($_POST['fid']))
	{
		$id=$_POST['fid'];
		$sql="insert into faculty(nitcuserid) values('$id')";
		$result=mysqli_query($db, $sql);
		if($result)
			echo '<script type=text/javascript> alert("!!!!!!!!Faculty Enrolled!!!!!!!!!")</script>';
		else
			echo '<script type=text/javascript> alert("Faculty Already Enrolled!!!!!!!!!")</script>';
			
		header("Refresh: 0 ;URL=faHome.php");
	}

?>

<?php
	if(isset($_POST['q']))
	{
		$q=$_POST['q'];
		$s="insert into questions(question)values('$q')";
		$sql=mysqli_query($db,$s);
		echo '<script type=text/javascript> alert("....Question inserted...")</script>';
		header("Refresh: 0 ;URL=faHome.php");
	}
?>

<?php
	if(isset($_POST['ques']))
	{
		$q1=$_POST['ques'];
	
		$q2="delete from questions where question='$q1'";
		$sql=mysqli_query($db,$q2);
		echo '<script type=text/javascript> alert("....Question deleted!!!!!!!...")</script>';
		header("Refresh: 0 ;URL=faHome.php");
	

	}
?>

<?php
if(isset($_POST['course']))
{
	$c=$_POST['course'];
	$sem=$_POST['curr_sem'];
	$sub=$_POST['subject'];
	$f_id=$_POST['faculty_id'];
	$q3="insert into teacher_allot(course,semester,subject,nitcuserid) values('$c','$sem','$sub','$f_id')";
	$sql=mysqli_query($db,$q3);
	echo '<script type=text/javascript> alert("Teacher alloted for classes!!!!!!!")</script>';
	header("Refresh: 0 ;URL=faHome.php");
}

?>


		      
