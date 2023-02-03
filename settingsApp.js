/*const nameText = document.getElementById('nameText');
//const emailText = document.getElementById('emailText');

const logoutBtn = document.getElementById('logoutBtn');
logoutBtn.addEventListener('click', ()=>{
    removeSessionUid();
    window.location.href = "/";
});

async function removeSessionUid(){
    const res = await fetch('/removeSessionUid.php');
    const data = await res.json();
    console.log(data);
}

checkExistingSession();
async function checkExistingSession(){
    const res = await fetch('/existingSession.php');
    const data = await res.json();
    console.log(data.id);
    if(isNaN(data.id)){
        window.location.href = "/";
    } else {
        getAccountData(data.id);
    }
}

async function getAccountData(id){
    const res = await fetch('/getAccountData.php?id=' + id);
    const data = await res.json();
    console.log(data.res[0]);
    console.log(nameText)
    nameText.innerHTML = data.res[0].name;
    //emailText.innerHTML = 'email: ' + data.res[0].email;
};

const profileDropDown = document.getElementById('profileDropDown');
let profileModalStatus = 'closed';
function profileModal(){
    if(profileModalStatus == 'closed'){
        profileModalStatus = 'open'
        profileDropDown.style.display = 'flex';
    } else {
        profileModalStatus = 'closed'
        profileDropDown.style.display = 'none';
    }
    console.log(profileModalStatus);
}

window.addEventListener('mouseup', ()=>{
    if(profileModalStatus == 'open'){
        profileModalStatus = 'closed'
        profileDropDown.style.display = 'none';
    }
*/

//-----

const changeNameForm = document.getElementById('changeNameForm');
changeNameForm.onsubmit = function(e){
    e.preventDefault();
    console.log(e.target.newName.value);
    changeName(e.target.newName.value);
};

async function changeName(newName){
    const res = await fetch('changeName.php?newName=' + newName);
    const data = await res.json();
    console.log(data);
};

const changePasswordForm = document.getElementById('changePasswordForm');
changePasswordForm.onsubmit = function(e){
    e.preventDefault();
    const newPassword = e.target.newPass.value
    const verifyPassword = e.target.verifyPass.value
    console.log(newPassword == verifyPassword)
    if(newPassword == verifyPassword){ changePassword(newPassword) }
}

async function changePassword(newPassword){
    const res = await fetch('changePassword.php?newPass=' + newPassword);
    const data = await res.json();
    console.log(data);
};

