<?php 
 require_once("./Car.php");

 class Nissan extends Car
 {
    public function __construct()
    {
        parent::__construct(5,5.4,200);
    }
 }
 
?>