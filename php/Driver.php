<?php 

require_once("Account.php");

class Driver extends Account{
  public $user;
  public $phone;
  public $diveLicense;

  public function __construct($user, $phone,$diveLicense)
  {
    $this->user = $user;  
    $this->phone = $phone;
    $this->driveLicense = $diveLicense;
  }
  public function printDataDriver(){
    echo("Driver: ". $this->user->name . " drive lisence: " . $this->driveLicense);
  }
}