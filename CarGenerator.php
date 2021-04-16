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
        
        return $array;
    }

    public function generateNissan($min,$max)
    {
        $amount = mt_rand($min,$max);
        $array = Array();
    
        for ($i=0; $i < $amount ; $i++) { 
            $nissan =new Nissan();
            array_push($array,$nissan->price);
        }

        return $array;
        
    }

    public function generateFerrari($min,$max)
    {
        $amount = mt_rand($min,$max);
        $array = Array();
    
        for ($i=0; $i < $amount ; $i++) { 
            $ferrari = new Ferrari();
            array_push($array,$ferrari->price);
        }
        
        return $array;

    }
    
}



?>