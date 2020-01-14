<?php 

  require_once("Payment");

  class Cash extends Payment{
    public function __construct($id)
    {
      parent::__construct($id);
    }
  }
