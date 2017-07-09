<?php
ob_start();
if (isset($_POST['allot']))
{
	echo $branch = $_POST['branch'];
	echo $class = $_POST['class'];
	echo $incharge = $_POST['incharge'];
	include_once("db_con.php");
	echo $query="insert into class_table set branch='$branch',class='$class',incharge='$incharge'";
	$execute = mysql_query($query);
	if($execute==1)
	{
		header("location:addclasslist.php?msg=Teacher_Created");
	}
	else
	{
		header("location:class.php?msg=Try_Again");
	}
}
?>