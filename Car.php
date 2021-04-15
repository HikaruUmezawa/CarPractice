<?php

class Car{
    
    public int $capacity;
    public float $speed;
    public int $price;

    public function __construct($capacity,$speed,$price)
    {
        $this->capacity = $capacity;
        $this->speed = $speed;
        $this->price = $price;
    }

    public function pressAccelerator(){
        return;
    }

    public function pressBrake(){
        return;
    }
}

?>