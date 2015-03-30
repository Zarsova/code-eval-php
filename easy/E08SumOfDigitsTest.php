<?php
require_once 'E08SumOfDigits.php';

class E08SumOfDigitsTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->logic = new E08SumOfDigits();
    }

    public function testSolve()
    {
        $this->assertEquals("5", $this->logic->lineParser("23"));
        $this->assertEquals("19", $this->logic->lineParser("496"));
    }

}
