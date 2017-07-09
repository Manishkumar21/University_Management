<?php
ob_start();
if (isset($_POST['submit1']))
{

	header("location:admin_form.php?msg=LoginSuccess");
}
else
{
	header("location:index.php?msg=LoginFailed");
}
?>