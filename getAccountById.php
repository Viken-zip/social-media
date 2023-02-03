<?php
include('connect.php');

class Account{
    public $name;
    public $email;
    public $password;
    public $id;
}

$query = "SELECT * FROM account WHERE (id) IN (VALUES(?))";
$stmt = $conn->prepare($query);
//$stmt->bindvalue(':id', $_GET['id']);
$stmt->bindParam(1, $_GET['id']);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_CLASS, 'Account');

echo json_encode(["uid" => $data]);