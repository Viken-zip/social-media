const registerForm = document.getElementById('registerForm');
registerForm.onsubmit = function (e){
    e.preventDefault();
    const name = e.target.name.value;
    const email = e.target.email.value;
    const password = e.target.password.value;
    const verifyPassword = e.target.verifyPassword.value;

    console.log(name)
    if(verifyPassword == password){
        addAccount(name, email, password);
    } else {
        console.log('wither not filld all inputs or not corrent verify password')
    }
    //addAccount(name, email, password);
};

async function addAccount(name, email, password){
    const res = await fetch(`register.php?name=${name}&email=${email}&password=${password}`);
    const data = await res.json();
    console.log(data);
    window.location.href = "/";
};