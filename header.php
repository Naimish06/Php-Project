<!-- <?php session_start(); ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- <meta http-equiv="refresh" content="15"> -->
  <title>Prolog Infotech - It consultancy Services and Business Solution</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons 
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" /> -->
  <link rel="shortcut icon" href="ico/icon.png" />

</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: <a class="pho" href="https://g.page/PROLOG-INFOTECH?share" target="_blank"> 409, Viral Heights, Near Ayodhya Chowk,
                150 Ring Road, Rajkot-360005</a></li>
              <li>Call us: <i class="icon-phone"></i><a class="pho" href="tel: +91 9824091760 ">+91 9824091760</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">

              <?php

              error_reporting(0);
              if (isset($_SESSION['unm'])) { ?>
                <ul>
                  <li><?php echo "welcome " . $_SESSION['unm']; ?></li>
                  <li> <a href="logout.php">Log Out</a></li>
                </ul>
              <?php
              } else { ?>
                <ul>
                  <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                  <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
                </ul>
              <?php
              } ?>

            </div>
            <!-- Register data -->
            <?php
            if (isset($_POST['sign'])) {

              include("connection.php");
              error_reporting(0);
              $fnm = $_POST['fname'];
              $lnm = $_POST['lname'];
              $gen = $_POST['gen'];
              $mo = $_POST['mobno'];
              $mail = $_POST['email'];
              $passw = $_POST['pass'];


              $qry = "insert into register_data (first_name,last_name,gender,mobile_no,email,password) values ('$fnm','$lnm','$gen','$mo','$mail','$passw'); ";
              $c = mysqli_query($con, $qry);

              if ($c) {
                echo "<script>
                    alert('Registration is Sucessfully')
                    </script>";
              } else {
                echo "<script>
                    alert('Registration is Failed')
                    </script>";
              }
            }
            ?>
            <!--end register data -->
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="false">
              <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="index.php" method="post">
                  <div class="control-group">
                    <label class="control-label" for="inputFname">First Name</label>
                    <div class="controls">
                      <input type="text" id="inputfname" placeholder="first name" name="fname" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputLname">Last Name</label>
                    <div class="controls">
                      <input type="text" id="inputlname" placeholder="last name" name="lname" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputgender">Gender</label>
                    <div class="controls">
                      <input type="radio" id="inputgender" name="gen" value="Male" required> Male
                      <input type="radio" id="inputgender" name="gen" value="Female" required> Female
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputMobile">Mobile No</label>
                    <div class="controls">
                      <input type="text" id="inputMobile" placeholder="mobile no" name="mobno" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="email" id="inputEmail" placeholder="Email" name="email" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Password" name="pass" required>
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <div class="controls">
                      <input type="submit" class="btn" name="sign" value="register">
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->

            <?php
            if (isset($_POST["signin"])) {
              error_reporting(0);
              include "connection.php";
              extract($_POST);
              // $email = $_POST['$loginUsername'];
              // $pass = $_POST['$password'];
              $qry = "select * from register_data where email='" . $loginUsername . "' and password= '" . $loginPassword . "' ";
              $q = mysqli_query($con, $qry) or die("query fail" . mysqli_error($con));
              $row = mysqli_fetch_row($q);
              $count = mysqli_num_rows($q);
              $_SESSION['unm'] = $row[1];


              if ($count > 0) 
              {
                echo "<script> alert('login sucessfully') </script>";
              } 
               else 
                {
                  echo "<script> alert('adlogin fail') </script>";
                }
              }
            ?>


            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="post">

                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="email" id="inputText" placeholder="Username" name="loginUsername" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Password" name="loginPassword" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <input type="submit" class="btn" name="signin" value="sign in">
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->

            <?php
              if (isset($_POST['reset'])) 
              {
                // error_reporting(0);
                include "connection.php";
                extract($_POST);
                $em = $_POST['email'];
                $opass = $_POST['opass'];
                $npass = $_POST['npass'];

                $qry = "update register_data set password='" . $npass . "' where  password='" . $opass . "' ";
                $q = mysqli_query($con, $qry);

                if ($q) 
                {
                  echo "<script>
                      alert('Password is updated');
                    </script>";
                } else 
                {
                  echo "<script>
                      alert('Password is not updated');
                    </script>";
                }
              }
            ?>

            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="index.php" method="post">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputResetPassword">Old Password</label>
                    <div class="controls">
                      <input type="password" id="inputResetpassword" placeholder="Old Password" name="opass">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputResetPassword">New Password</label>
                    <div class="controls">
                      <input type="password" id="inputResetpassword" placeholder="New Password" name="npass">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <input type="submit" name="reset" value="Reset password">
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.php"><img src="img/logoh.png" alt="" class="logo" /></a>

            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="index.php">Home </i></a>
                    </li>
                    <li class="dropdown">
                      <a href="about.php">About </a>
                    </li>
                    
                    <li>
                      <a href="contact.php">Contact us</a>
                    </li>
                    <li>
                      <a href="ourwork.php">Our Work</a>
                    </li>
                    <li>
                      <a href="book_appointment.php">Book Appointment</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>


    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/portfolio/jquery.quicksand.js"></script>
    <script src="js/portfolio/setting.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.nivo.slider.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/animate.js"></script>

    <!-- Template Custom JavaScript File -->
    <script src="js/custom.js"></script>

</body>

</html>
<script>
  // window.onload = function() {
  //   if (!window.location.hash) {
  //     window.location =window.location + '#loaded';
  //     window.location.reload();
  //   }
  // }
</script>