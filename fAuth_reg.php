<?php
include("config.php");
if(isset($_POST['name']))
{
      $name = $_POST['name'];
	  $username = $_POST['nitcuserid'];
      $pword = $_POST['password'];
      $repword = $_POST['repassword'];	  
      $depart = $_POST['depart'];
	  $spec1 = $_POST['spe1'];
	  $spec2 = $_POST['spe2'];
	  if($spec2=="Course 2")
	  	$spec2=NULL;
	  $spec3 = $_POST['spe3'];
	  if($spec3=="Course 3")
	  	$spec3=NULL;
	  $mob = $_POST['mob'];
	  $seq="'".$_POST['sq']."'";
	  
	  
	if($pword==$repword)
	{
	 
		$sq="select nitcuserid,password from faculty where nitcuserid='$username'";
		 $res=mysqli_query($db,$sq);
	 	 $row = mysqli_fetch_array($res);
       	$count = mysqli_num_rows($res);
		if($count==1)
		{
			if($row['password']==NULL)
			{
			$p="update faculty set name='$name', password='$pword', dept='$depart', spec1='$spec1',spec2='$spec2',spec3='$spec3', mobile='$mob',sec_que=$seq where nitcuserid='$username'";
				$q=mysqli_query($db,$p);
				echo $db->error;
				if($q)
				{
					echo '<script type=text/javascript> alert("Regitered Succesfully Now You can Login")</script>';
			 		header("Refresh: 0 ;URL=fAuth.php");
				}
			}
			else
			{
				echo '<script type=text/javascript> alert("!!!!Already registered Login NOW!!!!")</script>';
		 		header("Refresh: 0 ;URL=fAuth.php");
			}
		}
		else
		{
			echo '<script type=text/javascript> alert("You are Not enrolled plz concetn to FA")</script>';
		 		header("Refresh: 0 ;URL=fAuth.php");
		}
	}  
	else
	{
		echo '<script type=text/javascript> alert("re-password should match with password")</script>';
		 		header("Refresh: 0 ;URL=fAuth.php");
	}
}	
?>	
