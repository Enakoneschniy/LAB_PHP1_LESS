<?php

function sayHello(){
    echo 'Hello!<br>';
}

function randPass($length = 6){
    $str = "1234567890_qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    return substr(str_shuffle($str), 0, $length);
}
const H = 123;
$c = 23;
$n = 23;
echo sum($c, $n);

function sum(&$a, $b = 2){
    $a++;
    return $a + $b;
}

/*if(!function_exists('sum')){
    function sum(&$a, $b = 2){
        $a++;
        return $a + $b;
    }
}*/


$hello = function($name){
    global $n;
    echo "Hello ", $name, $n, "<br>";
};