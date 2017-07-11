<?php
ob_start();
include_once("db_con.php");
$id = $_GET['id'];
$sql="delete from allotted_sub_table where id='$id'";
$execute=mysql_query($sql);
header("location:allotted_subject.php");
?>
