<?php

// Add the integer values stored in two variables, and output the result 
	$x = 2017;
	$y = 2018;

	echo "the value of x is $x, the value of y is $y"."<br><br>";



// Concatenate three strings, at least one of which is stored as a variable, and output the result.
	$a = "New York University";
	$b = "Columbia University";
	$c = "Pace University";

	echo "Private universities that are located in Manhattan are " .$a. ", " .$b. ", and " .$c. "."."<br><br>";



// Output the word “even” if the hour of the time on the server is even, or output “odd” if it is not. 
	$t=strtotime(date("H")); // strtotime() round the hour to integer so that it can be divide by 2 and calculate to 0

	if($t/2 == 0){
		echo "even";
	} else {
		echo "odd";
	}
?>