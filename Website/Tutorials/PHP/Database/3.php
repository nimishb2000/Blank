<?php
    $sname="localhost";
    $uname="root";
    $pswrd="admin";
    $dbase="sample";
    $conn=mysqli_connect($sname, $uname, $pswrd, $dbase);
    if(!$conn){
        die("There was a connection error: ".mysqli_connect_error());
    }
    $sql="create table t1 (user_no integer, name varchar(50), age integer);";
    if(mysqli_query($conn, $sql)){
        echo "Table created successfully";
    }
    else{
        echo "There was an error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>