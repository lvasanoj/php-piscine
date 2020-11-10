#!/usr/bin/php
<?php

	if ($argc > 1)
	{
		$temp = trim($argv[1], " ");
		$arr = preg_split("/[\s]+/", $temp);
		$first = $arr[0];
		array_push($arr, $first);
		array_shift($arr);
		$final = implode(" ", $arr);
		echo "$final\n";
	}

?>