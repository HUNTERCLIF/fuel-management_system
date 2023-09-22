<?php
$vehicleId = $_POST['vehicleId'];
$fuelLevel = $_POST['fuelLevel'];
$distanceTraveled = $_POST['distanceTraveled'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO real_time_data (vehicle_id, fuel_level, distance_traveled) 
        VALUES ('$vehicleId', '$fuelLevel', '$distanceTraveled')";

if ($conn->query($sql) === TRUE) {
    header("Location: Homepage.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
