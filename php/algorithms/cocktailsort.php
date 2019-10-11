<?php

function cocktail_sort($array) 
{
	if (is_string($array)) {
		$array = str_split($array);
	}

	do {
		$swapped_element = false;
		for ($i = 0; $i < count($array); $i++) {
			if (isset($array[$i+1])) {
				if ($array[$i] > $array[$i+1]) {
					list($array[$i], $array[$i+1]) = array($array[$i+1], $array[$i]);
					$swapped_element = true;
				}
			}
		}

		if (!$swapped_element) break;

		$swapped_element = false;

		$swapped_element = false;
		for($i = count($array)-1; $i >= 0; $i--){
			if(isset($array[$i-1])){
				if($array[$i] < $array[$i-1]) {
					list($array[$i],$array[$i-1]) = array($array[$i-1],$array[$i]);
					$swapped_element = true;
				}
			}
		}		

	} while ($swapped_element)

	return $array;
}

$test = array(7, 3, -1, 12, 1, -6, 2, 4, 8);
echo "Original:\n";
echo implode(', ',$test );
echo "\nSorted:\n";
echo implode(', ',cocktail_sort($test)). PHP_EOL;

?>
