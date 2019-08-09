<?php
    function display($a){
        echo $a;
    }
    display("HI");
    echo "<br>";
    function add($a, $b){
        $c=$a+$b;
        return $c;
    }
    $r=add(1, 4);
    echo $r;
?>