<?php

	//catch errors in your program

	function custom_error($errno, $errstr){

		echo $errstr;
	}

	set_error_handler('custom_error');
	echo (6 / 0);


