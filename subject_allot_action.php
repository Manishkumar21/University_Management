<?php
ob_start();
if (isset($_POST['allot']))
{
	echo $class = $_POST['class'];
	echo $teacher = $_POST['teacher'];
	echo $subject = $_POST['subject'];
	include_once("db_con.php");
	echo $query="insert into allotted_sub_table set class='$class',teacher='$teacher',subject='$subject'";
	$execute = mysql_query($query);
	if($execute==1)
	{
		header("location:allotted_subject.php?msg=Subject_Allotted");
	}
	else
	{
		header("location:allot_subject.php?msg=Try_Again");
	}
}
?>