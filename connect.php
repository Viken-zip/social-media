<?php
$host = 'localhost';
$user = 'user_name';
$db = 'db_name';
$pass = 'user_password';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);