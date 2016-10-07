<?php
function array_search_keys($array, $string = null)
{
	$result =[];
	if(!is_array($array)){
		//echo "The first input must be an array!";
		exit;
	}
	if(isset($string)){
		foreach ($array as $key =>$value){
			if(!(strpos($key, $string)===false)){
				$result[] = $key;
			}
		}
	} else {
		$result = array_keys($array);	
	}
	return $result;
}
/*
$test_array = ['men' => 1, 'women' => 1, 'yo men' => 1, 'Men' => 1];
$test_string = 'men';
var_dump (array_search_keys($test_array), $test_string);
*/
?>