<?php
    session_start();
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PROLOG Infotech - Book Appointment</title>
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
  <link href="form.css" rel="stylesheet" />
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
              <h2>Book Appointment</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active"><a hreff="#">Book Appointment</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <?php 
      if(isset($_POST["submit"]))
      {
        // error_reporting(0);
        include "connection.php";

        $nm=$_POST['user_name'];
        $em=$_POST['user_email'];
        $no=$_POST['user_num'];
        $res=$_POST['appoinment_for'];
        $desc=$_POST['appoinment_desc'];
        $dat=$_POST['date'];
        $tim=$_POST['time'];
        $dur=$_POST['duration'];

        $qry="INSERT INTO appoinment (name,email,contact_no,appoinment_for,appoinment_desc,date,time,how_long,status) VALUES ('".$nm."','".$em."','".$no."','".$res."','".$desc."','".$dat."','".$tim."','".$dur."','Pending'); ";
        $c=mysqli_query($con,$qry) or die("query fail" );

        if($c)
        {
          echo "<script>
            alert('Your Appointment is Book ');
          </script>";
        }
        else{
          echo "<script>
            alert('Your Appointment Booking is failed ');
          </script>";
        }
      }
    ?>       
    <div class="container">
      <div class="row">
        <div class="span12">
          <form  method="post"  class="form-bg">
            <fieldset>
              <legend><span class="number">1</span>Your basic details</legend>
              <label for="name">Name*:</label>
              <input type="text" id="name" name="user_name" placeholder="Atchyut (only first names)" required pattern="[a-zA-Z0-9]+">

              <label for="mail">Email*:</label>
              <input type="email" id="mail" name="user_email" placeholder="abc@xyz.com" required>

              <label for="tel">Contact Num:</label>
              <input type="tel" id="tel" placeholder="Include country code" name="user_num">

              <legend> <span class="number">2</span>Appointment Details</legend>
              <label for="appointment_for">Appointment for*:</label>
              <select id="appointment_for" name="appoinment_for" required>
                <option value="coffee">Coffee</option>
                <option value="meeting">Meeting</option>
                <option value="Business Solution">Business Solution</option>
                <option value="Inquiry">Inquery</option>
              </select>
              <label for="appointment_description">Appointment Description:</label>
              <input type="textarea" id="appointment_description" name="appoinment_desc" placeholder="I wish to get an appointment to skype for resolving a software problem.">
              <label for="date">Date*:</label>
              <input type="date" name="date" id="date" value="" required>
              <br>
              <label for="time">Time*:</label>
              <input type="time" name="time" id="time" value="" required>
              <br>
              <label for="duration">How Long??(Minutes)</label>
              <input type="radio" name="duration" value="30" checked> 30
              <input type="radio" name="duration" value="60"> 60
              <input type="radio" name="duration" value="90"> 90
              <input type="radio" name="duration" value="more"> more
            </fieldset>
              <input type="submit" id="submit" name="submit" value="Request For Appointment">
          </form>                 
        </div>
      </div>
    </div>
          <?php
            include "footer.php";
          ?>
</body>

</html>
