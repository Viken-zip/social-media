<?php
session_start();
$id = $_GET['id'];
$_SESSION['uid'] = $id;
echo json_encode(["msg" => $_GET['id']." session created"]);