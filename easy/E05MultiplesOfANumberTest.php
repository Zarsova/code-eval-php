<?php
require_once 'E05MultiplesOfANumber.php';

class E05MultiplesOfANumberTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		$this->logic = new E05MultiplesOfANumber();
	}

	public function testSolve() {
		$this->assertEquals('16',
			$this->logic->lineParser('13,8'));
		$this->assertEquals('32',
			$this->logic->lineParser('17,16'));
	}
}
