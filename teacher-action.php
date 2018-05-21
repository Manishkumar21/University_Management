<?php
ob_start();
if (isset($_POST['sub5']))
{
	echo $t_name = $_POST['t_name'];
	echo $gender = $_POST['gender'];
	echo $b_day = $_POST['b_day'];
	echo $address =$_POST['address'];
	echo $m_no =$_POST['m_no'];
	echo $email =$_POST['email'];
	echo $pass =$_POST['pass'];
	echo $qualification =$_POST['qualification'];
	echo $department =$_POST['department'];
	include_once("db_con.php");
	echo $query="insert into teacher_table set t_name='$t_name',gender='$gender',b_day='$b_day',
	address='$address',m_no='$m_no',email='$email',pass='$pass',
	qualification='$qualification',department='$department'";
	$execute = mysql_query($query);
	if($execute==1)
	{
		header("location:teacher_info.php?msg=Teacher_Created");
	}
	else
	{
		header("location:teacher_info.php?msg=Try_Again");
	}
}
?>