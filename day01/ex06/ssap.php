#!/usr/bin/php
<?php
	
	$skip_first = 1;
	$arr = array();
	foreach ($argv as $element)
	{
		if ($skip_first > 1)
		{
			$temp = preg_split("/[\s]+/", trim($element));
			if ($temp[0] != "")
				$arr = array_merge($arr, $temp);
		}
		$skip_first++;
	}
	sort($arr);
	foreach($arr as $print)
		echo "$print\n";
?>