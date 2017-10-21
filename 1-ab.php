<?php

$a = 12;
$b = 5;
print "a=$a;";
print "b=$b;";
list($b, $a) = array($a, $b);
print "a=$a;b=$b";

//var_dump($a, $b);
?>