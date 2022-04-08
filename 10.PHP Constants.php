<?php
/*Constants are like variables except that once 
they are defined they cannot be changed or undefined.

To create a constant, use the define() function.

Syntax

define(name, value, case-insensitive)

Parameters:

    name: Specifies the name of the constant
    value: Specifies the value of the constant
    case-insensitive: Specifies whether the constant name 
    should be case-insensitive. Default is false
*/

define("google","1540",true);

echo GOOGLE; //1540

define("list1", [
    12,
    34,
    34,
    23,
    54
]);

echo list1[0];

?>