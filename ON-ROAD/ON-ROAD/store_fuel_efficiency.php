<?php

$prevFuel = $_POST['prevFuel'];
$currentFuel = $_POST['currentFuel'];
$distance = $_POST['distance'];
$fuelEfficiency = $_POST['fuelEfficiency'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$prevFuel = $_POST['prevFuel'];
$currentFuel = $_POST['currentFuel'];
$distance = $_POST['distance'];
$fuelEfficiency = $prevFuel - $currentFuel / $distance;

$sql = "INSERT INTO fuel_efficiency (prev_fuel, current_fuel, distance, fuel_efficiency)
        VALUES ('$prevFuel', '$currentFuel', '$distance', '$fuelEfficiency')";

if ($conn->query($sql) === TRUE) {
    header("Location: Homepage.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>