<?php
ob_start();
include_once("db_con.php");
if (isset($_POST['Update']))
{

$id = $_GET['id'];

	echo "Title :";
	
	
	echo $Title = $_POST['Title'];
	echo "<br>";
	echo "Notice :";
	echo $Notice = $_POST['Notice'];
	echo "Date :";
	echo $Date = $_POST['Date'];
	
	
echo $Update="Update notice_table set Title='$Title', Notice='$Notice', Date='$Date' where id='$id'";
// die();
    
	$execute = mysql_query($Update);

	header("location:notice_board.php?Msg=sucess");

}
?>