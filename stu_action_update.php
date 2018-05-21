<?php
ob_start();
include_once("db_con.php");
if(isset($_POST['update']))
{
	$stud_id=$_GET['stud_id'];
	$S_Name = $_POST['S_Name'];
	$Gender = $_POST['Gender'];
	$B_Day = $_POST['B_Day'];
	$Father_Name = $_POST['Father_Name'];
	$Father_Occupation = $_POST['Father_Occupation'];
	$Father_No = $_POST['Father_No'];
	$Mother_Name = $_POST['Mother_Name'];
	$Mother_Occupation = $_POST['Mother_Occupation'];
	$Mother_No = $_POST['Mother_No'];
	$Address = $_POST['Address'];
	$M_No = $_POST['M_No'];
	$Email = $_POST['Email'];
	$Photo = $_POST['Photo'];
	
	echo $update="update student_table set S_Name='$S_Name',Gender='$Gender',B_Day='$B_Day',Father_Name='$Father_Name',Father_Occupation='$Father_Occupation',
	Father_No='$Father_No',Mother_Name='$Mother_Name',Mother_Occupation='$Mother_Occupation',Mother_No='$Mother_No',Address='$Address',M_No='$M_No',
	Email='$Email',Photo='$Photo' where stud_id = '$stud_id'";
	
	// die();
	$execute=mysql_query($update);
	header("location:stu_info.php");
}

?>