#!/usr/bin/php
<?php

	function ft_is_sort($arr)
	{
		$copy = $arr;
		sort($copy);
		if ($arr === $copy)
			return (TRUE);
		else
			return (FALSE);
	}

?>