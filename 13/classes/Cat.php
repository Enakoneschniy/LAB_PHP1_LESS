<?php

class Cat
{
   public $lagsCount;
   public $tailCount;
   public $age;
   private $gender;
   public static $eyes = 2;

   public function __construct($age, $gender, $lagsCount = 4, $tailCount = 1)
   {
       $this->lagsCount = $lagsCount;
       $this->gender = $gender;
       $this->age = $this->randAge();
       $this->tailCount = $tailCount;
   }

   private function randAge(){
       return rand(1, 10);
   }

   public function getGender(){
       return $this->gender;
   }

   public function setGender($value){
       $this->gender = $value;
   }

   public function getEyes(){
       //return $this->
   }
   public function move(){
       echo "Moving Cat!!!";
   }

}
