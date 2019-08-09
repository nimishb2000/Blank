<?php
    $file=fopen("xyz.txt", "w");
    $a="Hello World";
    fwrite($file, $a);
    fclose($file);
    $file=fopen("xyz.txt", "r");
    echo fread($file, filesize("xyz.txt"))."<br>";
    fclose($file);
    $file=fopen("xyz.txt", "w");
    $b="Hi!";
    fwrite($file, $b);
    fclose($file);
    $file=fopen("xyz.txt", "r");
    echo fread($file, filesize("xyz.txt"));
    fclose($file);
?>