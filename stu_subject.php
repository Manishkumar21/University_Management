<style type="text/css">
#page-wrapper
{
	height:570px;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Univ Management</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" href="dashboard.php">Univ Management</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font size="3px"><i class="fa fa-user"></i> 15lcs010 <b class="caret"></b></font></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="stu_dashboard.php"> <font size="3px"><i class="fa fa-fw fa-dashboard"></i>Student Dashboard</font></a>
                    </li>
					<li class="active">
                        <a href="stu_subject.php"><font size="3px"><i class="fa fa-fw fa-desktop"></i> Subject</font></a>
                    </li>
					<li>
                        <a href="#"><font size="3px"><i class="fa fa-fw fa-wrench"></i> Time Table</font></a>
                    </li>
					<li>
                        <a href="#"><font size="3px"><i class="fa fa-fw fa-wrench"></i> Assignment</font></a>
                    </li>
                   <li>
                        <a href="stu_notice_board.php"><font size="3px"><i class="fa fa-fw fa-arrows-v"></i> Notice Board</font></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Class Teacher
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="stu_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Class
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                    <div>
<?php
ob_start();
include_once("db_con.php");
?><hr>
<font size="1">
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped" border="1" width="97%" align="center">
<tr class="success">
<td width="150px" align="center"><b>Allotted Subject Id</b></td>
<td align="center"><b>Class</b></td>
<td align="center"><b>Teacher</b></td>
<td align="center"><b>Subject</b></td>
</tr>
<?php
$sql="select * from allotted_sub_table order by id ASC";
$execute=mysql_query($sql);
while($fetch=mysql_fetch_array($execute))
{
	$i++;
?>
<tr class="warning">
<td align="center"><?php echo $i; ?></td>
<td align="center"><?php echo $fetch['class']; ?></td>
<td align="center"><?php echo $fetch['teacher']; ?></td>
<td align="center"><?php echo $fetch['subject']; ?></td>
</tr>
<?php
}
?>
</table>
</font>
</div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
