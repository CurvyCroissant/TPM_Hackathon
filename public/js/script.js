function changeBg(){
  var navbar = document.getElementById('navbar');
  var scrollValue = window.scrollY;
  // console.log(scrollValue);
  if (scrollValue < 100){
    navbar.classList.remove('bgColor');
  }else {
    navbar.classList.add('bgColor');
  }
}

window.addEventListener('scroll', changeBg);

var bottom1 = document.getElementById("con-bottom1");
var bottom2 = document.getElementById("con-bottom2");
var bottom3 = document.getElementById("con-bottom3");
var bottom4 = document.getElementById("con-bottom4");
var bottom5 = document.getElementById("con-bottom5");


var bottom = document.getElementsByClassName("con-bottom");

function showHide1(){
  if (bottom1.style.display === "flex"){
    bottom1.style.display = "none";
  }
  else {
    bottom1.style.display = "flex";
  }
}
function showHide2(){
  if (bottom2.style.display === "flex"){
    bottom2.style.display = "none";
  }
  else {
    bottom2.style.display = "flex";
  }
}
function showHide3(){
  if (bottom3.style.display === "flex"){
    bottom3.style.display = "none";
  }
  else {
    bottom3.style.display = "flex";
  }
}
function showHide4(){
  if (bottom4.style.display === "flex"){
    bottom4.style.display = "none";
  }
  else {
    bottom4.style.display = "flex";
  }
}
function showHide5(){
  if (bottom5.style.display === "flex"){
    bottom5.style.display = "none";
  }
  else {
    bottom5.style.display = "flex";
  }
}

function validateName(){
  let inputName = document.querySelector("#name1");
  let valueName = inputName.value;
  let errorName = document.querySelector("#error-name");

  if(valueName == ""){
      errorName.innerHTML = "name cannot be empty!"
      inputName.style.border = "1px solid red";
      return false;
  }else{
      errorName.innerHTML = ""
      inputName.style.border = "1px solid black";
      return true;
  }
}

function isEmailValid(email) {
  let res = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  return res.test(email);
}

function validateEmail(){
  let inputEmail = document.querySelector("#email1");
  let valueEmail = inputEmail.value;
  let errorEmail = document.querySelector("#error-email");

  if(valueEmail == ""){
      errorEmail.innerHTML = "Email cannot be empty!"
      inputEmail.style.border = "1px solid red";
      return false;
  }else if(isEmailValid(valueEmail)){
      errorEmail.innerHTML = ""
      inputEmail.style.border = "1px solid black";
      return true;
  }else{
      errorEmail.innerHTML = "Email is not valid"
      inputEmail.style.border = "1px solid red";
      return false;
  }
}

function validateSubject(){
  let inputMessage = document.querySelector("#subject1");
  let valueMessage = inputMessage.value;
  let errorMessage = document.querySelector("#error-subject");

  if (valueMessage == ""){
      errorMessage.innerHTML = "Subject cannot be empty!"
      inputMessage.style.border = "1px solid red";
      return false;
  }else{
      errorMessage.innerHTML = ""
      inputMessage.style.border = "1px solid black";
      return true;
  }
}

function validateMessage(){
  let inputMessage = document.querySelector("#message1");
  let valueMessage = inputMessage.value;
  let errorMessage = document.querySelector("#error-message1");

  if (valueMessage == ""){
      errorMessage.innerHTML = "Message cannot be empty!"
      inputMessage.style.border = "1px solid red";
      return false;
  }else{
      errorMessage.innerHTML = ""
      inputMessage.style.border = "1px solid black";
      return true;
  }
}

let contactBtn = document.querySelector("#btn-send");
contactBtn.addEventListener("click", function(e){
    e.preventDefault();

    let isNameValid = validateName();
    let isEmailValid = validateEmail();
    let isMessageValid = validateMessage();
    let isSubjectValid = validateSubject();
    
    if (isEmailValid && isNameValid && isMessageValid && isSubjectValid){
        let contactForm = document.querySelector("#form-contact");
        contactForm.submit(); //SUBMIT FORM
        alert("Thank you!")
    }
});