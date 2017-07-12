<?php
ob_start();
include_once("db_con.php");
if(isset($_POST['update']))
{
	$id=$_GET['id'];
	$class = $_POST['class'];
	$teacher = $_POST['teacher'];
	$subject = $_POST['subject'];
	
	echo $update="update allotted_sub_table set class='$class',teacher='$teacher',subject='$subject' where id = '$id'";
	
	// die();
	$execute=mysql_query($update);
	header("location:allotted_subject.php");
}

?>