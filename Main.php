<?php
require_once("./Car.php");
require_once("./Ferrari.php");
require_once("./Honda.php");
require_once("./Nissan.php");
require_once("./Toyota.php");
require_once("./Calucurator.php");


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
        
        //Q3
        echo "--------Q3-------- <br>";
        $calucurator = new Calucurator();
        $calucurator->outputResult();

        //Q4
        echo "--------Q4-------- <br>";
        $nissan->findAccident();
        echo "<br>";
        $honda->outPutSpeed();
        $nissan->outPutSpeed();
        $ferrari->outPutSpeed();
        $honda->outPutCrewNum();
        $nissan->outPutCrewNum();
        $ferrari->outPutCrewNum();
        echo "<br>";
        $honda->decelerate();
        $nissan->decelerate();
        $ferrari->decelerate();

        //Q5
        echo "--------Q5-------- <br>";
        $toyota = new Toyota();
        $toyota->outPutPrice();
        $toyota->outPutSpeed();
        
        echo "<br>";

        //レースを実行する
        //距離を決める
        $distance = $calucurator->defineDistance();
        //各インスタンスを配列に入れる
        $cars = array($honda,$nissan,$ferrari,$toyota);

        foreach ($cars as $car) {

            $car->outPutCrewNum();
            $car->decelerate();

            //最高速度表示
            $car->outPutMaxSpeed();

            //各車が最高速度に到達するまでの時間と距離を計算
            $car->pressAccelerator();
            //各車が停止するまでの時間と距離を計算
            $car->pressBrake();
            //各車のブレーキの回数を決める
            $car->defineBrakeTimes();

            //アクセル中、ブレーキ中の総時間と総距離を計算
            $acceleDistance = $car->distanceToMax;
            $acceleTime = $car->timeToMax;
            $brakingDistance = 0;
            $brakingTime = 0;

            //ブレーキ回数分ループ
            for ($i=0; $i < $car->brakeTimes ; $i++) { 
                $acceleDistance += $car->distanceToMax;
                $acceleTime += $car->timeToMax;
                $brakingDistance += $car->distanceToStop;
                $brakingTime += $car->timeToStop;  
            }

            $driveDistance = round($acceleDistance + $brakingDistance);
            
            //最高速度で移動した時間と距離を計算
            $maxSpeedDistance = $distance - $driveDistance;

            $maxSpeedTime = round($maxSpeedDistance / ($car->maxSpeed * 1000 / 60 / 60)); //秒

            //完走した時間を計算
            $car->totalTime = $maxSpeedTime + round($acceleTime + $brakingTime); //秒

            //完走した時間を変換
            $car->convertedTime = $calucurator->convertTime($car->totalTime);

            //表示
            echo $car->name."の完走時間は".$car->convertedTime."です。<br>";
            echo "<br>";

        }

        //順位用配列にいれる
        $count = 0;
        foreach ($cars as $car) {
            $count ++;
            $times[$count] = array('name' => $car->name, 'totalTime' => $car->totalTime);
        }
        
        //ソート用配列  
        foreach ($times as $key => $value) {
            $sort[$key] = $value['totalTime'];
        }
        
        array_multisort($sort, SORT_ASC, $times);

        //順位表示  
        foreach ($times as $key => $value) {
            $key = $key +1;
            echo $key."位は".$value['name']."です。<br>";
        }

        

    }
}

$main = new Main();
$main->output(); 

?>