<?php
//index
//length
//key => value
echo "<pre>";
$arNames = [];
echo gettype($arNames);

$arPhones[] = "+380685839243";
echo "<br>";
print_r($arPhones);
echo "<br>";

$string = "hello";
echo $string[3];

echo "<br>";

$arUsers = [
    0 => [
        'email' => 'e.nakoneschniy@gmail.com',
        'name' => 'Vasya',
        'age' => 98
    ],
    1 => [
        'email' => 'petya@gmail.com',
        'name' => 'Petya',
        'age' => 3
    ],
    2 => [
        'email' => 'roma@gmail.com',
        'name' => 'Roma',
        'age' => 19
    ]
];
foreach ($arUsers as $arUser){
    echo $arUser['email'];
    echo "<br>";
}

foreach ($arUsers as $key => $arUser){
    $arUsers[$key]['age']++;
}
print_r($arUsers);

echo "<br>";
foreach ($arUsers as &$arUser){
    $arUser['age']++;
}
//unset($arUser);
$arUser['tratata'] = "tratata";//mod. last element
print_r($arUsers);

echo "<hr>";

$string = 'Hello world!';

$arStr = explode(' ', $string);
print_r($arStr);
$newString = implode(", ", $arStr);
echo "<br>";
echo $newString;
$a = 10; $b = 5;
echo "a = {$a} and b = {$b}<br>";
printf("hello %s. Hi %s", 'Eugene', 'Mike');
