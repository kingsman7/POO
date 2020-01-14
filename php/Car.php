<?php

include_once "Account.php";

  class Car {
   public $id = int;
   public $license = string;
   public $driver;
   public $passanger = int;

   public function __construct($license, $driver){
     $this->license = $license;
     $this->driver = $driver;
   }

   public function printDataCar(){
     echo("License: " . $this->license);
     echo("Driver: " . $this->driver->name);
   }
  }