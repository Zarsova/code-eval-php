<?php

class E07Lowercase
{
    function lineParser($line)
    {
        return strtolower(rtrim($line));
    }
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    if (!(is_readable($argv[1]) && $fp = fopen($argv[1], "r"))) {
        die("can't read file");
    }
    $runner = new E07Lowercase();
    while (($line = fgets($fp)) != false) {
        echo $runner->lineParser($line) . "\n";
    }
    fclose($fp);
}