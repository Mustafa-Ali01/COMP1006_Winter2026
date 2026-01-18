<?php
// including external files
require_once 'car.php';
require_once 'connect.php';


$myCar = new Car("Toyota", "Camry", 2024);
echo "<h1>Lab Results</h1>";
echo "<p>" . $myCar->PullCarDetails() . "</p>";

?>