<?php

class Route
{
    public static function __callStatic($name, $arguments)
    {
        //var_dump($arguments);
        if($_SERVER['REQUEST_METHOD'] === strtoupper($name)){
            //echo "OK!";
            $uri = trim($_SERVER['REQUEST_URI'], '/');
            $url = trim($arguments[0], '/');
            if($uri === $url){
                if($arguments[1] instanceof Closure){
                    $arguments[1]();
                }else{
                    $arCtrl = explode('@', $arguments[1]);
                    $className = $arCtrl[0];
                    $actionName = $arCtrl[1];
                    $obj = new $className();
                    $obj->$actionName();
                }
            }

        }

    }
}