<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PROLOG Infotech - It consultancy Services and Business Solution</title>
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
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />  -->
  <link rel="shortcut icon" href="ico/icon.png" /> 

</head>
<body>
          <!-- feedback data table -->
            <?php
            if(isset($_POST['feedback']))
            {
                error_reporting(0);
                include "connection.php";
                $nm = $_POST['fname'];
                $em = $_POST['femail'];
                $fcomm = $_POST['fcomment'];

                $qry="insert into feedback_data (name,email,comment) values ('".$nm."','".$em."','".$fcomm."')";
                $q=mysqli_query($con,$qry);


                if($q)
                {
                  echo "<script>
                  alert('Thank you  For Give Your Feedback ')
                  </script>";
                }
                else
                {
                  echo "<script>
                  alert('Error in Send Feedback')
                  </script>";
                }
            }
            ?>
          <!-- feedback data table -->

          <!-- Feedback Modal -->
           <div id="myfeedback" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Send Your <strong> Feedback </strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="#" method="post">
                <div class="control-group">
                    <label class="control-label" for="inputText"> Name </label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="Enter Name" name="fname" required>
                    </div>
                  </div>  
                <div class="control-group">
                    <label class="control-label" for="inputEmail"> Email </label>
                    <div class="controls">
                      <input type="email" id="inputText" placeholder="Email" name="femail" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputFeedbackComment"> Comment </label>
                    <div class="controls">
                      <input type="text" id="inputFeedbackComment" placeholder="Comment" name="fcomment" required >
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <input type="submit" class="btn" name="feedback" value="Submit Query">
                    </div>
                    
                  </div>
                </form>
              </div>
            </div>
            <!-- end feedbacck modal -->




<section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="widget">
              <h5 class="widgetheading"><a href="index.php" ><img src="img/logof.png" ></a></h5>
              <p>
                  <b>PROLOG INFOTECH </b> we look after the complete development of your mobile and web applications along with fully functional websites.
              </p>
              <P>
                  It is a reputed web design company based in Rajkot, which creates beautiful website design themes that cater to the needs of the customers. We have a team of professional dedicated web designers who have years of expertise and proficiency to create compelling and eye-catching website designs.
              </P>
              <p>
                  We are a young web design company in Rajkot, strengthened with immense expertise in the fields of graphic design, web design and Web Development.
              </p>
              
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Quick Links</h5>
              <ul class="link-list">
                <li><a href="index.php"><i class="icon-home"></i>Home</a></li>
                <li><a href="ourwork.php"><i class="icon-comments-alt"></i> Our Work </a></li>
                <li><a href="book_appointment.php"><i class="icon-desktop"></i> Book Appointment </a></li>
                <li><a href="about.php"><i class="icon-group"></i> About us </a></li>
                <li><a href="contact.php"><i class="icon-envelope"></i> Contacts </a></li>
                <li><a href="#myfeedback" data-toggle="modal"><i class="icon-reply" ></i>  Feedback </a></li>
              </ul>
            </div>
          </div>
          
  
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
								<a   href="https://g.page/PROLOG-INFOTECH?share" target="_blank">
                  409, Viral Heights, Near Ayodhya Chowk,150 Ring Road, Rajkot-360005
                </a>
					 		</address>
              <p>
                <a  href="tel: +91 9824091760 "><i class="icon-phone"></i>  +91 9824091760</a> -<a href="tel: +91 7777909189 "> +91 7777909189 </a><br>
                <a  href="mailto: prologwebservice@gmail.com "><i class="icon-envelope-alt"></i> prologwebservice@gmail.com </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; <a href="prologinfotech.com" > PROLOG INFOTECH </a>- All right reserved.</span>
                </p>
                <div class="credits">
                  Developed by <a href="#">Naimish Patel</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="https://www.facebook.com/766546403372465/posts/pfbid0QiBn1mYfYdjw2GVD8ZrxaB3psA1XW8PTGYkH4foEnFF4iXQJwSkvCWmecWgZYnSNl/" data-placement="bottom" title="Facebook" target="blank"><i class="icon-facebook icon-square icon-32"></i></a></li>
                <li><a href="https://www.linkedin.com/in/prolog-infotech-805671234" data-placement="bottom" target="blank" title="Linkedin"><i class="icon-linkedin icon-square icon-32"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square icon-32"></i></a></li>
                <li><a href="https://prologinfotech.com/" target="blank" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square icon-32"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  

</body>
</html>
