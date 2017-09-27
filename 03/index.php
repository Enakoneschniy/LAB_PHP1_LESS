<?php
echo "<pre>";
//1
$a = 1;
$b = 10;
if($a < $b){
	//если $a < $b
	echo "a < b";
}
echo "<br>";
//2
$a = 1;
$b = 10;
if($a > $b){
	//если $a > $b
	echo "a > b";
}else{
	//если $a не больше $b
	echo "a не больше b";
}
echo "<br>";
//3

$a = 2;
$b = 3;

if($a > $b){

}elseif($a < $b){

}else{

}

//альтернативная запись
if($a > $b):
	//code
endif;

if($a > $b):
	//code
else:
	//code
endif;

if($a > $b):
	//code
elseif($a < $b):
	//code
else:
	//code
endif;

//оператор выбора

$dayNum = 33;

switch ($dayNum) {
	case 1:
		echo "Понедельник";
		//code
		break;
	case 2:
		echo "Вторник";
		break;
	case 3:
		echo "Среда";
		break;
	case 4:
		echo "Четверг";
		break;
	case 5:
		echo "Пятница";
		break;
	case 6:
		echo "Суббота";
		break;
	case 7:
		echo "Воскресенье";
		break;
	
	default:
		echo "Ошибка!!!";
		break;
}

//циклы
echo "<br>";
//цикл предусловием
$i = 0;
while($i < 10){
	echo pow($i, 2), "<br>";
	$i++;
}

//цикл с постусловием
do{
	echo $i++, "<br>";
}while($i < 10);

for($i = 0; $i < 5; $i++){
	echo $i, "<br>";
}
echo "<hr>";
for($i = 0; $i <= 10; $i++){
	if($i % 2 === 0){
		continue;
	}
	echo $i, "<br>";
}
echo "<hr>";
$count = 1;
while (true) {
	$num = rand(1, 100);
	if($num > 50){
		echo "{", $num, "}";
		break;
	}else{
		echo $count++, "<br>";
	}
}

//array
echo "<br>";
$arrNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$arrNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
print_r($arrNumbers);
echo "<br>";
print_r($arrNumbers[5]);
echo "<br>";
$arrNumbers[9] = 10;
print_r($arrNumbers);
echo "<br>";
$arrNumbers[] = 11;
print_r($arrNumbers);
echo "<br>";
$arrNum = [];
for($i = 0; $i < 10; $i++){
	if($i % 2 === 0){
		$arrNum[] = $i;
	}
}
print_r($arrNum);
$arrRand = [];
$size = rand(5, 20);
for($i = 0; $i < $size; $i++){
	$arrRand[rand(-100, 100)] = rand(-100, 100);
}
echo "<br>";
print_r($arrRand);
echo "<br>";
$arrRand["vasya"] = "Petya";
$arrRand[] = 102;
print_r($arrRand);

/*$Вася = "Петя";
echo $Вася;*/

$arrPhone = [
	'title' => 'Iphone X',
	'price' => 999,
	'currency' => 'USD',
	'properties' => [
		'storage' => '64gb',
		'display' => '5.5'
	]
];

echo $arrPhone['title'], "<br>", $arrPhone['price'];

$arrPhones = [
	'ip-x-2017' => [
		'title' => 'Iphone X',
		'price' => 999,
		'currency' => 'USD',
		'properties' => [
			'storage' => '64gb',
			'display' => '5.5'
		]
	],
	'ip-8-2017' =>[
		'title' => 'Iphone 8',
		'price' => 500,
		'currency' => 'USD',
		'properties' => [
			'storage' => '32gb',
			'display' => '5.5'
		]
	]
];
echo "<hr>";
/*echo "<br>";
echo $arrPhones[0]['title'], "<br>", $arrPhones[0]['price'];
echo "<br>";
echo $arrPhones[1]['title'], "<br>", $arrPhones[1]['price'];*/
unset($arrPhone);
foreach ($arrPhones as $article => $arrPhone) {
	echo 	$article, " - ", $arrPhone['title'], 
			"<br>", $arrPhone['price'], "<br>";
}
echo "<hr>";
unset($arrPhone);
foreach ($arrPhones as $article => $arrPhone) {
	echo "<strong>", $article, "</strong><br>";
	foreach ($arrPhone as $key => $value) {
		if(!is_array($value)){
			echo "<strong>$key</strong>: $value<br>";
		}else{
			echo "<strong>", $key, "</strong><br>";
			foreach ($value as $prop_key => $property) {
				echo "<strong>$prop_key</strong>: $property<br>";
			}
		}
		
	}
	echo "<hr>";
}
