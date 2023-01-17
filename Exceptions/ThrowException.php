<?php

	//throw a custom exception

	/*
		function custom_exception($exception){

			echo "Caught Exception : " . $exception -> getMessage();
		}

		set_exception_handler('custom_exception');

		throw new Exception("Exception is raised!");
	*/

	function custom_exception($exception){

			echo "Caught Exception : " . $exception -> getMessage();
		}

	function div($a, $b): int{

		if ($b <= 0) {
			throw new Exception("Exception =  dividing by zero");
		}

		$result = $a / $b;
		return $result;
	}

	set_exception_handler('custom_exception');
	div(6, 0);