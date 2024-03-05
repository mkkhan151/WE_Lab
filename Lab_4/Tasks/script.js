// document.write("I am writing JS script in a separate file of JavaScript linked with HTML.")

function validateForm(event){
    const myForm = document.forms["myForm"];
    event.preventDefault(); // prevent refereshing after submitting form

    const errors = document.getElementsByClassName("error");

    if(myForm['userName'].value == ""){
        errors[0].innerHTML = "Please fill Name field";
        return false;
    }
    if(myForm['gender'].value == ""){
        errors[1].innerHTML = "Please  select your gender";
        return false;
    }
    if(myForm['email'].value == ""){
        errors[2].innerHTML = "Please fill E-mail field";
        return false;
    }
    if(myForm['address'].value == ""){
        errors[3].innerHTML = "Please fill Address field";
        return false;
    }
    if(myForm['login'].value == ""){
        errors[4].innerHTML = "Please fill Login ID field";
        return false;
    }
    if(myForm['password'].value == ""){
        errors[5].innerHTML = "Please fill Password field";
        return false;
    }
    if(myForm['agreed'].checked == false){
        errors[6].innerHTML = "Please agree to the policy";
        return false;
    }

}

function resetForm(){
    const errors = document.getElementsByClassName("error");
    for(let i = 0; i < errors.length; i++){
        errors[i].innerHTML = "";
    }
}