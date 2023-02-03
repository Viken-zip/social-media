<?php
include('connect.php');

class Account {
    public $name;
    public $email;
    public $password;
    public $id;
}

$name = $_GET['name'];
$password = $_GET['password'];

$query = "SELECT * FROM accounts.account WHERE (name, password) IN (VALUES(?, ?))";
$stmt = $conn->prepare($query);

$stmt->bindParam(1, $name);
$stmt->bindParam(2, $password);
$stmt->execute();

$stmt->setFetchMode(PDO::FETCH_CLASS, 'Account');
$data = $stmt->fetchAll();

echo json_encode(["msg" => $data]);