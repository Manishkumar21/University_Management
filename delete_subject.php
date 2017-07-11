<?php
ob_start();
include_once("db_con.php");
$sub_id = $_GET['sub_id'];
$sql="delete from subject_table where sub_id='$sub_id'";
$execute=mysql_query($sql);
header("location:subject.php");
?>
