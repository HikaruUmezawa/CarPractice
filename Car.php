<?php

class Car{
    
    public int $capacity;
    public float $speed; // m/s^2
    public int $price;
    public int $crewNum;
    public string $name;
    public int $maxSpeed; // km/h
    public int $brakeTimes;
    public float $distanceToMax;
    public float $timeToMax;
    public float $distanceToStop;
    public float $timeToStop;
    public float $totalTime;
    public string $convertedTime;

    public function __construct($capacity,$speed,$max,$min,$name,$maxSpeed)
    {
        $this->capacity = $capacity;
        $this->price = mt_rand($max,$min);
        $this->speed = $speed;
        $this->crewNum = mt_rand(1,$capacity);
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
    }

    //乗員前の加速度を表示
    public function outPutSpeed(){
        echo $this->name."の加速度は".$this->speed."m/s^2です。<br>";
    }

    //定員と乗員数を表示
    public function outPutCrewNum(){
        echo $this->name."の定員数は".$this->capacity."人、乗員数は".$this->crewNum."人です。<br>";
    }

    //最高速度を表示
    public function outPutMaxSpeed(){
        echo $this->name."の最高速度は".$this->maxSpeed."km/hです。<br>";
    }

    //価格を表示
    public function outPutPrice(){
        echo $this->name."の価格は".number_format($this->price)."万円です。<br>";
    }

    //乗員数分加速度*0.95
    public function decelerate(){
        for ($i=0; $i < $this->crewNum; $i++) { 
            $this->speed = round($this->speed * 0.95,2);
        }
        echo $this->name."の乗員後の加速度は".$this->speed."m/s^2です。<br>";
    }

    //ブレーキの回数を決める
    public function defineBrakeTimes(){
        $this->brakeTimes = mt_rand(20,200);
        echo $this->name."のブレーキ回数は".$this->brakeTimes."回です。<br>";
    }


    public function pressAccelerator(){
        //最高速度になるまでの距離を計算(メートル)
        $this->distanceToMax = round(($this->maxSpeed * 1000 / 60 / 60)* ($this->maxSpeed * 1000 / 60 / 60) / $this->speed,1);

        //最高速度になるまでの時間を計算（秒）
        $this->timeToMax = round(2 * $this->distanceToMax / ($this->maxSpeed * 1000 / 60 / 60),1);
        
    }

    public function pressBrake(){
        //停止するまでの距離を計算
        $this->distanceToStop = round(($this->maxSpeed * 1000 / 60 / 60) * ($this->maxSpeed * 1000 / 60 / 60) / (2 * 9.8 * 0.7),1); 
        //停止するまでの時間を計算
        $this->timeToStop = round(($this->maxSpeed * 1000 / 60 / 60) / (9.8 * 0.7),1);
    }
}

?>