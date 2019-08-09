<?php
    echo strtoupper("Hello World")."<br>";
    echo strtolower("hELLO wORLD")."<br>";
    echo strlen("Hello World")."<br>";
    echo ltrim("  Hello World")."<br>";
    echo ltrim("Hello World", "He")."<br>";
    echo rtrim("Hello World   ")."<br>";
    echo rtrim("Hello World", "ld")."<br>";
    echo trim("  Hello World  ")."<br>";
    echo substr("Hello World", 2, 3)."<br>";
    echo strrev("Hello World")."<br>";
    echo strcmp("Hello", "world")."<br>";
    echo strncasecmp("HELLO", "HEllo", 3)."<br>";
    echo stripslashes("Mr\Mrs")."<br>";
?>