const form = document.getElementById("form");
const nombre = document.getElementById("name");
const correo = document.getElementById("email");
const contra = document.getElementById("password");
const warName = document.getElementById("error-name");
const warEmail = document.getElementById("error-email");
const warPass = document.getElementById("error-pass");



form.addEventListener("submit",e=>{
    warName.style.display="none";
    warPass.style.display="none";
    warEmail.style.display="none";
    let verificar = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    e.preventDefault();
    if(nombre.value.length<5){
        warName.style.display="block";
    }
    if(!verificar.test(correo.value)){
        warEmail.style.display="block";
    }
    if(password.value.length<5){
        warPass.style.display="block";
    }
    
});