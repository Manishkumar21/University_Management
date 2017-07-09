<?php
ob_start();
if (isset($_POST['add']))
{
	echo $Name = $_POST['Name'];
	echo $username = $_POST['username'];
	echo $password = $_POST['password'];
	include_once("db_con.php");
	echo $query="insert into admin_table set Name='$Name',username='$username',password='$password'";
	$execute = mysql_query($query);
	if($execute==1)
	{
		header("location:all_admin_list.php?msg=Admin_Created");
	}
	else
	{
		header("location:account.php?msg=Try_Again");
	}
}
?>