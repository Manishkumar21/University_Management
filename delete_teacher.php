<?php
ob_start();
include_once("db_con.php");
$teach_id = $_GET['teach_id'];
$sql="delete from teacher_table where teach_id='$teach_id'";
$execute=mysql_query($sql);
header("location:teacher_info.php");
?>
