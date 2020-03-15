<?php
require_once("account.php");
    class car{
        public $id;
        public $license;
        public $driver;
        public $passangenger;

        public function __construct($name, $document)
        {
            $this->name = $name;
            $this->document = $document;
        }

        public function printDataCar()
        {
            echo "Licencia: $this->license Driver: ".$this->driver->name;
        }
    }
?>
