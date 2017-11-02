
<?php
//1 - инкапсуляция

include "./classes/Cat.php";
include "./classes/Helper.php";

$cat = new Cat(5, 'male');
/*$cat->lagsCount = 3;
$cat->tailCount = 0;
$cat->age = 10;*/
echo "<pre>";
print_r($cat);
echo "<br>";
echo $cat->lagsCount;
$cat->lagsCount = 3;
echo "<br>";
echo $cat->lagsCount;
echo "<br>";
$cat->move();
echo "<br>";
echo $cat->getGender();
echo "<br>";
$cat->setGender('female');
echo "<br>";
echo $cat->getGender();
$cat->lol = 49;
echo "<br>";
echo $cat->lol;
echo "<br>";
echo Cat::$eyes;
echo "<br>";
Cat::$eyes = 4;
echo Cat::$eyes;
echo "<br>";
echo $cat::$eyes;
echo "<br>";
echo Helper::sum(4, 6);
echo "<br>";
echo Helper::PI;