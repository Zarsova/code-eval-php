<?php

require_once 'E02PrimePalindrome.php';

class E02PrimePalindromeTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->logic = new E02PrimePalindrome(1000);
    }

    public function testSolve()
    {
        $this->assertEquals('929',
            $this->logic->primePalindrome(1000));
    }
}
