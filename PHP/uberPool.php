<?php
    require_once('car.php');
    class UberPool extends Carr
    {
        public $brand;
        public $model;

        public function __construct($license, $driver, $brand, $model)
        {
            parent::__construct($license, $driver)
            $this->license = $license;
            $this->driver = $driver;
        }
    }
?>