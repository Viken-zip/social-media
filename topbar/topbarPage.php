<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/account.css">
    <title>Account settings</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="topbar/topbar.css">
</head>
<body>
    <div class="topbar">
        <a href="frontPage.php" class="siteLogo" >site name</a>
        <h2 class="mainTitle" >'.$title.'</h2>
        <div class="profileBox" onclick="profileModal()" >
            <span class="material-symbols-outlined dropdownIcon">expand_more</span>
            <div class="profileSideInfo" >
                <h3 id="nameText">name</h3>
                <span>online</span>
            </div>
            <div class="profile" ></div>
            <div class="profileDropDown" id="profileDropDown" >
                <a href="/accountPage.php" class="profileModalBtn" >Profile</a>
                <a href="/accountSettingsPage.php" class="profileModalBtn" >Settings</a>
                <a href="" id="logoutBtn" class="profileModalBtn" >Logout</a>
                <div class="profileModalBtn" ><input type="checkbox" id="darkMode"><label for="darkMode">Dark Mode</label></div>
            </div>
        </div>
    </div>
    <script src="topbar/topbarApp.js"></script>
</body>
</html>';