const newPostBtn = document.getElementById('newPostBtn');
newPostBtn.addEventListener('click', ()=>{
    window.location.href = "createPostPage.php";
});

getPosts();
async function getPosts(){
    const res = await fetch('posts.php');
    const result = await res.json();
    const data = result.data;
    //console.log('data' ,data)
    //console.log(data[0].title, data[0].text, data[0].posterId, data[0].date);
    return data;
}

//console.log('user id' + uid);
getUserById(uid);
async function getUserById(id){
    const res = await fetch(`getAccountById.php?id=${id}`);
    const data = await res.json();
    return data.uid[0];
    console.log('user id', data.uid[0]);
}

renderPosts();
async function renderPosts(title, text){
    const postsContainer = document.getElementById('postsContainer');
    let posts = await getPosts();
    /*posts = await Promise.all( posts.map(async postObj => { 
        postObj.poster = await getUserById(postObj.posterId);
    }));*/
    for(const post of posts){
        const user = await getUserById(post.posterId);
        //console.log(he);
        post.poster = user.name;
    };
    console.log(posts)

    //const ha = await getUserById(1);
    //console.log(ha);

    //posts[0].poster = 'test'
    //console.log(posts[0])
    postsContainer.innerHTML += posts.map(post => `<div class="postContainers" >
                <div class="postInfo" >
                    <h3 class="postersName" >${post.poster}</h3>
                    <h2 class="postTitle" >${post.title}</h2>
                </div>
                <div class="postBody" >
                    <span class="postText" >${post.text}</span>
                </div>
                <div class="postMenu" >
                    <button>like</button>
                    <button>dislike</button>
                </div>
            </div>
    `
    );
}