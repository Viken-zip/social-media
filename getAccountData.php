<?php
include('connect.php');

$id = $_GET['id'];

$query = "SELECT * FROM account WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->execute([$id]);
$data = $stmt->fetchAll();

echo json_encode(["res" => $data]);