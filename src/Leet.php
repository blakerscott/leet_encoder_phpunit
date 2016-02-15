<?php
	 class Leet
		{
		 function makeLeet ($input)
		 {


			 $input = str_replace("e","3", $input);
			 $input = str_replace("E","3", $input);
			 $input = str_replace("o","0", $input);
			 $input = str_replace("I", "1", $input);
			 $input = str_replace("O","0", $input);
			 $array = explode(" ", $input);
			 $blank_array = array();
				 foreach ($array as $word) {
					 $i = 0;
					 while ($i < strlen($word)) {
						 if ($i > 0 && $word[$i] == "s") {
							 $word[$i] = "z";
						 }
						 $i++;
					 }
					 array_push($blank_array, $word);
				 }
				 $new = implode(" ", $blank_array);
		     return $new;
	 }
	}

?>
[]
