<?php
class E12OddNumbers {
	function result() {
		return range(1, 99, 2);
	}
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
	$runner = new E12OddNumbers();
	echo join("\n", $runner->result());
}