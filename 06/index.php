<?php
ini_set('display_errors', 1);
//include "functions.php";
//include_once "functions.php";
//require "functions.php";
require_once "functions.php";

sayHello();
$password = randPass();
echo "<strong>$password</strong><br>";
//echo sum(5, 3), "<br>";
$b = 45;
$x = 12;
echo sum($b, $x), "<br>";
echo $b;
$hello('Vasya');

$func = 'hello';
$$func('Den');
$s = 'sum';
echo $s($b,3);

function foo(){
    echo 'TEST';
}

$_GET['action'] = "foo";
$_GET['action']();
$arFunc = [
    'foo' => function(){
        return ["LALALLALALA",2,3,4,5];
    },
    'bar' => function(){
        echo 'BAR';
    }
];
echo "<br>";
echo $arFunc['foo']()[0];

$arNumbers = [1,2,3,4,5];

array_walk($arNumbers, function($el){
    echo $el, "<br>";
});

$arPhones = [
    [
        "name" => 'Iphone',
        "price" => 999
    ],
    [
        "name" => 'Samsung',
        "price" => 200
    ],
    [
        "name" => 'Huawei',
        "price" => 205
    ]
];

function walk(Array $array, Closure $func){
    foreach ($array as $item){
        $func($item);
    }
}

$bar = "123";
walk($arPhones, function ($phone) use ($bar){
    echo $phone['name'], " ", $bar, "<br>";
});

$UAH_to_USD = 26.6;

array_walk($arPhones, function($phone) use(&$UAH_to_USD) {
    $UAH_to_USD += 4;
    echo "<strong>{$phone['name']}: </strong> ",$phone['price'] * $UAH_to_USD ," UAH<br>";
});
echo $UAH_to_USD;

