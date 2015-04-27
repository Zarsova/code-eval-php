<?php
class E06BitPositions {
	function lineParser($line) {
		list($n, $p1, $p2) = explode(",", $line);
		$bin_str = decbin($n);
		if ($bin_str[strlen($bin_str) - $p1] == $bin_str[strlen($bin_str) - $p2]) {
			return "true";
		} else {
			return "false";
		}
	}
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
	if (!(is_readable($argv[1]) && ($fp = fopen($argv[1], "r")))) {
		die("can't read rile");
	}
	$runner = new E06BitPositions();
	while (($line = fgets($fp)) != false) {
		echo $runner->lineParser(rtrim($line))."\n";
	}
}
