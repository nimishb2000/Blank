<?php
    $sname="localhost";
    $uname="root";
    $pswrd="admin";
    $conn=mysqli_connect($sname, $uname, $pswrd);
    if(!$conn){
        die("There was a connection error: ".mysqli_connect_error());
    }
    echo "Connection established successfully";
    mysqli_close($conn);
?>