<?php
    $a=strtotime("today");
    echo date("d/m/Y", $a)."<br>";
    $b=strtotime("tomorrow");
    echo date("d/m/Y", $b)."<br>";
    $c=strtotime("Feb 08");
    echo date("d/m/Y", $c)."<br>";
    $d=strtotime("Next Monday");
    echo date("d/m/Y", $d)."<br>";
    $e=strtotime("+6 months");
    echo date("d/m/Y", $e)."<br>";
?>