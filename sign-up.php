<!DOCTYPE html>
<?php
ob_Start();
$Name = '';
$Email = '';
$Password = '';
  #include_once('connect.php');

  $empty = false;

  session_start();
    $con = mysqli_connect('localhost','root','admin123','info') or die ("Failed to connect database" .mysqli_error($con));

    if (isset($_POST['Name'])) {
    $Name = $_POST['Name'];
}

if (isset($_POST['Email'])) {
    $Email = $_POST['Email'];
}

if (isset($_POST['Password'])) {
    $Password = $_POST['Password'];
}


if(empty($Name)){
  $error = true;
  $nameError = "Please enter your full name!";

}

if(empty($Email)){
  $error = true;
  $nameError = "Please enter your email address!";
}

if(empty($Password)) {
  $error = true;
  $nameError = "Please enter your password!";
}

    $query = "INSERT INTO information (Name, Email, Password)  VALUES ('$Name' , '$Email', '$Password')" or die(mysqli_error());

    $result = mysqli_query($con,$query);


mysqli_close($con);
?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign-up</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>      
       
        <div class = "container">
            
            <div class="col-md-6 col-md-offset-3 col-lg-7 col">
             
             <div class="login-panel panel panel-default">
                <div class = "panel-heading">
                      <center> <h3 class = "panel-title">SIGN UP</h3></center>
                  </div>
                 <div class="panel-body">
                     <div class="col-lg-12">

                           <form action="sign-up.php" method = "post">
                            <div class = "form-group">
                                 <input class = "form-control" placeholder="Name" name = "Name" type="text" autofocus>
                            
                            </div>
                           <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="Email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="Password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <input type = "submit" class="btn btn-lg btn-success btn-block" >
                                <p>Already have an account? Click<a href = "login.html"> <u>here</u></a>!</p>
                          </form>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </body>
</html>