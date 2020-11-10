#!/usr/bin/php
<?php

function ft_split($string)
{
	$array = preg_split("/[\s]+/", $string);
	sort($array);
	$array = array_filter($array);
	return ($array);
}

?>