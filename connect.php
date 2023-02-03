<?php
$host = 'localhost';
$user = 'root';
$db = 'accounts';
$pass = '123';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);