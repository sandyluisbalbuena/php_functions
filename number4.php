<?php 

class Remover {
	private $list;

	public function __construct($list) {
		$this->list = $list;
	}

	public function remove() {
		$result = array();
		$length = count($this->list);
		$i = 0;

		while ($i < $length) {
			$current = $this->list[$i];
			$result[] = $current;
			
			while ($i < $length && $this->list[$i] === $current) {
			$i++;
			}
		}

		return $result;
	}

	public function original() {
		$result = array();
		$length = count($this->list);
		$i = 0;

		while ($i < $length) {
			$current = $this->list[$i];
			$result[] = $current;
			
			$i++;
		}

		return $result;
	}
}

$list = array('apple', 'apple', 'banana', 'banana', 'banana', 'orange', 'orange', 'pear');
$remover = new Remover($list);
$updatedList = $remover->remove();
$originalList = $remover->original();
echo "Original List: " . implode(', ', $originalList)."<br><br>";
echo "Updated List: " . implode(', ', $updatedList);


?>