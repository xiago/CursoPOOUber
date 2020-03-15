<?php
    require_once("car.php");
    require_once("uberX.php");
    require_once("uberPool.php");
    require_once("account.php");

    $uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
    $uberX->printDataCar();

    $uberPool = new UberPool("CVB123", new Account("Andrea Herrera", "AND765"), "Dodge", "Dat");
    $uberPool->printDataCar();

    /*$car = new Car("AMS234", new Account("Andres Herrera", "AND876"));
    $car->printDataCar();

    $car2 = new Car("QWE567", new Account("Martha Olivera", "XFH234"));
    $car2->printDataCar();*/

?>