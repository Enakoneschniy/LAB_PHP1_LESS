<?php
ini_set('display_errors', 1);
include './autoload.php';
/*include './classes/Transport.php';
include './classes/File.php';
include './classes/HomeCtrl.php';

include './classes/Route.php';*/

$t = new Transport();
echo $t->fuel, "<br>";
$t->fuel = 29;
echo $t->fuel, "<br>";
echo $t, "<br>";
echo $t(), "<br>";
$t->sum(3, 2);
$t->sum1(3, 2, 4);
$t->sum2(3, 2, 4, 1, 3, 4, 6);
$t->sum2(3, 2, 4, 1, 3);
unset($t);

echo "END";

//$file = new File('example.txt');

//$file->write('First line!');
echo "<hr>";
$arTransports = [];
for($i = 0; $i < 10; $i++){
    $arTransports[] = new Transport();
}

foreach ($arTransports as $tr){
    echo $tr;
}

Transport::anyMethod();

/*Route::get('/14', function (){
    echo '<h1>Works!</h1><br>';
});*/
Route::get('/14', "HomeCtrl@index");
/*Route::post('/14', function ($data){

});*/

