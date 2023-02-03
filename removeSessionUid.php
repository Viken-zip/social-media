<?php
session_start();
unset($_SESSION['uid']);
echo json_encode(["msg" => "uid session removed"]);