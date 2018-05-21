<?php
ob_start();
include_once("db_con.php");
if(isset($_POST['update']))
{
	$teach_id=$_GET['teach_id'];
	$t_name = $_POST['t_name'];
	$gender = $_POST['gender'];
	$b_day = $_POST['b_day'];
	$address = $_POST['address'];
	$m_no = $_POST['m_no'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$qualification = $_POST['qualification'];
	$department = $_POST['department'];
	
	echo $update="update teacher_table set t_name='$t_name',gender='$gender',b_day='$b_day',
	address='$address',m_no='$m_no',email='$email',pass='$pass',
	qualification='$qualification',department='$department' where teach_id = '$teach_id'";
	
	// die();
	$execute=mysql_query($update);
	header("location:teacher_info.php");
}

?>