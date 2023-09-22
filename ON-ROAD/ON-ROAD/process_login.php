<?php
include('connect.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

    
        $host = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $database = 'project2';

        $conn = mysqli_connect($host, $dbUsername, $dbPassword, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT username, password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
            mysqli_stmt_bind_result($stmt, $storedUsername, $storedPassword);
            mysqli_stmt_fetch($stmt);

            if (password_verify($password, $storedPassword)) {
                session_start();
                $_SESSION["username"] = $storedUsername;
                header("Location: Homepage.php");
                exit();
            } else {
                $error_message = "Incorrect username or password.";
            }
        } else {
            $error_message = "User does not exist.";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        $error_message = "Please fill in all the fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Process</title>
</head>
<body>
    <h1>ON-ROAD FUEL DEMAND SYSTEM</h1>
    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
</body>
</html>
