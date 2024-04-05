<?php
require_once('car.php');
class UberBlack extends Car
{
    public $typeCarAccepted;
    public $seatsMaterial;
    public function __construct($license, $driver, $seatsMaterial, $typeCarAccepted)
    {
        parent::__construct($license, $driver);
        $this->seatsMaterial = $seatsMaterial;
        $this->typeCarAccepted = $typeCarAccepted;
    }
}