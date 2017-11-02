<?php

class File
{
    private $handle = null; //resource type

    public function __construct($filename){
        $this->handle = fopen($filename,'a+');
    }

    public function write($string){
        fputs($this->handle, $string."\r\n");
    }

    public function __destruct()
    {
        fclose($this->handle);
    }
}