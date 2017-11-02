<?php

class Helper
{
    private static $num = 10;
    const PI = 3.14;
    public static function sum($a, $b){
        return $a + $b;
    }

    public static function rand($min, $max){
        return rand($min, $max) + self::$num;
    }
}
