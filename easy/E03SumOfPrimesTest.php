<?php

require_once 'E03SumOfPrimes.php';

class E03SumOfPrimesTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->logic = new E03SumOfPrimes();
    }

    public function testSolve()
    {
        $this->assertEquals(3682913,
            $this->logic->sumOfPrimes(1000));
    }
}

?>