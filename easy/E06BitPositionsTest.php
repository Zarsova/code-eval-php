<?php
require_once 'E06BitPositions.php';

class E06BitPositionsTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->logic = new E06BitPositions();
    }

    public function testSolve()
    {
        $this->assertEquals("true", $this->logic->lineParser("86,2,3"));
        $this->assertEquals("false", $this->logic->lineParser("125,1,2"));
    }

}