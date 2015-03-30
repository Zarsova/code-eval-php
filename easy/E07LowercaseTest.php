<?php
require_once 'E07Lowercase.php';

class E07LowercaseTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->logic = new E07Lowercase();
    }

    public function testSolve()
    {
        $this->assertEquals("hello codeeval", $this->logic->lineParser("HELLO CODEEVAL"));
        $this->assertEquals("this is some text", $this->logic->lineParser("This is some text"));
    }

}
