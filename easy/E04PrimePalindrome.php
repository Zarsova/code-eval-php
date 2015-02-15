<?php

class E04PrimePalindrome
{
    public $primes = array();

    function __construct($n)
    {
        for ($i = 2; $i < $n; $i++) {
            $is_prime = true;
            for ($j = 2; $j <= ($i / 2); $j++) {
                if ($i % $j == 0) {
                    $is_prime = false;
                    break;
                }
            }
            if ($is_prime) {
                array_push($this->primes, $i);
            }
        }
    }

    public function primePalindrome($max)
    {
        for ($i = $max - 1; $i > 0; $i--) {
            if ($i % 10 == floor($i / 100)) {
                if (in_array($i, $this->primes)) {
                    return $i;
                }
            }
        }
    }
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    $runner = new E04PrimePalindrome(1000);
    echo $runner->primePalindrome(1000);
}

?>