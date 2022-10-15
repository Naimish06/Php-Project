<?php
  session_start();
  include "aheader.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PROLOG admin -update  appointment</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
     <!-- Page Wrapper -->
     <div id="wrapper">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Approve Pending Appointment</h1>
          <p class="mb-4"><b>Note*:</b> for approve appointment change status as 'approve'</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Approved apoointment</h6>
            </div>
            <div class="card-body">
				<form  method="post">
					<div class="form-group">
						<label>STATUS</label>
                        <?php
                            include("connection.php");
                              error_reporting(0);
                              $id = $_GET['id'];
                              $showquery = "select * from appoinment where appointment_id=$id";
                              $showdata = mysqli_query($con,$showquery);
                              $arrdata = mysqli_fetch_array($showdata);


                              if(isset($_POST['submit']))
                              {
                                  $ids = $_GET['id'];
                                  $status = $_POST['status'];
          
                                  $query = "update appoinment set appointment_id='$id',status='$status' where appointment_id='$ids'";
                                  $row=mysqli_query($con,$query);

                                  if($row > 0)
                                  {
                                    echo "<script>
                                          alert('Appointment Apporoved Sucessfully');
                                          document.location.replace('dashboard.php');
                                        </script>";
                            
                                  }
                                  else
                                  {
                                  echo "error:".mysqli_error($con);
                                  }
                                mysqli_close($con);
                              }

                        ?>
						<input type="text" class="form-control" value="<?php echo $arrdata ['status'];  ?>" name="status">
					</div>
					
					<input type="submit" name ="submit" class="btn btn-success" value="UPDATE" >
				</form>
            </div>
          </div>

        </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
<?php
  include "afooter.php";
?>