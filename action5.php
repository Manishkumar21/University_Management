<?php
ob_start();
if (isset($_POST['submit4']))
{
	echo $email = $_POST['email'];
	echo $pass = $_POST['pass'];
	include_once("db_con.php");
	$sql="select * from teacher_table where email='$email' AND pass='$pass'";
	$exe=mysql_query($sql);
	$rows = mysql_num_rows($exe);
	if($rows>0)
	{
		
		if(isset($_POST['rememberme'])){
			
			setcookie("email", $email, time()*60);
			setcookie("pass", $pass, time()*60);
				
			
		}
		
		
		
		$fetch = mysql_fetch_array($exe);
		$uniqueid = $fetch['teach_id'];
		
		session_start();
		$_SESSION['teach_id'] = $uniqueid;
				
		header("location:dashboard.php?msg=LoginSuccess");
	}
	else
	{
		header("location:admin_form.php?msg=LoginFailed");
	}
}
?>