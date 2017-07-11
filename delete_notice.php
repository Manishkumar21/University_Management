<?php
ob_start();

include_once("db_con.php");

$id = $_GET['id'];
$sql = "delete from notice_table where id='$id' ";
$execute =mysql_query($sql);
header("location:notice_board.php");
?>