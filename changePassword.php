<?php
include('connect.php');
session_start();

$query = "UPDATE account SET password = :newPass WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindvalue(':newPass', $_GET['newPass']);
$stmt->bindvalue(':id', $_SESSION['uid']);
$stmt->execute();

echo json_encode(["msg" => "account password changed"]);