<?php
require_once('account.php');
class Car extends Account
{
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar()
    {
        echo " Licencia: $this->license, Driver: " . $this->driver->name;
        echo " Document: " . $this->driver->document, " Email: " . $this->driver->email,
        " Password: " . $this->driver->password;
        echo "\n";
        echo "Número de pasajeros: " . $this->passenger;
        echo "\n";
    }

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function setPassenger($passenger)
    {
        if ($passenger == 4) {
            $this->passenger = $passenger;
        } else {
            echo "Nesecitas asignar a 4 pasajeros";
        }
    }
}
?>