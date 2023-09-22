<?php
include('connect.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $insertSql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insertSql);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}
?>
