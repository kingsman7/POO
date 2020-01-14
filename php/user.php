<?php 

require_once("Account.php");

class User extends Account{
  public $user;
  public $phone;

  public function __construct($user, $phone)
  {
    $this->user = $user;  
    $this->phone = $phone;
  }
  public function printDataUser(){
    echo("user: ". $this->user->name . " Phone: " .$this->phone);
  }
}