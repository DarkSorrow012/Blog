<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "clients";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (usernañ-mes, passwords) VALUES ($username, $password)");
    $stmt->execute([$username, $hashed_password]);
    header("Location: index.php");
    exit();
}
?>