<?php


class checker {
	private $char;

	public function __construct($char) {
		$this->char = $char;
	}

	public function isVowel() {
		$vowels = array('a', 'e', 'i', 'o', 'u');

		if (in_array(strtolower($this->char), $vowels)) {
		return true;
		}

		return false;
	}

	public function isConsonant() {
		return !$this->isVowel();
	}
}

$checker = new checker('b');


if ($checker->isVowel()) {
	echo "Vowel.";
} else {
	echo "Consonant.";
}



?>