<?php

$a = 12;
$b = 13;

echo var_dumb($a==$b);

echo var_dumb($a===$b); //same type

echo var_dumb($a!=$b);

echo var_dumb($a<>$b); //false if they both true

echo var_dumb($a!==$b); //same type

echo var_dumb($a>b);

echo var_dumb($a<b);

echo var_dumb($a>=$b);

echo var_dumb($a<=$b);

echo var_dumb($a<=>$b);
/*
if a less than b it will return -1
if both are equal it will return 0
if b less than a it will r==$eturn 1
*/
?>