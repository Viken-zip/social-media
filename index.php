<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/style.css">
    <link rel="stylesheet" href="styling/global.css">
    <title>accounts</title>
</head>
<body>
    <div class="frontPageContainer" >
        <h2>Login</h2>
        <div class="loginBox" >
            <form class="loginForm" id="loginForm">
                <div>
                    <label for="inputName">name</label>
                    <input id="inputName" name="name" type="text" placeholder="name">
                </div>
                <div>
                    <label for="inputPassword">password</label>
                    <input id="inputPassword" name="password" type="password" placeholder="password">
                </div>
                <button class="roundBtn" type="submit" >Login</button>
            </form>
        </div>
        <a href="/registerPage.php">Don't have an account yet?</a>
    </div>
    <script src="app.js"></script>
</body>
</html>