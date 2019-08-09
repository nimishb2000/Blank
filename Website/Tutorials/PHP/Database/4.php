<?php
    $sname="localhost";
    $uname="root";
    $pswrd="admin";
    $dbase="sample";
    $conn=mysqli_connect($sname, $uname, $pswrd, $dbase);
    if(!$conn){
        die("There was a connection error: ".mysqli_connect_error());
    }
    $sql="insert into t1 (user_no, name, age) values (1, 'abc', 17);";
    if(mysqli_query($conn, $sql)){
        echo "Record entered successfully";
    }
    else{
        echo "There was an error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>