<?php
ob_start();

include_once("session_check.php");

?>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"> <font size="3px"><i class="fa fa-fw fa-dashboard"></i>Dashboard</font></a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#stu">
						<font size="3px"><i class="fa fa-fw fa-bar-chart-o"></i> Student 
						<i class="fa fa-fw fa-caret-down"></i></font></a>
                        <ul id="stu" class="collapse">
                            <li class="active">
                                <a href="enroll-student.php"><font size="3px">Enroll Student</font></a>
                            </li>
                            <li>
                                <a href="stu_info.php"><font size="3px">All Student Information</font></a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#tea">
						<font size="3px"><i class="fa fa-fw fa-table"></i> Teacher 
						<i class="fa fa-fw fa-caret-down"></i></font></a>
                        <ul id="tea" class="collapse">
                            <li>
                                <a href="create-teacher.php"><font size="3px">Create Teacher</font></a>
                            </li>
                            <li>
                                <a href="teacher_info.php"><font size="3px">All Teacher Information</font></a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="class.php"><font size="3px"><i class="fa fa-fw fa-edit"></i> Class</font></a>
                    </li>
					<li>
                        <a href="subject.php"><font size="3px"><i class="fa fa-fw fa-desktop"></i> Subject</font></a>
                    </li>
					<li>
                        <a href="#"><font size="3px"><i class="fa fa-fw fa-wrench"></i> Time Table</font></a>
                    </li>
                   <li>
                        <a href="notice_board.php"><font size="3px"><i class="fa fa-fw fa-arrows-v"></i> Notice Board</font></a>
                    </li>
                    <li>
                        <a href="account.php"><font size="3px"><i class="fa fa-fw fa-dashboard"></i> Account</font></a>
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
                            Add Student
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>Add Personal Information
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
					<form name="stu" method="post" action="stu_action.php">
                    <div class="col-lg-4">

                        <form role="form">

                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="S_Name">
                            </div>
                   </div>
					<div class="col-lg-4">
									<div class="form-group">
                                    <label for="Select">Gender</label>
                                    <select id="Select" class="form-control" name="Gender">
										<option>--Select--</option>
                                        <option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Others">Other</option>
                                    </select>
                                </div>
                    </div>
					<div class="col-lg-4">


                            <div class="form-group">
                                <label>Birthday</label>
                                <input class="form-control" name="B_Day">
                            </div>
                    </div>
					<div class="col-lg-4">


                            <div class="form-group">
                                <label>Father Name</label>
                                <input class="form-control" name="Father_Name">
                            </div>
                    </div>
					<div class="col-lg-4">


                            <div class="form-group">
                                <label>Father Occupation</label>
                                <input class="form-control" name="Father_Occupation">
                            </div>
                    </div>
					<div class="col-lg-4">


                            <div class="form-group">
                                <label>Father Contact Number</label>
                                <input class="form-control" name="Father_No">
                            </div>
                    </div>
					<div class="col-lg-4">


                            <div class="form-group">
                                <label>Mother Name</label>
                                <input class="form-control" name="Mother_Name">
                            </div>
                    </div>
					<div class="col-lg-4">


                            <div class="form-group">
                                <label>Mother Occupation</label>
                                <input class="form-control" name="Mother_Occupation">
                            </div>
                    </div>
					<div class="col-lg-4">



                            <div class="form-group">
                                <label>Mother Contact Number</label>
                                <input class="form-control" name="Mother_No">
                            </div>
                    </div>
					<div class="col-lg-4">

                        

                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="Address"></textarea>
                            </div>
                    </div>
					<div class="col-lg-4">

                        <form role="form">

                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input class="form-control" name="M_No">
                            </div>
                    </div>
					<div class="col-lg-4">

                       

                            <div class="form-group">
                                <label>Email Id</label>
                                <input class="form-control" name="Email">
                            </div>
                    </div>
					<div class="col-lg-4">

                     

                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" name="Photo">
                            </div>
							<button type="submit" class="btn btn-primary" name="sub6">Submit</button>
                    </div>
					</form>
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
