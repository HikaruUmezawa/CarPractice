<?php 
 require_once("./Car.php");

 class Ferrari extends Car
 {
    public int $height;
    private bool $isUpped;

    public function __construct()
    {
        parent::__construct(2,9.5,3000,4000,"Ferrari",300);
        $this->height = 150;
        $this->isUpped = false;
    }

    public function liftUp(){

        //車高と加速度の計算
        $this->height = $this->height + 40;
        $this->speed = $this->speed * 0.8;
        $this->isUpped = true;
        echo "リフトアップしました。<br>";
        return [$this->height,$this->speed];

    }

    public function liftDown(){

        //リフトアップされていれば実行
        if ($this->isUpped == true) {

            //車高と加速度を元に戻す
            $this->height = $this->height - 40;
            $this->speed = $this->speed * 1.25;
            $this->isUpped = false;
           echo "リフトダウンしました。<br>";
           return [$this->height,$this->speed];

        }
         else{

             echo "リフトアップされていません。 <br>";

        }
    }

   
 }
 
?>