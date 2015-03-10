<?php

require_once 'E01FizzBuzz.php';

class E01FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->logic = new E01FizzBuzz;
    }

    public function testSolveFizzBuzz()
    {
        $this->assertEquals(array(1, 2, 'F', 4, 'B', 'F', 7, 8, 'F', 'B'),
            $this->logic->fizzBuzz(3, 5, 10));
        $this->assertEquals('1 2 F 4 B F 7 8 F B',
            $this->logic->lineParser("3 5 10"));
        $this->assertEquals('1 F 3 F 5 F B F 9 F 11 F 13 FB 15',
            $this->logic->lineParser("2 7 15"));
    }
}
