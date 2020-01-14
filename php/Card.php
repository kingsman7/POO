<?php 

include_once("Payment.php");

class Card extends Payment{
  public $number;
  public $name;
  public $cvv;
  public $date;

  public function __construct($id,$number, $name, $cvv, $date)
  {
    parent::__construct($id);
    $this->number = $number;
    $this->name = $name;
    $this->cvv = $cvv;
    $this->date = $date;
  }
}