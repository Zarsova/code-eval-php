<?php
class E05MultiplesOfANumber {
	function lineParser($line) {
		list($x, $n) = explode(",", rtrim($line));
		for ($i = $n; true; $i += $n) {
			if ($i >= $x) {
				return $i;
			}
		}
	}
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
	if (!(is_readable($argv[1]) && $fp = fopen($argv[1], "r"))) {
		die("can't read file");
	}
	$runner = new E05MultiplesOfANumber();
	while (($line = fgets($fp)) != false) {
		echo $runner->lineParser($line)."\n";
	}
	fclose($fp);
}
