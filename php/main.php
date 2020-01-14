<?php
  require_once("Car.php");
  require_once("UberX.php");
  require_once("Driver.php");
  require_once("user.php");
  require_once("UberPool.php");
  require_once("Account.php");

 
  $driver = new Driver(new Account("Vero San", "18328382"), "04144125236", "as737dd7878 |");
  $driver->printDataDriver();
  
  $user = new User(new Account("Veronica Sanchez", "1834382"), "04144345236 ");
  $user->printDataUser();
