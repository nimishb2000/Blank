<?php
    $sname="localhost";
    $uname="root";
    $pswrd="admin";
    $dbase="sample";
    $conn=mysqli_connect($sname, $uname, $pswrd, $dbase);
    if(!$conn){
        die("There was a connection error: ".mysqli_connect_error());
    }
    $sql="select * from t1;";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "User_no: ".$row["user_no"]."; name: ".$row["name"]."; age: ".$row["age"]."<br>";
        }
    }
    else{
        echo "No rows found";
    }
    mysqli_close($conn);
?>