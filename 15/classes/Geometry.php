<?php


namespace Less15\Classes;


class Geometry
{
    private $figure;
    public function __construct(Figure $figure)
    {
        $this->figure = $figure;
    }

    public function area(){
        return $this->figure->area();
    }
}