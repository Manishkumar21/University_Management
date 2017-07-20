<?php
ob_start();
include_once("db_con.php");
if (isset($_POST['add']))
{

	echo "Title :";
	echo $Title = $_POST['Title'];
	echo "<br>";
	echo "Notice :";
	echo $Notice = $_POST['Notice'];
	echo "Date :";
	echo $Date = $_POST['Date'];
	
	
echo $query="insert into notice_table set Title='$Title', Notice='$Notice', Date='$Date'";
$execute = mysql_query($query);
if($execute==1)
{
	header("location:notice_board.php?Msg=sucess");
}
else
{
	header("location:add_notice.php?Msg=not sucess");
}
}
?>