const postForm = document.getElementById('postForm');
postForm.onsubmit = function(e){
    e.preventDefault();
    const postTitle = e.target.postTitle.value;
    const postText = e.target.postText.value;

    console.log(postTitle, postText, uid);
    addPost(postTitle, postText, uid);
}

async function addPost(title, text, posterId){
    const res = await fetch(`createPost.php?title=${title}&text=${text}&posterId=${posterId}`);
    const data = await res.json();
    console.log(data)
    window.location.href = "frontPage.php";
}