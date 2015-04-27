<?php
class E03SumOfPrimes {
	public $last = 0;
	public $ary = array(false, false, true, true, false, true);

	function isPrime($n) {
		$_n = count($this->ary);
		if ($_n > $n) {
			return $this->ary[$n];
		}

		$this->ary[$n] = true;

		$max = floor(sqrt($n));
		for ($i = 2; $i <= $max && $this->ary[$n]; $i++) {
			if ($this->ary[$i]) {
				if ($n % $i == 0) {
					$this->ary[$n] = false;
				}
			}
		}
		return $this->ary[$n];
	}

	function nextPrime() {
		$this->last++;
		if ($this->isPrime($this->last)) {
			return $this->last;
		} else {
			return $this->nextPrime();
		}
	}

	function sumOfPrimes($n) {
		$rtn = 0;
		for ($i = 0; $i < $n; $i++) {
			$rtn += $this->nextPrime();
		}
		return $rtn;
	}
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
	$runner = new E03SumOfPrimes;
	echo $runner->sumOfPrimes(1000)."\n";
}
