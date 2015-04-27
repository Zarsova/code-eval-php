<?php
require_once 'E09FibonacciSeries.php';

class E09FibonacciSeriesTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		$this->logic = new E09FibonacciSeries();
	}

	public function testSolve() {
		$this->assertEquals("5", $this->logic->lineParser("5"));
		$this->assertEquals("144", $this->logic->lineParser("12"));
	}
}
