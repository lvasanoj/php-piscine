#!/usr/bin/php
<?php

while (1)
{
	echo "Enter a number: ";
	$input = trim(fgets(STDIN));
	if (feof(STDIN))
	{
		echo "\n";
		exit(1);
	}
	else if (is_numeric($input))
	{
		if ($input % 2 == 0)
			echo "This number $input is even\n";
		else
			echo "This number $input is uneven\n";
	}
	else
		echo "'$input' is not a number\n";
}

?>
