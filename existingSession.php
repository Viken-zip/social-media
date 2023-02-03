<?php
session_start();
if(isset($_SESSION['uid'])){
    
    $id = $_SESSION['uid'];
    //echo "<script>console.log($id)</script>";
    //var_dump($id);
    //header('location: ../accountPage.php?u=' . $id);
    echo json_encode(["id" => "$id"]);
} else {
    echo json_encode(["id" => "no id"]);
}