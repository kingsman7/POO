<?php
require_once("Car.php");

class UberVan extends Car
{
  public $typeCarAccepted;
  public $seatMaterial;

  public function __construct($license, $driver, $typeCarAccepted, $seatMaterial)
  {
    parent::__construct($license, $driver);
    $this->typeCarAccepted = $typeCarAccepted;
    $this->seatMaterial = $seatMaterial;
  }
}
