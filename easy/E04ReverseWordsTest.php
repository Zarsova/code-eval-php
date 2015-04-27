<?php
require_once 'E04ReverseWords.php';

class E04ReverseWordsTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		$this->logic = new E04ReverseWords;
	}

	public function testSolveFizzBuzz() {
		$this->assertEquals('World Hello Hello',
			$this->logic->lineParser("Hello Hello World"));
		$this->assertEquals('CodeEval Hello',
			$this->logic->lineParser("Hello CodeEval"));
	}
}
