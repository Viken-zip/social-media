<?php
include('connect.php');

$query = "INSERT INTO  posts(title, text, posterId) VALUES(:title, :text, :posterId)";
$stmt = $conn->prepare($query);
$stmt->bindvalue(':title', $_GET['title']);
$stmt->bindvalue(':text', $_GET['text']);
$stmt->bindvalue(':posterId', $_GET['posterId']);
$stmt->execute();

echo json_encode(["msg" => "new post created"]);