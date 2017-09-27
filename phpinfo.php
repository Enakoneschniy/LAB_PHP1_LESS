<?php
 $text;
 $points = 0;
 $user_name_eugene = 'Eugene';
 $rating = 2.5;
 var_dump($rating);
 $isRight = true;//false
// 1) integer - int
// 2) string
// 3) float / double
// 4) boolean - bool
// 5) array
// 6) object
// 7) resource
// 8) null

define("PI", 3.14);
define("PI", 3.15);
var_dump(PI);
const HELLO = "Hello World!";
var_dump(__FILE__);
var_dump(__LINE__);

echo "<br>";
echo gettype($text);
settype($text, 'string');
echo "<br>";
echo gettype($text);

$a = 3;
$b = 5;
$c = $a;
$a = $b;
$b = $c;
unset($c);

$var = 'a';
echo "<br>";
var_dump($$var);//$$var - $a
var_dump($wtf);
$a = $a ^ $b; 
$b = $b ^ $a; 
$a = $a ^ $b;

$x = 5;
$v = '5';
$res = $x > $v;//false
$res = $x == $v;//true
$res = $x === $v;//false
$res = $x != $v;//false
$res = $x !== $v;//false

$x = 6;
$y = 12;
	    //true  и   true
$cond = $x < $y && $y == 12; //true
	   
	   //false  и   true
$cond = $x > $y && $y == 12; //false

       //false  иили   true
$cond = $x < $y || $y == 12; //true

$cond = $x > $y || $y == 12 && $x > 7; //false

//$cond = $x > $y || ($y == 12 && $x > 7); //false

$cond = $x > $y || $y == 12 && $x > 5; //true
?>
