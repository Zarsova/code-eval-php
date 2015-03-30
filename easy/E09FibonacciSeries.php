<?php

class E09FibonacciSeries
{
    function fibonacci($num)
    {
        if ($num <= 1) {
            return $num;
        }
        $fib = array(1, 0);
        for ($i = 0; $i < $num; $i++) {
            $next = array_sum($fib);
            array_shift($fib);
            array_push($fib, $next);
        }
        return $next;
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