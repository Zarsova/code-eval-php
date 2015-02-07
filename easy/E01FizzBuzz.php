<?php

class E01FizzBuzz
{
    function fizzBuzz($fizz, $buzz, $number)
    {
        $ar = array();
        for ($i = 1; $i <= $number; $i++) {
            if ($i % $fizz == 0 && $i % $buzz == 0) {
                array_push($ar, "FB");
            } else if ($i % $fizz == 0) {
                array_push($ar, "F");
            } else if ($i % $buzz == 0) {
                array_push($ar, "B");
            } else {
                array_push($ar, $i);
            }
        }
        return $ar;
    }

    function lineParser($line)
    {
        list($fizz, $buzz, $number) = explode(" ", $line);
        return join(" ", $this->fizzBuzz($fizz, $buzz, $number));
    }
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    if (!(is_readable($argv[1]) && $fp = fopen($argv[1], "r"))) {
        die("can't read file");
    }
    $runner = new E01FizzBuzz;
    while (($line = fgets($fp)) !== false) {
        echo $runner->lineParser($line) . "\n";
    }
    fclose($fp);
}
?>