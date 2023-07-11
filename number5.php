<?php

class Checker {
	private $number;

	public function __construct($number) {
	$this->number = $number;
	}

	public function isArmstrongNumber() {
	$sum = 0;
	$digits = str_split((string) $this->number);

	foreach ($digits as $digit) {
		$sum += pow($digit, count($digits));
	}

	return $sum === $this->number;
	}
}

$number = 211;
$checker = new Checker($number);
if ($checker->isArmstrongNumber()) {
	echo "$number is an Armstrong Number.";
} else {
	echo "$number is not an Armstrong Number.";
}


?>