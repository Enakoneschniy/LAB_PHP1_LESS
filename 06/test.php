<?php
function sum($a, $b){
    return $a + $b;
}
function mul($a, $b){
    return $a * $b;
}
function divide($a, $b){
    return $a / $b;
}

if(function_exists($_GET['action'])){
    echo $_GET['action']($_GET['a'], $_GET['b']);
}
echo "<br>";
switch ($_GET['action']){
    case 'sum':
        echo sum($_GET['a'], $_GET['b']);
        break;
    case 'mul':
        echo mul($_GET['a'], $_GET['b']);
        break;
    case 'divide':
        echo divide($_GET['a'], $_GET['b']);
        break;
}