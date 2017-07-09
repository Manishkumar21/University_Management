<?php
ob_start();
include_once("db_con.php");
if(isset($_POST['update']))
{
	$stud_id=$_GET['sub_id'];
	$S_Name = $_POST['sub_name'];
	
	echo $update="update subject_table set sub_name='$sub_name' where sub_id = '$sub_id'";
	
	// die();
	$execute=mysql_query($update);
	header("location:subject.php");
}

?>