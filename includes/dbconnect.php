<?php
    $con=mysqli_connect("localhost", "root", "", "sistem_parkir");
    if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
    }
  ?>