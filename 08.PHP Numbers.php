<?php
#PHP Numbers

/* 
Here are some rules for integers:

    An integer must have at least one digit
    An integer must NOT have a decimal point
    An integer can be either positive or negative
    Integers can be specified in three formats: 
        decimal (10-based),
        hexadecimal (16-based - prefixed with 0x) 
        octal (8-based - prefixed with 0)

*/

# var_dump() function returns the data type and value

# 1) Interger Manipluation is_int()

$num = 20.0;

echo var_dump(is_int($num)); //bool(false)

# 2) Float Manipluation is_float()

$num1 = 40;

echo var_dump(is_float($num1)); //bool(false)

# 3) PHP Infinity

/*
    is_finite()
    is_infinite()
*/

$x = 1.9e411;
echo var_dump(is_finite($x));

# 4) PHP NaN

$z = acos(8);
echo var_dump($z); //float(NAN) 

#5) PHP Numerical Strings
$g = "123";
echo var_dump(is_numeric($g)); //bool(true)
?>