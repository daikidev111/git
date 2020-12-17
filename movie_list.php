<?php
session_start();


class MovieList {
	private $stack;
	private $limit;

	public function __construct($limit) {
		$this->stack = array();
		$this->limit = $limit;
	}

	public function push($item) {
		if (count($this->stack) > $this->limit) {
			throw new RunTimeException("Stack is already full!");
		} else {
			array_unshift($this->stack, $item);
		}
	}

	public function pop() {
		if ($this->isEmpty()) {
			throw new RunTimeException("Stack is already empty!!");
		} else {
			array_shift($this->stack);
		}
	}

	public function peek() {
		return current($this->stack);
	}

	public function isEmpty() {
		return empty($this->array);
	}
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Stack</title>
</head>
<body>
</body>
</html>

