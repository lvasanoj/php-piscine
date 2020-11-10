#!/usr/bin/php
<?php

	if ($argc == 2)
	{
		$replaced = preg_replace('/[\s]+/', ' ', $argv[1]);
		$replaced = trim($replaced);
		echo "$replaced\n";
	}
?>