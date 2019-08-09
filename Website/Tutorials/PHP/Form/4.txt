<?php
    $file=fopen("abc.txt", "r");
    $a=fread($file, 20);
    echo $a."<br>";
    fclose($file);
    $file=fopen("abc.txt", "r");
    $b=fread($file, filesize("abc.txt"));
    echo $b;
?>