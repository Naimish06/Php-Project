<?php
  include "header.php";
  session_start();
?>  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PROLOG Infotech - Contact us</title>
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
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

</head>

<body>
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="inner-heading">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="span8">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
            <li class="active">Contact</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
    <section id="content">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14763.42734598954!2d70.7671899!3d22.3212535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6020bdb7405bdde!2sPROLOG%20INFOTECH!5e0!3m2!1sen!2sin!4v1657793278778!5m2!1sen!2sin" width="100%" height="380" style="border:0;" allowfullscreen></iframe>
          <?php
            if(isset($_POST['submit']))
            {
              error_reporting(0);
              include "connection.php";

              $nm=$_POST['name'];
              $em=$_POST['email'];
              $sub=$_POST['subject'];
              $msg=$_POST['message'];

              $qry="insert into contact_data (name,email,message,subject) values ('$nm','$em','$sub','$msg')";
              $c=mysqli_query($con,$qry);

              if($c)
              {
                echo "<script>
                  alert('Our company sortly contact with you.');
                </script>";
              }
              else
              {
                echo "<script>
                  alert('your contact details not submited.');
                </script>";
              }

            }
          ?>
      <div class="container">
        <div class="row">
          <div class="span12">
            <h4>Get in touch with us by filling <strong>contact form below</strong></h4>

            <form  method="post" role="form" class="contactForm">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <p class="text-center">
                    <input type="submit" class="btn btn-large btn-theme margintop10" name="submit" value="Submit message">
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php
  include "footer.php";
?>
</body>

</html>
