<?php 
 require_once("./Car.php");

 class Honda extends Car
 {
    public function __construct()
    {
        parent::__construct(8,4.3,600,700);
    }

   
 }
 
?>