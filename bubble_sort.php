<?php
//Complexity O(n^2)

function bubble_sort_ascend($a_list) {
	$n = count($a_list) - 1;
	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $n - $i; $j++) {
			$k = $j + 1;
			if ($a_list[$k] < $a_list[$j]) {
				list($a_list[$k], $a_list[$j]) = array($a_list[$j], $a_list[$k]);
			}
		}
	}
	return $a_list;
}

function bubble_sort_descend($a_list) {
	$n = count($a_list) - 1;
	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $n - $i; $j++) {
			$k = $j + 1;
			if ($a_list[$k] > $a_list[$j]) {
				list($a_list[$k], $a_list[$j]) = array($a_list[$j], $a_list[$k]);
			}
		}
	}
	return $a_list;
}

$arr = array(5, 6, 7, 1, 5, 2, 7);
$sorted_arr = bubble_sort_ascend($arr);
print_r($sorted_arr);

