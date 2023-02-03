const loginForm = document.getElementById('loginForm');

loginForm.onsubmit = function(e){
    e.preventDefault();

    const name = e.target.name.value;
    const password = e.target.password.value;
    login(name, password);
}

async function login(name, password){
    const res = await fetch('/login.php?name=' + name + '&password=' + password);
    const data = await res.json();
    console.log(data.msg[0]);
    if(data.msg[0].name == name && data.msg[0].password == password){
        console.log('yes u logged in');
        setSessionUid(data.msg[0].id)
        window.location.href = "/accountPage.php";
    }
}

async function setSessionUid(id){
    const res = await fetch('/session.php?id=' + id);
    const data = await res.json();
    console.log(data)
}

checkExistingSession();
async function checkExistingSession(){
    const res = await fetch('/existingSession.php');
    const data = await res.json();
    console.log(data.id);
    if(!isNaN(data.id)){
        window.location.href = "/accountPage.php";
    }
}