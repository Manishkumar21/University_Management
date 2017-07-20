<?php
ob_start();
session_start();
session_destroy();
$_SESSION['admin_id']="";

header("location:admin_form.php?msg=Logout");

?>
