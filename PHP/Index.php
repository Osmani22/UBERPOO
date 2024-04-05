<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("account.php");
require_once("driver.php");
require_once("user.php");
require_once("uberVan.php");

$user = new User("Osmani Cruz", "QWER23", "osmanimorales16@gmail.com", "asd12334");
$user->printDataUser();
echo "<br>";
// Coches:
echo "Coches:";
echo "<br>";
echo "<br>";
echo "De 4 pasajeros:";
echo "<br>";
$uberX = new UberX("CVB231", new Account("ELsimplon", "AND234", "elsimplon@mail.com", "123345jk"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

echo "<br>";
$uberPool = new UberPool("TYU233", new Account("Unrandom", "ANE423", "unrandom@mail.com", "pqoeq945"), "Dodge", "Attitude");
$uberPool->setPassenger(4);
$uberPool->printDataCar();
echo "<br>";

echo "<br>";
echo "De 6 pasajeros:";
echo "<br>";
$uberVan = new UberVan("CVB231", new Account("juanlopez", "AND234", "juanlopez123mail.com", "123345jk"), "Cuero", "Volkswagen Combie");
$uberVan->setPassenger(6);
$uberVan->printDataCar();
?>
