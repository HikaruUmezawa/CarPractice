<?php

class Car{
    
    public int $capacity;
    public float $speed;
    public int $price;

    public function __construct($capacity,$speed,$max,$min)
    {
        $this->capacity = $capacity;
        $this->speed = $speed;
        $this->price = mt_rand($max,$min);
    }


    public function pressAccelerator(){
        return;
    }

    public function pressBrake(){
        return;
    }
}

?>