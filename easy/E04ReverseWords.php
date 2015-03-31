<?php

class E04ReverseWords
{
    function lineParser($line)
    {
        $strAry = explode(" ", rtrim($line));
        return join(" ", array_reverse($strAry));
    }
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    if (!(is_readable($argv[1]) && $fp = fopen($argv[1], "r"))) {
        die("can't read file");
    }
    $runner = new E04ReverseWords;
    while (($line = fgets($fp)) !== false) {
        echo $runner->lineParser($line) . "\n";
    }
    fclose($fp);
}
