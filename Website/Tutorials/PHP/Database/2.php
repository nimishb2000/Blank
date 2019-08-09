<?php
    $sname="localhost";
    $uname="root";
    $pswrd="admin";
    $conn=mysqli_connect($sname, $uname, $pswrd);
    if(!$conn){
        die("There was a connection error: ".mysqli_connect_error());
    }
    $sql="create database sample;";
    if(mysqli_query($conn, $sql)){
        echo "Database created successfully";
    }
    else{
        echo "There was an error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>