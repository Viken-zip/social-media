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
    <link rel="stylesheet" href="styling/frontPage.css">
    <title>Your account</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script> const uid = <?php echo $uid ?> </script>
</head>
<body>
    <div class="pageContainer" >
    <?php 
    $title = 'posts';
    include('topbar/topbarPage.php') 
    ?>
        <div class="mainContainer" id="mainContainer" >
            <div class="postContainers newPostContainer" >
                <input type="text" id="newPostBtn" placeholder="Create new post" >
            </div>
            <div class="postContainers" >
                <div class="postInfo" >
                    <h3 class="postersName" >name of poster</h3>
                    <h2 class="postTitle" >title of posts should be funny</h2>
                </div>
                <div class="postBody" >
                    <span class="postText" >test text Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate beatae ad qui odit id in magnam similique quasi aut ex sunt iusto corporis nostrum delectus totam molestiae voluptatem, laudantium temporibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsam quod quos velit cumque corrupti beatae sapiente minima assumenda quibusdam dolore, iste, similique veniam illo asperiores ea error voluptatibus? Nihil. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, facilis sint tenetur nemo aliquid magnam earum culpa architecto, nihil unde optio dignissimos corrupti voluptatibus minus, non eveniet ab quam hic.</span>
                </div>
                <div class="postMenu" >
                    <button>like</button>
                    <button>dislike</button>
                </div>
            </div>
            <div id="postsContainer" >
            
            </div>
        </div>
    </div>
    <script src="frontPageApp.js"></script>
</body>
</html>