const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signUp');


signUpButton.addEventListener('click', function (){
    signInForm.style.display="none";
    signUpForm.style.display="block";
    forgotPasswordForm.style.display="none";
})
signInButton.addEventListener('click', function (){
    signInForm.style.display="block";
    signUpForm.style.display="none";
    forgotPasswordForm.style.display="none";
})
