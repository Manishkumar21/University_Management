<?php
ob_start();
session_start();
$sessionid = $_SESSION['admin_id'];

// die();

if($sessionid == "")
{
	header("location:admin_form.php?msg=loginfirst");
}
?>