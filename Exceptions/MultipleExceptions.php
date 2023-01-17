<?php

	//catch multiple exceptions

	function custom_exception($exception){

			echo "Caught Exception : " . $exception -> getMessage();
	}

	function div($a, $b): int{

		try{
			if ($b <= 0) {
				throw new Exception("Exception =  dividing by zero");
			}

			$result = $a / $b;
		} catch(Exception $e){

			throw new Exception("Divide mtehod has input parameter that is less than zero!" . $e -> getMessage() );
			
		  }
			return $result;
		}

	set_exception_handler('custom_exception');
	div(6, 0);


