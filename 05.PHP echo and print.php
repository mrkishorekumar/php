<?php 

/*
The differences are small: echo has no return 
value while print has a return value of 1 so 
it can be used in expressions. 
echo can take multiple parameters 
(although such usage is rare) while
 print can take one argument. 
echo is marginally faster than print.
*/
$txt1 = "Hello";
echo "<h2>" . $txt1 . "</h2>";

print "<h2>" . $txt1 . "</h2>";

?>