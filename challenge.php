<?php

function divideByRecursiveSubtraction($number1, $number2)
{
	// initialize the quotient to an initial value 0
	$quotient = 0;

	// while loop
	while ($number1-$number2 >= 0) {
		$number1 = $number1-$number2;
		$quotient = $quotient+1;
	}
	// return value for the function
	return $quotient;
}

?>