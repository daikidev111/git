<?php

class MovieList {
	private $stack;
	private $limit;

	public function __construct($limit) {
		$this->$stack = array();
		$this->$limit = $limit;
	}

	public function push($item) {
		if (count($this->stack) > $this->limit) {
			throw new RunTimeException("Stack is already full!");
		} else {
			array_unshift($this->stack, $item);
		}
	}

	public function peek() {
		return current($this->stack);
	}
}





