<!DOCTYPE html>
<?php
<<<<<<< HEAD
$Username = '';
$Password = '';
session_start();
 $con = mysqli_connect('localhost','root','admin123','info') or die ("Failed to connect database" .mysqli_error($con));

 if (isset($_GET['Username'])) {
    $Username = $_GET['Username'];
}

if (isset($_GET['Password'])) {
    $Password = $_GET['Password'];
}



$query = "SELECT Username FROM information WHERE Username = '$Username' and `Password = '$Password'";
=======
$Email = '';
$Password = '';

include('connect.php');
session_start();
 $con = mysqli_connect('localhost','root','admin123','info') or die ("Failed to connect database" .mysqli_error($con));

 if (isset($_GET['Email'])) {
    $Email = $_GET['Email'];
}

if (isset($_GET['Password'])) {
    $Email = $_GET['Password'];
}

if($count == 1) {
         session_register("Email");
         $_SESSION['Email'] = $Email;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }


$query = "SELECT Email FROM information WHERE Email = '$Email' and `Password = '$Password'";
>>>>>>> 5c5e67fc4d341a23111924f9d8ea8637e288dedc

?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<<<<<<< HEAD
    <title>Login</title>
=======
    <title>SB Admin 2 - Bootstrap Admin Theme</title>
>>>>>>> 5c5e67fc4d341a23111924f9d8ea8637e288dedc

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
<<<<<<< HEAD
                        <h3 class="panel-title">LOG IN</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method = "post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="Username" type="text" autofocus>
=======
                        <h3 class="panel-title">LOGIN</h3>
                    </div>
                    <div class="panel-body">
                        <form action="login.php" method = "post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="Email" type="email" autofocus>
>>>>>>> 5c5e67fc4d341a23111924f9d8ea8637e288dedc
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="Password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                 </fieldset>
                                <!-- Change this to a button or input when using this as a form -->
<<<<<<< HEAD
                               <a href = "index.html" class="btn btn-primary col-md-4 col-md-offset-4">Submit</button></a></div>  &nbsp;<p> Don't have an account? Click <a href = "sign-up.html"> <u>here</u></a>!</p>
=======
                               <input type = "submit" class="btn btn-lg btn-success btn-block"></a> &nbsp;<p> Don't have an account? Click <a href = "sign-up.php"> <u>here</u></a>!</p>
>>>>>>> 5c5e67fc4d341a23111924f9d8ea8637e288dedc
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
