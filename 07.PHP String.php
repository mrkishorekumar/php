<?php
// PHP String Functions

// String Manipulation

#1) strlen()

echo strlen("Kishore Kumar"); //13 Output include spaces

#2) str_word_count() 

echo str_word_count("Kishore kumar"); //2

#3) strrev()

echo strrev("Racecar"); //racecaR

#4) strpos()
/*
unction searches for a specific text within a string. 
If a match is found, the function returns the character position of the first match. 
If no match is found, it will return FALSE.
*/
echo strpos("Hello orld","world"); //6

#5) str_replace()

echo str_replace("kumar"," ","M R Kishore kumar");

?>