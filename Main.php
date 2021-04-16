<?php
require_once("./Car.php");
require_once("./Ferrari.php");
require_once("./Honda.php");
require_once("./Nissan.php");

class Main 
{
    public function output(){
        $honda = new Honda();
        $nissan = new Nissan();
        $ferrari = new Ferrari();

        //Q1
        echo "--------Q1-------- <br>";
        echo "[Honda] 定員数：".$honda->capacity. "人　価格：".$honda->price."万円　加速度：".$honda->speed."m/s <br>"; 
        echo "[Nissan] 定員数：".$nissan->capacity. "人　価格：".$nissan->price."万円　加速度：".$nissan->speed."m/s <br>"; 
        echo "[Ferrari] 定員数：".$ferrari->capacity. "人　価格：".$ferrari->price."万円　加速度：".$ferrari->speed."m/s <br>"; 
        
        //Q2
        echo "--------Q2-------- <br>";
        echo "[Ferrari] 車高：".$ferrari->height."mm　加速度：".$ferrari->speed."m/s <br>"; 
        $ferrari->liftUp();
        echo "[Ferrari] 車高：".$ferrari->height."mm　加速度：".$ferrari->speed."m/s <br>"; 

    }
}

$main = new Main();
$main->output(); 

?>