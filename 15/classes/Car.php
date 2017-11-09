<?php


namespace Less15\Classes;


class Car extends Transport
{
    protected $body;

    public function __construct($name, $maxSpeed, $weight, $body){
        parent::__construct($name, $maxSpeed, $weight);
        echo "Car Construct<br>";
        $this->body = $body;
    }

    public function getInfo()
    {
        return parent::getInfo() . " $this->body";
    }
}