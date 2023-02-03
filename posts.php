<?php
include('connect.php');

class post {
    public $title;
    public $text;
    public $posterId;
    public $date;
}

$query = "SELECT * FROM posts";
$stmt = $conn->prepare($query);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_CLASS, 'post');
$data = $stmt->fetchAll();

echo json_encode(['data' => $data]);