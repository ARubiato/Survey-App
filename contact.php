<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact</title>

  <!-- Bootstrap -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Multi
    Theme URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
              <a href="index.html"><h1><span>S</span>urvey</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.php">Home</a></li>
                <li role="presentation"><a href="survey.php">Survey</a></li>
                <li role="presentation"><a href="contact.php" class = "active">Contact</a></li>
                <li role="presentation"><a href="login.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="contact-form">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
 <div class="contact-info">
      <div class="col-md-8">
        <p>Feel free to contact us. We are willing to help you with any issues you may encounter with our products</p>
      </div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="form-group col-md-5">
            <div class = "form-group col-md-1"> <h5>Name</h5></div>
            <input type="text" name="Name" class="form-control" id="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-5">
            <div class = "form-group col-md-1"> <h5>Email</h5></div>
            <input type="email" class="form-control" name="Email" id="Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>

          <div class="form-group col-md-5">
            <div class = "form-group col-md-1"> <h5>Subject</h5></div>
            <input type="text" name="Subject" class="form-control" id="Subject" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>

           <div class="form-group col-md-5">
            <div class = "form-group col-md-1"> <h5>Budget</h5></div>
            <input list="Budget" name="Budget" class ="form-control" /></label>
            <datalist id="Budget">
            <option value="$1000-$2000"> </option>
            <option value="$2000-$4000"></option>
            <option value="$4000-$6000"></option>
            <option value="$6000-$8000"></option>
            <option value="$8000-$10000"></option>
            </datalist> 
  </div>

          <div class="form-group col-md-10">
            <div class = "form-group col-md-1"> <h5>Message</h5></div>
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validation"></div>
          </div>

         <div class="form-group col-md-10"> 
            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div> 
          </div>
        </div>

    </div>
</form>



  </body>
  </html>