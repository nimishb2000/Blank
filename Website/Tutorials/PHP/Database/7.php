<?php
    $sname="localhost";
    $uname="root";
    $pswrd="admin";
    $dbase="sample";
    $conn=mysqli_connect($sname, $uname, $pswrd, $dbase);
    if(!$conn){
        die("There was a connection error: ".mysqli_connect_error());
    }
    $sql="delete from t1 where user_no=1;";
    if(mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
    }
    else{
        echo "There was an error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>