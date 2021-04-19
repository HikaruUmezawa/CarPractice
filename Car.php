<?php

class Car{
    
    public int $capacity;
    public float $speed;
    public int $price;
    public int $crewNum;
    public string $name;

    public function __construct($capacity,$speed,$max,$min,$name)
    {
        $this->capacity = $capacity;
        $this->speed = $speed;
        $this->price = mt_rand($max,$min);
        $this->crewNum = mt_rand(1,$capacity);
        $this->name = $name;
    }

    //乗員前の加速度を表示
    public function outPutSpeed(){
        echo $this->name."の加速度は".$this->speed."m/s^2です。<br>";
    }

    //定員と乗員数を表示
    public function outPutCrewNum(){
        echo $this->name."の定員数は".$this->capacity."人、乗員数は".$this->crewNum."人です。<br>";
    }

    //乗員数分加速度*0.95
    public function decelerate(){
        for ($i=0; $i < $this->crewNum; $i++) { 
            $this->speed = $this->speed * 0.95;
        }
        echo $this->name."の乗員後の加速度は".round($this->speed,2)."m/s^2です。<br>";
    }

    public function pressAccelerator(){
        return;
    }

    public function pressBrake(){
        return;
    }
}

?>