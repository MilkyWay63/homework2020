<?php

if (function_exists('getCalculations') == FALSE) {
	function getCalculations() {
		$data = [];

		if (file_exists(CALCULATIONS_FILE)) {
			$data = file_get_contents(CALCULATIONS_FILE);
			$data = json_decode($data, TRUE) ?? [];
		}

		return $data;
	}
}

if (function_exists('dd') == FALSE) {
	function dd() {
		array_map(function ($x) {
			var_dump($x);
		}, func_get_args());
		die(1);
	}
}