<style type="text/css">
#page-wrapper
{
	height:570px;
}
</style>
<html>
<head>
	<link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
	
	    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
</head>
<body>
<div class="outer">
<div class="inner">

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Login Form
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Back To Login Page</a>
                            </li>
                            <li>
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                    <div class="col-lg-6">
                        <h1>Enter Username And Password</h1>

                        <form method="post" action="action.php" name="form">



                                <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Username" name="username" value="<?php if(isset($_COOKIE['email']) ) { echo $_COOKIE['email']; } ?>">
								</div>

                                <div class="form-group input-group">
                                <span class="input-group-addon">*</span>
                                <input type="password" class="form-control" name="password" value="<?php if(isset($_COOKIE['password']) ) { echo $_COOKIE['password']; } ?>">
								</div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="rememberme" value="re">Remember Me 
                                    </label>
                                </div>

                                <input type="submit"  name="submit4" value="Login">



                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</div>
</div>
</body>

</html>
