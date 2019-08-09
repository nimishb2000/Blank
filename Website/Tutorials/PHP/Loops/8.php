<?php
    $a=array("red"=>"apple", "yellow"=>"banana");
    $a["blue"]="blueberries";
    $a["green"]="kiwi";
    echo "Red fruit is ".$a["red"]."<br>";
    echo "yellow fruit is ".$a["yellow"]."<br>";
    echo "blue fruit is ".$a["blue"]."<br>";
    echo "green fruit is ".$a["green"]."<br>";
    echo "<br>";
    foreach ($a as $x=>$x_value){
        echo "Key = ".$x."; Value = ".$x_value."<br>";
    }
?>