<?php 
 require_once("./Car.php");

 class Nissan extends Car
 {
    public function __construct()
    {
        parent::__construct(5,5.4,200,300,"Nissan",220);
    }

    public function findAccident()
    {
        $befSpeed = $this->speed;
        $aftSpeed = $this->speed * 0.6;
        $this->speed = $aftSpeed;

        echo $this->name."に欠陥が見つかりました。<br>加速度は".$befSpeed."m/s^2ではなく".$aftSpeed."m/s^2です。<br>";
    }
 }
 
?>