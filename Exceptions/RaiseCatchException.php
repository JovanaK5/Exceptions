<?php

	//raise and catch dividing by 0 exception

	function div($a, $b): int{

		if ($b <= 0) {
			throw new Exception("Exception =  dividing by zero");
		}

		$result = $a / $b;
		return $result;
	}

	try {

		$result = div(3, 0);

		
	} catch (Exception $e) {
		
		echo "Caught Exception : " . $e -> getMessage();
	}