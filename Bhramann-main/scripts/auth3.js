
//login code
const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', (e)=>{
    e.preventDefault();

    //get user info
    const email = loginForm['login-email'].value;
    const password = loginForm['login-password'].value;

    auth.signInWithEmailAndPassword(email,password).then(cred => {
    
        window.alert('user log in: ');
        //close the login modal and reset
        const modal = document.querySelector('#modal-login');
        
        loginForm.reset();
    })
})



