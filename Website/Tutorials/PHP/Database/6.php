<?php
    $sname="localhost";
    $uname="root";
    $pswrd="admin";
    $dbase="sample";
    $conn=mysqli_connect($sname, $uname, $pswrd, $dbase);
    if(!$conn){
        die("There was a connection error: ".mysqli_connect_error());
    }
    $sql="update t1 set name='xyz' where user_no=1;";
    if(mysqli_query($conn, $sql)){
        echo "Record updated successfully";
    }
    else{
        echo "There was an error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>