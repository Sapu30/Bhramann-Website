

//listen for auth status changes
auth.onAuthStateChanged(user =>{

    if (user){
        //dget data
        db.collection('Guides').onSnapshot(snapshot =>{
        setupGuides(snapshot.docs);
        setupUI(user);
        },err => 
    console.log(err.message));

    }else{
        setupUI();
        setupGuides([]);
    }
});

//create new guide
const createForm = document.querySelector('#create-form');
createForm.addEventListener('submit', (e)=>{
    e.preventDefault();


    db.collection('Guides').add({
        title:createForm['title'].value,
        content: createForm['content'].value
    }).then(()=> {
        //close the modal and reset form
        const modal = document.querySelector('#modal-create');
        M.Modal.getInstance(modal).close();
        createForm.reset();
    }).catch(err =>{
        window.alert(err.message)
    })
})

// sign up
const signupForm = document.querySelector('#signup-form');
signupForm.addEventListener('submit', (e) =>{
    e.preventDefault();

    const email  =signupForm['signup-email'].value;
    const password = signupForm['signup-password'].value;
    
    //sign up user
    auth.createUserWithEmailAndPassword(email,password).then(cred=>{
       
        //window.alert(' Signup successful')
        const modal = document.querySelector('#modal-signup');
        M.Modal.getInstance(modal).close();
        signupForm.reset();
    });
});

//loggout
const logout= document.querySelector('#logout');
logout.addEventListener('click', (e)=>{
    e.preventDefault();
    auth.signOut();
    
}) ;


//login
const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', (e)=>{
    e.preventDefault();

    //get user info
    const email = loginForm['login-email'].value;
    const password = loginForm['login-password'].value;

    auth.signInWithEmailAndPassword(email,password).then(cred => {
    
        
        //close the login modal and reset
        const modal = document.querySelector('#modal-login');
        M.Modal.getInstance(modal).close();
        loginForm.reset();
    }).catch(err =>{
        window.alert(err.message)
    })
})



