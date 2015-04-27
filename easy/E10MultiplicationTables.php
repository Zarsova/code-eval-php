<?php
class E10MultiplicationTables {
	function result() {
		$ret = array();
		for ($i = 0; $i < 12; $i++) {
			$row = array();
			for ($j = 0; $j < 12; $j++) {
				array_push($row, sprintf("%4d", ($i + 1) * ($j + 1)));
			}
			array_push($ret, join('', $row));
		}
		return $ret;
	}
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
	$runner = new E10MultiplicationTables();
	echo join("\n", $runner->result());
}