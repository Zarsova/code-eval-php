"<?php
require_once 'E12OddNumbers.php';

class E12OddNumbersTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		$this->logic = new E12OddNumbers();
	}

	public function testSolve() {
		$this->assertEquals(range(1, 99, 2), $this->logic->result());
	}
}
