<?php
    $a=array("a", "b");
    $a[2]="c";
    $a[3]="d";
    echo $a[0]." ".$a[1]." ".$a[2]." ".$a[3]."<br>";
    for ($i=0; $i<=3; $i++){
        echo $a[$i]." ";
    }
    echo "<br>";
    foreach ($a as $a_value){
        echo $a_value." ";
    }
?>