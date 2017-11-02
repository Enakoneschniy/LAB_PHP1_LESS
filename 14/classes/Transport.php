<?php


class Transport
{
    private $fuel = 0;

    public function __construct(){
        $this->fuel = rand(2, 15);
        echo __CLASS__." Construct<br>";
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        //$this->$name = $value;
    }

    public function __toString()
    {
        return "<strong>Fuel:</strong> $this->fuel<br>";
    }

    public function __invoke()
    {
        return rand(50, 60);
    }
    private function sum($a, $b){
        return $a + $b;
    }
    private function sum1($a, $b, $c){
        return $a + $b + $c;
    }
    private function sum2(...$args){
        $sum = 0;
        foreach ($args as $arg) {
            $sum += $arg;
        }
        return $sum;
    }
    public function __call($name, $arguments)
    {
       var_dump($name);
       echo "<br>";
       var_dump($arguments);
       if(method_exists($this, $name)){
           //echo call_user_func($this->$$name, $arguments), "<br>";
           echo $this->$name(...$arguments), "<br>";
       }
    }
    public static function __callStatic($name, $arguments){
        echo "This is STATIC!";
        var_dump($name);
        echo "<br>";
        var_dump($arguments);
    }

    public  function __destruct(){
        echo __CLASS__." Destruct<br>";
    }
}