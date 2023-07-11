<?php 

class DigitConverter {
	private $number;
	private $Mapping;

	public function __construct($number) {
	$this->number = $number;

	$this->Mapping = array(
		0 => 'Zero',
		1 => 'One',
		2 => 'Two',
		3 => 'Three',
		4 => 'Four',
		5 => 'Five',
		6 => 'Six',
		7 => 'Seven',
		8 => 'Eight',
		9 => 'Nine'
	);
	}

	public function converter() {
	$digits = str_split($this->number);
	$words = array();

	foreach ($digits as $digit) {
		if (isset($this->Mapping[$digit])) {
		$words[] = $this->Mapping[$digit];
		}
	}

	return implode(' ', $words);
	}
}

$digitConverter = new DigitConverter(721);
$word = $digitConverter->converter();
echo "The word counterpart of 721 is: $word";


?>