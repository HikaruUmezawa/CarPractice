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
        $this->totalTime = 0;
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
        $this->brakeTimes = mt_rand(10,30);
        //echo $this->name."のブレーキ回数は".$this->brakeTimes."回です。<br>";
    }


    public function pressAccelerator(){
        //最高速度になるまでの距離を計算(メートル)
        $this->distanceToMax = ($this->maxSpeed * 1000 / 60 / 60)* ($this->maxSpeed * 1000 / 60 / 60) / $this->speed;
        //最高速度になるまでの時間を計算（秒）
        $this->timeToMax = 2 * $this->distanceToMax / ($this->maxSpeed * 1000 / 60 / 60);

    }

    public function pressBrake(){
        //停止するまでの距離を計算
        $this->distanceToStop = ($this->maxSpeed * 1000 / 60 / 60) * ($this->maxSpeed * 1000 / 60 / 60) / (2 * 9.8 * 0.7); 
        //停止するまでの時間を計算
        $this->timeToStop = ($this->maxSpeed * 1000 / 60 / 60) / (9.8 * 0.7);

    }

    public function stopOnSignal(){
        $stopTime = mt_rand(0,100);
        if ($stopTime == 0) {
            $this->totalTime = $this->totalTime + 600;
            echo $this->name."の前でおばあちゃんが転倒！10分のロス！！<br>" ;
        } elseif($stopTime == 1 | $stopTime == 2 | $stopTime == 3){
            $this->totalTime = $this->totalTime + 180;
            echo $this->name."はなが～い信号に捕まり3分止まる。<br>";
        } else{
            $this->totalTime = $this->totalTime + 10;
        }
        return $this->totalTime;
    }

}

?>