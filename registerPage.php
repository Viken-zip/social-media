<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/register.css">
    <link rel="stylesheet" href="styling/global.css">
    <title>Document</title>
</head>
<body>
    <div class="frontPageContainer" >
        <h2>Register</h2>
        <div class="registerBox">
            <form class="registerForm" id="registerForm" action="">
                <div>
                    <label for="">name</label>
                    <input name="name" type="text" placeholder="name" required>
                </div>
                <div>
                    <label for="">email</label>
                    <input name="email" type="text" placeholder="email" required>
                </div>
                <div>
                    <label for="">password</label>
                    <input name="password" type="password" placeholder="password" required>
                </div>
                <div>
                    <label for="">verify password</label>
                    <input name="verifyPassword" type="password" placeholder="verify password" required>
                </div>
                <button type="submit" class="roundBtn" >Register</button>
            </form>
        </div>
        <a href="/index.php">Already have an account?</a>
    </div>
    <script src="registerApp.js"></script>
</body>
</html>