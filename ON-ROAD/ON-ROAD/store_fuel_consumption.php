<?php

include("connect.php");
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$previousFuelLevel = $_POST['previousFuelLevel'];
$currentFuelLevel = $_POST['currentFuelLevel'];
$distanceTraveled = $_POST['distanceTraveled'];
$fuelConsumptionPerKm = $_POST['fuelConsumptionPerKm'];

$stmt = $conn->prepare("INSERT INTO fuel_consumption (previous_fuel_level, current_fuel_level, distance_traveled, fuel_consumption_per_km) VALUES (?, ?, ?, ?)");
$stmt->bind_param("dddd", $previousFuelLevel, $currentFuelLevel, $distanceTraveled, $fuelConsumptionPerKm);
$stmt->execute();

$stmt->close();
$conn->close();
?>
