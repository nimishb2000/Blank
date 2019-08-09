<?php
    $x=10;
    function abc($a){
        $a=$a*2;
    }
    abc($x);
    echo $x."<br>";
    function xyz(&$a){
        $a=$a*2;
    }
    xyz($x);
    echo $x;
?>