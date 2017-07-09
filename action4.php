<?php
ob_start();
if (isset($_POST['submit2']))
{

	header("location:teacher_form.php?msg=LoginSuccess");
}
else
{
	header("location:index.php?msg=LoginFailed");
}
?>