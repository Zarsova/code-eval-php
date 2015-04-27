<?php
class E08SumOfDigits {
	function lineParser($line) {
		$number = rtrim($line);
		$result = 0;
		while ($number > 0) {
			$result += $number % 10;
			$number = $number / 10;
		}
		return $result;
	}
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
	if (!(is_readable($argv[1]) && $fp = fopen($argv[1], "r"))) {
		die("can't read file");
	}
	$runner = new E08SumOfDigits();
	while (($line = fgets($fp)) != false) {
		echo $runner->lineParser($line)."\n";
	}
	fclose($fp);
}