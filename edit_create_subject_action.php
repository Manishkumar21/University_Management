<?php
ob_start();
include_once("db_con.php");
if(isset($_POST['update']))
{
	$sub_id=$_GET['sub_id'];
	$sub_name = $_POST['sub_name'];
	
	echo $update="update subject_table set sub_name='$sub_name' where sub_id = '$sub_id'";
	
	// die();
	$execute=mysql_query($update);
	header("location:subject.php");
}

?>