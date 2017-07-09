<?php
ob_start();
if (isset($_POST['submit3']))
{

	header("location:stu_dashboard.php?msg=EnteredSuccessfully");
}
else
{
	header("location:index.php?msg=TryAgain");
}
?>