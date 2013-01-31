<?php
//Initialize an empty array for storing filtered, escaped input
$clean = array();
//Wash Basic Input Fields
function washnormal(){
	//Use the global $clean array
	global $clean;
	//Loop through the fields passed to the function
	for ($i = 0; $i < func_num_args(); $i++) {
		$item = func_get_arg($i);
		//Regular expression matching for lowercase letters, uppercase letters, digits, periods, commas, and dashes   ...   \s* allows new lines
		if(preg_match("/^[a-zA-Z0-9 \s*\.\,\-\@\(\)\:\;\/\?\'\"\+\=\~\_\#]*$/", $_POST[$item])){
			//htmlentities escapes the output (ex. <b>BOLD</b> vs. BOLD)
			$clean[$item] = htmlentities($_POST[$item], ENT_QUOTES, 'UTF-8');
		}
	}
}
//Wash State and Zip Code
function washgentle($state, $zip){
	//Use the global $clean array
	global $clean;
	//Regular expression matching for 5 digits, a possible dash, and possible 4 digits
	if(preg_match("/^[0-9]{5}[\-]?[0-9]{0,4}$/", $_POST[$zip])){
		$clean[$zip] = htmlentities($_POST[$zip], ENT_QUOTES, 'UTF-8');
	}
	//PHP native function for checking for alpha characters only (faster than custom regular expressions)
	if(ctype_alpha($_POST[$state])){
		$clean[$state] = htmlentities($_POST[$state], ENT_QUOTES, 'UTF-8');
	}
}
?>