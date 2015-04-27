<?php
require_once 'E11SumOfIntegersFromFile.php';

class E11SumOfIntegersFromFileTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		$this->logic = new E11SumOfIntegersFromFile();
	}

	public function testSolve() {
		$this->assertEquals("17", $this->logic->result(array("5", "12")));
	}
}
