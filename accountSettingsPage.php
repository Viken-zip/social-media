<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/account.css">
    <title>Account settings</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="styling/accountSettings.css">
</head>
<body>
    <div class="pageContainer" >
        <?php 
        $title = 'account settings';
        include('topbar/topbarPage.php') 
        ?>
        <div class="mainContainer" >
            <h2>Account settings</h2>
            <form class="editContainers" id="changeNameForm" >
                <h2>Change name</h2>
                <div>
                    <label for="newName">new name:</label>
                    <input type="text" name="newName" id="newNameInput" placeholder="New name" >
                    <button class="basicBtn limeBtn" >Change name</button>
                </div>
            </form>
            <form class="editContainers" id="changePasswordForm" >
                <h2>change password</h2>
                <div>
                    <label for="newPass">new password:</label>
                    <input type="text" name="newPass" id="newPassInput" placeholder="new password" required>
                    <label for="verifyPass">verify password:</label>
                    <input type="text" name="verifyPass" id="verifyPassInput" placeholder="verify password" required>
                    <button class="basicBtn limeBtn" >Change password</button>
                </div>
            </form>
        </div>
        </div>
    <script src="settingsApp.js"></script>
</body>
</html>