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

  <title>PROLOG Admin - Approved Appointment data</title>

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
    <h1 class="h3 mb-2 text-gray-800">Approved Appointment</h1>
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Approved appointment Table</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
              <th>Id</th>
                <th>Name</th>
                <th>email</th>
                <th>contact no</th>
                <th>appoinment_for</th>
                <th>appoinment_desc</th>
                <th>date</th>
                <th>time</th>
                <th>how_long</th>
                <th>Status</th>
              </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>email</th>
                <th>contact no</th>
                <th>appoinment_for</th>
                <th>appoinment_desc</th>
                <th>date</th>
                <th>time</th>
                <th>how_long</th>
                <th>Status</th>
              </tr>
            </tfoot>
            <tbody>
            <?php
                include("connection.php");
              $selectquery = "select * from appoinment where status='approve'";
              $query = mysqli_query($con,$selectquery);
              while( $res = mysqli_fetch_array($query))
                    {
                      ?>
                      <tr>
                          <td> <?php echo $res ['appointment_id'];?>          </td>
                          <td> <?php echo $res ['name'];  ?>  </td>
                          <td> <?php echo $res ['email'];  ?>  </td>
                          <td> <?php echo $res ['contact_no'];  ?>  </td>
                          <td> <?php echo $res ['appoinment_for'];  ?>  </td>
                          <td> <?php echo $res ['appoinment_desc'];  ?>  </td>
                          <td> <?php echo $res ['date'];  ?>  </td>
                          <td> <?php echo $res ['time'];  ?>  </td>
                          <td> <?php echo $res ['how_long'];  ?>  </td>
                          <td> <?php echo $res ['status'];  ?>  </td>
                          </td>
                        </tr>
                      <?php  
                    }
                      ?>
            </tbody>
          </table>
        </div>
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