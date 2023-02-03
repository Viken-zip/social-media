<?php
include('connect.php');

$query = "INSERT INTO account(name, email, password) VALUES(:name, :email, :password)";
$stmt = $conn->prepare($query);
$stmt->bindvalue(':name', $_GET['name']);
$stmt->bindvalue(':email', $_GET['email']);
$stmt->bindvalue(':password', $_GET['password']);
$stmt->execute();

echo json_encode(["msg" => "new account created"]);