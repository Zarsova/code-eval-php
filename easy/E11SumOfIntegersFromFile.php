<?php
class E11SumOfIntegersFromFile {
	function result($array) {
		return array_reduce($array, function ($carry, $item) {
			$carry += $item;
			return $carry;
		});
	}
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
	if (!(is_readable($argv[1]) && $fp = fopen($argv[1], "r"))) {
		die("can't read file");
	}
	$runner = new E11SumOfIntegersFromFile();
	$array = array();
	while (($line = fgets($fp)) != false) {
		array_push($array, intval(rtrim($line)));
	}
	fclose($fp);
	echo $runner->result($array)."\n";
}