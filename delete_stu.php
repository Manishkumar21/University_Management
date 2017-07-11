<?php
ob_start();
include_once("db_con.php");
$stud_id = $_GET['stud_id'];
$sql="delete from student_table where stud_id='$stud_id'";
$execute=mysql_query($sql);
header("location:view_all_entry.php");
?>
