<?php
    require_once('car.php');
    class UberVan extends Carr
    {
        public $typeCarAccepted;
        public $seatsMaterial;

        public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial)
        {
            parent::__construct($license, $driver)
            $this->typeCarAccepted= $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;
        }
    }
?>