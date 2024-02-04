const realFileBtnCv =  document.getElementById("cv");
const customBtnCv = document.getElementById("btn-cv");
const customTextCv = document.getElementById("text-cv");

const realFileBtnFlazz =  document.getElementById("flazzCard");
const customBtnFlazz = document.getElementById("btn-flazz");
const customTextFlazz = document.getElementById("text-flazz");

customBtnCv.addEventListener("click", function(){
  realFileBtnCv.click();
});

customBtnFlazz.addEventListener("click", function(){
  realFileBtnFlazz.click();
});

realFileBtnCv.addEventListener("change", function(){
  if(realFileBtnCv.value){
    customTextCv.innerHTML = realFileBtnCv.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
  }else{
    customTextCv.innerHTML = "Upload CV"
  }
});

realFileBtnFlazz.addEventListener("change", function(){
  if(realFileBtnFlazz.value){
    customTextFlazz.innerHTML = realFileBtnFlazz.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
  }else{
    customTextFlazz.innerHTML = "Upload Flazz Card"
  }
});


  // document.getElementById("cv").addEventListener('change', function () {
  //   document.getElementById("cvFileName").innerText = this.files[0] ? this.files[0].name : 'No file chosen';
  // });
  
  // document.getElementById('flazzCard').addEventListener('change', function () {
  //   document.getElementById('flazzCardFileName').innerText = this.files[0] ? this.files[0].name : 'No file chosen';
  // });
  
  
  function validateFullName() {
    var fullName = document.getElementById("fullName").value;
    var errorMessagesContainer = document.getElementById("error-name");
    if (fullName === "") {
      errorMessagesContainer.innerHTML = "Full Name is required.";
    } else {
      errorMessagesContainer.innerHTML = "";
    }
  }

  function validateEmail() {
    var email = document.getElementById("email").value;
    var errorMessagesContainer = document.getElementById("error-email");
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      errorMessagesContainer.innerHTML = "Invalid email address.";
    } else {
      errorMessagesContainer.innerHTML = "";
    }
  }

  function validatePhoneNumber() {
    var phoneNumber = document.getElementById("phoneNumber").value;
    var errorMessagesContainer = document.getElementById('error-phone');
    var phoneNumberRegex = /^\d{10}$/;
    if (!phoneNumberRegex.test(phoneNumber)) {
      errorMessagesContainer.innerHTML = "Invalid phone number.";
    } else {
      errorMessagesContainer.innerHTML = "";
    }
  }

  function validateLineId() {
    var lineId = document.getElementById("lineId").value;
    var errorMessagesContainer = document.getElementById("error-line");
    // Add LINE ID validation logic here
    // For example, you can check for a minimum length
    if (lineId.length < 5) {
      errorMessagesContainer.innerHTML = "LINE ID should be at least 5 characters.";
    } else {
      errorMessagesContainer.innerHTML = "";
    }
  }

  function validateGithubId() {
    var githubId = document.getElementById("githubId").value;
    var errorMessagesContainer = document.getElementById('error-github');
    if (githubId.length < 5) {
      errorMessagesContainer.innerHTML = "Github ID should be at least 5 characters.";
    } else {
      errorMessagesContainer.innerHTML = "";
    }
  }

  function validateBirthPlace() {
    var birthPlace = document.getElementById("birthPlace").value;
    var errorMessagesContainer = document.getElementById("error-place");
    if (birthPlace === "") {
      errorMessagesContainer.innerHTML = "Birth Place is required.";
    } else {
      errorMessagesContainer.innerHTML = "";
    }
  }

  function validateBirthDate() {
    var birthDate = document.getElementById("birthDate").value;
    var errorMessagesContainer = document.getElementById("error-date");
    if (birthDate === "") {
      errorMessagesContainer.innerHTML = "Birth Date is required.";
    } else {
      errorMessagesContainer.innerHTML = "";
    }
  }

  function validateCV() {
    var cv = document.getElementById("cv").value;
    var errorMessagesContainer = document.getElementById("error-cv");
    var validExtensions = ['.pdf', '.doc', '.docx'];
    var extension = cv.slice((cv.lastIndexOf(".") - 1 >>> 0) + 2);
    if (!validExtensions.includes('.' + extension.toLowerCase())) {
      errorMessagesContainer.innerHTML = "Please upload a valid CV file (PDF or Word).";
    } else {
      errorMessagesContainer.innerHTML = "";
    }
  }

  function validateFlazzCard() {
    var flazzCard = document.getElementById("flazzCard").value;
    var errorMessagesContainer = document.getElementById("error-flazz");
    var validExtensions = ['.png', '.jpg', '.jpeg'];
    var extension = flazzCard.slice((flazzCard.lastIndexOf(".") - 1 >>> 0) + 2);
    if (!validExtensions.includes('.' + extension.toLowerCase())) {
      errorMessagesContainer.innerHTML = "Please upload a valid Flazz Card file (PNG, JPG).";
    } else {
      errorMessagesContainer.innerHTML = "";
    }
  }

  function validateAndSubmitForm() {
    validateFullName();
    validateEmail();
    validatePhoneNumber();
    validateLineId();
    validateGithubId();
    validateBirthPlace();
    validateBirthDate();
    validateCV();
    validateFlazzCard();

    // Check if there are any error messages
    var errorMessagesContainer = document.getElementById('errorMessages');
    if (errorMessagesContainer.innerHTML === "") {
      // If no errors, submit the form
      document.getElementById('registrationForm').submit();
    }
  }
