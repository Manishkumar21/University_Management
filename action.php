<?php
ob_start();
if (isset($_POST['submit4']))
{
	echo "Username :";
	echo $username = $_POST['username'];
	echo "<br>";
	echo "Password :";
	echo $password = $_POST['password'];
	include_once("db_con.php");
	$sql="select * from admin_table where username='$username' AND password='$password'";
	$exe=mysql_query($sql);
	$rows = mysql_num_rows($exe);
	if($rows>0)
	{
		
		if(isset($_POST['rememberme'])){
			
			setcookie("username", $username, time()*60);
			setcookie("password", $password, time()*60);
				
			
		}
		
		
		
		$fetch = mysql_fetch_array($exe);
		$uniqueid = $fetch['admin_id'];
		
		session_start();
		$_SESSION['admin_id'] = $uniqueid;
				
		header("location:dashboard.php?msg=LoginSuccess");
	}
	else
	{
		header("location:admin_form.php?msg=LoginFailed");
	}
}
?>