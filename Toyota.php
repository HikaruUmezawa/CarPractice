<?php 
 require_once("./Car.php");

 class Toyota extends Car
 {
    public function __construct()
    {
        $this->capacity = 6;
        $this->price = mt_rand(800,900);
        $this->speed = round($this->price * 0.006,2);
        $this->crewNum = mt_rand(1,$this->capacity);
        $this->name = "Toyota";
        $this->maxSpeed = 250;
        $this->totalTime = 0;
    }
 }
 
?>