<?php
       include("connection.php");

            $id=$_GET['id'];
            $deletequery="DELETE FROM appoinment WHERE appointment_id=$id"; 
            $query = mysqli_query($con,$deletequery);
            header('location:book_app.php');
?>
