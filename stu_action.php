<?php
ob_start();
if (isset($_POST['sub6']))
{
	echo $S_Name = $_POST['S_Name'];
	echo $Gender = $_POST['Gender'];
	echo $B_Day = $_POST['B_Day'];
	echo $Father_Name =$_POST['Father_Name'];
	echo $Father_Occupation =$_POST['Father_Occupation'];
	echo $Father_No =$_POST['Father_No'];
	echo $Mother_Name =$_POST['Mother_Name'];
	echo $Mother_Occupation =$_POST['Mother_Occupation'];
	echo $Mother_No =$_POST['Mother_No'];
	echo $Address =$_POST['Address'];
	echo $M_No =$_POST['M_No'];
	echo $Email =$_POST['Email'];
	echo $Photo =$_POST['Photo'];
	include_once("db_con.php");
	echo $query="insert into student_table set S_Name='$S_Name',Gender='$Gender',B_Day='$B_Day',
	Father_Name='$Father_Name',Father_Occupation='$Father_Occupation',Father_No='$Father_No',Mother_Name='$Mother_Name',
	Mother_Occupation='$Mother_Occupation',Mother_No='$Mother_No',Address='Address',M_No='$M_No',Email='$Email',Photo='$Photo'";
	$execute = mysql_query($query);
	if($execute==1)
	{
		header("location:stu_info.php?msg=Student_Created");
	}
	else
	{
		header("location:enroll-student.php?msg=Try_Again");
	}
}
?>