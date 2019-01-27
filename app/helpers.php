<?php

if (! function_exists('readingTime')) {
	function readingTime($post) {
		$word = str_word_count(strip_tags($post));
		$m = floor($word / 200);
		$est = $m . ' minute' . ($m == 1 ? '' : 's');
		return $est;
	}
}