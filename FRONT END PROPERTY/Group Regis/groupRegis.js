function validateName(){
  let inputName = document.querySelector("#groupName");
  let valueName = inputName.value;
  let errorName = document.querySelector("#error-name");

  if(valueName == ""){
      errorName.innerHTML = "Group Name cannot be empty!"
      inputName.style.border = "1px solid red";
      return false;
  }else{
      errorName.innerHTML = ""
      inputName.style.border = "1px solid black";
      return true;
  }
}

function validatePassword(){
  let inputPassword = document.querySelector("#password");
  let valuePassword = inputPassword.value;
  let errorPassword = document.querySelector("#error-pass");

  if(valuePassword == ""){
      errorPassword.innerHTML = "Password cannot be empty!"
      inputPassword.style.border = "1px solid red";
      return false;
  }else if(valuePassword.length < 8){
      errorPassword.innerHTML = "Password must be at least 8 character!"
      inputPassword.style.border = "1px solid red";
      return false;
  }else if(valuePassword.search(/[a-z]/) < 0){
    errorPassword.innerHTML = "Password must contain at least one lowercase letter!"
    inputPassword.style.border = "1px solid red";
    return false;
  }else if (valuePassword.search(/[A-Z]/) < 0){
    errorPassword.innerHTML = "Password must contain at least one uppercase letter!"
    inputPassword.style.border = "1px solid red";
  }else if(valuePassword.search(/[0-9]/) < 0){
    errorPassword.innerHTML = "Password must contain at least one number!"
    inputPassword.style.border = "1px solid red";
  }else if(valuePassword.search(/[\!\@\#\$\%\^\&\*\(\)\_\+\.\,\;\:\-]/) < 0){
    errorPassword.innerHTML = "Password must contain at least one special character!"
    inputPassword.style.border = "1px solid red";
  }else{
      errorPassword.innerHTML = ""
      inputPassword.style.border = "1px solid black";
      return true;
  }
}

function validateConfirmPassword(){
  let inputConfirmPassword = document.querySelector("#conPassword");
  let valueConfirmPassword = inputConfirmPassword.value;
  let errorConfirmPassword = document.querySelector("#error-conPass");
  let inputPassword = document.querySelector("#password");
  let valuePassword = inputPassword.value;

  if(valueConfirmPassword == ""){
      errorConfirmPassword.innerHTML = "Confirm password cannot be empty!"
      inputConfirmPassword.style.border = "1px solid red";
      return false;
  }else if(valueConfirmPassword != valuePassword){
      errorConfirmPassword.innerHTML = "The password confirmation does not match!"
      inputConfirmPassword.style.border = "1px solid red";
      return false;
  }else{
      errorConfirmPassword.innerHTML = ""
      inputConfirmPassword.style.border = "1px solid black";
      return true;
  }
}

let registerBtn = document.querySelector("#btn-submit");
registerBtn.addEventListener("click", function(e){
    e.preventDefault();

    let isNameValid = validateName();
    let isPasswordValid = validatePassword();
    let isConfirmPasswordValid = validateConfirmPassword();
    
    if (isConfirmPasswordValid && isNameValid && isPasswordValid){
        let registerForm = document.querySelector("#form-groupRegis");
        registerForm.submit(); //SUBMIT FORM
        alert("You succesfully registered!")
    }
});