<?php

	//raise and catch exception and execute finally block

	function custom_exception($exception){

		echo "Caught Exception : " . $exception -> getMessage();
	}

	set_exception_handler('custom_exception');

	try{
		throw new Exception("Exception is raised!");
	}
	finally{
		echo 'Finally block always get executed before exception' . "<br>";
	}

