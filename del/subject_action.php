<?php
ob_start();
if (isset($_POST['create']))
{
	echo $sub_name = $_POST['sub_name'];
	include_once("db_con.php");
	echo $query="insert into subject_table set sub_name='$sub_name'";
	$execute = mysql_query($query);
	if($execute==1)
	{
		header("location:subject.php?msg=Subject_Created");
	}
	else
	{
		header("location:create_subject.php?msg=Try_Again");
	}
}
?>