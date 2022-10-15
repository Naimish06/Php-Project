<?php
    $con=mysqli_connect("localhost","root","") or die ("not Connected");
    mysqli_select_db($con,"visitor") or die("Database is not select");
?>