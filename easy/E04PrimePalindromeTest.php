<?php

require_once 'E04PrimePalindrome.php';

class E04PrimePalindromeTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->logic = new E04PrimePalindrome(1000);
    }

    public function testSolve()
    {
        $this->assertEquals('929',
            $this->logic->primePalindrome(1000));
    }
}

?>