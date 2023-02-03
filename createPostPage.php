<!DOCTYPE html>
<?php
    session_start();
    $uid = (isset($_SESSION['uid'])) ? $_SESSION['uid'] : '';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/createPost.css">
    <title>Your account</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script> const uid = <?php echo $uid ?> </script>
</head>
<body>
    <div class="pageContainer" >
        <?php
        $title = 'create a post';
        include('topbar/topbarPage.php') 
        ?>
        <div class="mainContainer" >
            <h2>create a new post</h2>
            <form id="postForm" action="" class="createPostContainer">
                <input type="text" placeholder="title" name="postTitle" required>
                <textarea name="postText" id="" cols="30" rows="10" placeholder="text" required></textarea>
                <div class="postMenu" >
                    <button type="submit" >Post</button>
                </div>
            </form>
        </div>
    </div>
    <script src="createPostApp.js"></script>
</body>
</html>