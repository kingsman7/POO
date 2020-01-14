<!DOCTYPE html>
<?php
  include "Account.php";
  include "Car.php"
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>POO con PHP</h1>

  <?php
    $car = new Car("XCSJS", new Account("Angel Barrios", "18419539"));
    $car->passanger(4);
    echo("<p>");
      $car->printDataCar();
    echo("</p>");
  ?>
</body>
</html>