<?php 
/* 
PHP has three different variable scopes:

local
global
static 
*/

#Gobal Scope
$x = 50;

function Gobal(){
    echo "Inside $x <br>";
}

Gobal();

echo "Outside $x<br>";

#Local Scope

function Local(){
    $y = 50;
    echo "Inside $y<br>";
}

Local();
echo "Outside $y<br>";

# The global Keyword

function global_Keyword(){
    global $z;
    $z = 50;
}

global_Keyword();
echo "global Keyword $z<br>";


#PHP The static Keyword

/* 

Normally, when a function is completed/executed, 
all of its variables are deleted. 
However, sometimes we want a local variable 
NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you 
first declare the variable:
*/

function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();

?> 
