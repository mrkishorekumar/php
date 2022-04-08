<?php

$a = 0;
$b = 1;

echo var_dump($a && $b); //false

echo var_dump($a and $b); //false

echo var_dump($a or $b); //true

echo var_dump($a || $b); //true

echo var_dump($a xor $b); //true

#NOT
echo var_dump(!$b); //flase

?>