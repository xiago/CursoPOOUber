<?php
    require_once("car.php");
    require_once("account.php");

    $car = new Car("AMS234", new Account("Andres Herrera", "AND876"));
    $car->printDataCar();

    $car2 = new Car("QWE567", new Account("Martha Olivera", "XFH234"));
    $car2->printDataCar();

?>