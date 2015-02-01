<?php
function fizz_buzz($fizz, $buzz, $number)
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
    return join(" ", $ar);
}


if (!(is_readable($argv[1]) && $fp = fopen($argv[1], "r"))) {
    die("can't read file");
}
while (($line = fgets($fp)) !== false) {
    list($fizz, $buzz, $number) = explode(" ", $line);
    echo fizz_buzz($fizz, $buzz, $number) . "\n";
}
fclose($fp)
?>