<?php
require_once('car.php');
class UberVan extends Car
{
    public $typeCarAccepted;
    public $seatsMaterial;
    public function __construct($license, $driver, $seatsMaterial, $typeCarAccepted)
    {
        parent::__construct($license, $driver);
        $this->seatsMaterial = $seatsMaterial;
        $this->typeCarAccepted = $typeCarAccepted;
    }

    public function setPassenger($passenger)
    { {
            if ($passenger == 6) {
                $this->passenger = $passenger;
            } else {
                echo "Nesecitas asignar a 6 pasajeros";
            }
        }
    }

    public function printDataCar()
    {
        parent::printDataCar();
        echo '<br>';
        echo 'Seat material: ' . $this->seatsMaterial;
        echo '<br>';
        echo "Type car accepted: " . $this->typeCarAccepted;
    }
}