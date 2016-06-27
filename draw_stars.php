<?php

function draw_stars($array)
	{

		foreach($array as $value)
		{
			if(is_numeric($value))
			{
				echo str_repeat("*", $value) . "<br>";
			}
			else
			{
				$letter = strtolower(substr($value, 0, 1)); 
				$letter_count = strlen($value);  
				echo str_repeat($letter, $letter_count) . "<br />";
			}
		}
	}

	// $numbers_array = array(4, 6, 8, 1, 9, 10, 4, 2, 2, 7, 17);


	// $numbers_strings_array = array(1,1,2,7,"Erin","Michelle",30);
	
	// $output = draw_stars($numbers_array);

	// echo $output;

	// $second_output = draw_stars($numbers_strings_array);

	//echo $second_output	
?>>