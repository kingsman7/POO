<?php

  class Account {

    public $id = int;
    public $name = string;
    public $document = string;
    public $email = string;
    public $password = string;

    public function __construct($name,$document){
      $this->name = $name;
      $this->document = $document;
    }
  }