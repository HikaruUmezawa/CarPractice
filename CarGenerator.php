<?php
require_once("./Ferrari.php");
require_once("./Honda.php");
require_once("./Nissan.php");

class CarGenerator
{
    public function generateHonda($min,$max)
    {
        $amount = mt_rand($min,$max);
        $array = Array();
    
        for ($i=0; $i < $amount ; $i++) { 
            $honda = new Honda();
            array_push($array,$honda->price);
        }
        
        echo "Hondaを".$amount."台生成しました。<br>";

        foreach ($array as $key => $value) {
            $key = $key + 1;
            echo $key."台目 価格：".number_format($value)."万円 <br>";
        }

        return $array;
    }

    public function generateNissan($min,$max)
    {
        $amount = mt_rand($min,$max);
        $array = Array();
    
        for ($i=1; $i <= $amount ; $i++) { 
            $nissan =new Nissan();
            array_push($array,$nissan->price);
        }

        echo "Nissanを".$amount."台生成しました。<br>";

        foreach ($array as $key => $value) {
            $key = $key + 1;
            echo $key."台目 価格：".number_format($value)."万円 <br>";
        }


        return $array;
        
    }

    public function generateFerrari($min,$max)
    {
        $amount = mt_rand($min,$max);
        $array = Array();
    
        for ($i=1; $i <= $amount ; $i++) { 
            $ferrari = new Ferrari();
            array_push($array,$ferrari->price);
        }

        echo "Ferrariを".$amount."台生成しました。<br>";

        foreach ($array as $key => $value) {
            $key = $key + 1;
            echo $key."台目 価格：".number_format($value)."万円 <br>";
        }


        return $array;

    }
    
}



?>