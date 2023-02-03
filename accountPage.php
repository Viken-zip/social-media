<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/account.css">
    <title>Your account</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="pageContainer" >
        <?php 
        $title = 'profile';
        include('topbar/topbarPage.php') 
        ?>
        <div class="mainContainer" >
            <span id="emailText">email</span>
            <form action="/profileImage.php">
                <input type="file" id="profileImgFile" name="profileImgFile">
                <input id="profileImgFile" type="submit">
            </form>
        </div>
    </div>
    <script src="accountApp.js"></script>
</body>
</html>