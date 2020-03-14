<?php
require_once("account.php");
    class car{
        $id;
        $license;
        $driver;
        $passangenger;

        public function __construct($name, $document)
        {
            $this->name = $name;
            $this->document = $document;
        }
    }
?>
