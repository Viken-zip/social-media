<?php
$image = $_POST['pic'];

$imagename = $_FILES['pic']['name'];
$imagetype = $_FILES['pic']['type'];
$imageerror = $_FILES['pic']['error'];
$imagetemp = $_FILES['pic']['tmp_name'];

$imagePath = "images/";

if(is_uploaded_file($imagetemp)) {
    if(move_uploaded_file($imagetemp, $imagePath . $imagename)) {
        echo "Sussecfully uploaded your image.";
    }
    else {
        echo "Failed to move your image.";
    }
}
else {
    echo "Failed to upload your image.";
}