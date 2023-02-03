<?php
include('connect.php');
session_start();

$query = "UPDATE account SET name = :newName WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindvalue(':newName', $_GET['newName']);
$stmt->bindvalue(':id', $_SESSION['uid']);
$stmt->execute();

echo json_encode(["msg" => "account name changed"]);