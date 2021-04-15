<?php 
 require_once("./Car.php");

 class Ferrari extends Car
 {
    public function __construct()
    {
        parent::__construct(2,9.5,3000);
    }
 }
 
?>