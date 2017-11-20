<?php

ini_set('display_errors',1);
include "../app/classes/Singleton.php";

$obj = Singleton::getInstance();
var_dump($obj);

$obj1 = Singleton::getInstance();

var_dump($obj1);