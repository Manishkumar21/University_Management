<?php
ob_start();
include_once("db_con.php");
if(isset($_POST['update']))
{
	$branch = $_POST['branch'];
	$class = $_POST['class'];
	$incharge = $_POST['incharge'];
	
	echo $update="update class_table set branch='$branch',class='$class',incharge='$incharge' where id = '$id'";
	
	// die();
	$execute=mysql_query($update);
	header("location:addclasslist.php");
}

?>