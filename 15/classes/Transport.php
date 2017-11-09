<?php

namespace Less15\Classes;

abstract class Transport {
    protected $name;
    protected $maxSpeed;
    protected $weight;
    protected $speed = 'km/h';

    public function __construct($name, $maxSpeed, $weight){
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
        $this->weight = $weight;
        echo "Transport Construct<br>";
    }

    public function getInfo(){
        return "$this->name, $this->maxSpeed $this->speed";
    }

}

