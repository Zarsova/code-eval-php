<?php

require_once 'E02ReverseWords.php';

class E02ReverseWordsTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->logic = new E02ReverseWords;
    }

    public function testSolveFizzBuzz()
    {
        $this->assertEquals('World Hello Hello',
            $this->logic->lineParser("Hello Hello World"));
        $this->assertEquals('CodeEval Hello',
            $this->logic->lineParser("Hello CodeEval"));
    }
}
