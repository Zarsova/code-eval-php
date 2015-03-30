<?php

class E09FibonacciSeries
{
    function fibonacci($num)
    {
        if ($num <= 1) {
            return $num;
        } else if ($num == 2) {
            return 1;
        } else {
            return $this->fibonacci($num - 1) + $this->fibonacci($num - 2);
        }
    }

    function lineParser($line)
    {
        return $this->fibonacci(intval(rtrim($line)));
    }
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    if (!(is_readable($argv[1]) && $fp = fopen($argv[1], "r"))) {
        die("can't read file");
    }
    $runner = new E09FibonacciSeries();
    while (($line = fgets($fp)) != false) {
        echo $runner->lineParser($line) . "\n";
    }
    fclose($fp);
}