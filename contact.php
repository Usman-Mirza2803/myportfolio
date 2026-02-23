<?php
include "db.php";

$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt->execute();
$stmt->close();

header("Location: index.php");
?>