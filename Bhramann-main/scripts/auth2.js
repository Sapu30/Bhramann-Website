// sign up
const signupForm = document.querySelector('#signup-form');
signupForm.addEventListener('submit', (e) =>{
    e.preventDefault();

    const email  =signupForm['signup-email'].value;
    const password = signupForm['signup-password'].value;
    
    //sign up user
    auth.createUserWithEmailAndPassword(email,password).then(cred=>{
       
        window.alert(' Signup successful')
        console.log('signup')

        
        signupForm.reset();
    })
});




