<?php

$number = 22;

class DivisibleBy3 {
	private $number;

	public function __construct($number) {
		$this->number = $number;
	}

	public function isDivisibleByThree() {
		return $this->number % 3 === 0;
	}
}

$divisibleBy3 = new DivisibleBy3($number);

if ($divisibleBy3->isDivisibleByThree()) {
	echo "$number is divisible by 3.";
} else {
	echo "$number is not divisible by 3.";
}

?>