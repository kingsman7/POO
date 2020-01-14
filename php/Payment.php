<?php
class Payment
{
  public $id = int;

  public function __construct($id)
  {
    $this->id = $id;
  }
}
