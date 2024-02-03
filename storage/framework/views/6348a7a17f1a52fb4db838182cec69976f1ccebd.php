<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration (Binusian)</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/regisBinusian.css')); ?>">
  <link rel="icon" type="image/png" href="image/meteor.png">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Afacad:wght@400;500;700&family=Jost:wght@300;400;500;600;700;800;900&family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Kumbh+Sans:wght@700&family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="content">
    <div class="regis-top">
      <img src="<?php echo e(Storage::url('images/Logo.svg')); ?>" alt="">
      <h2>Leader<br>Registration</h2>
    </div>
    <div class="regis-bottom">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="inputform">
          <!-- <label for="fullName">Full Name:</label> -->
          <input type="text" id="fullName" name="fullName_input" placeholder = "Full Name" required oninput="validateFullName()">
          <p id="error-name" class="error-message"></p>
        </div>
        <div class="inputform">
          <!-- <label for="email">Email:</label> -->
          <input type="email" id="email" name="email_input" placeholder="Email" required oninput="validateEmail()">
          <p id="error-email" class="error-message"></p>
        </div>
        <div class="inputform">
          <!-- <label for="phoneNumber">Phone Number:</label> -->
          <input type="tel" id="phoneNumber" name="phoneNumber_input" placeholder="Whatsapp Number" required oninput="validatePhoneNumber()">
          <p id="error-phone" class="error-message"></p>
        </div>
        <div class="inputform">
          <!-- <label for="lineId">LINE ID:</label> -->
          <input type="text" id="lineId" name="lineId_input" placeholder="Line Id" required oninput="validateLineId()">
          <p id="error-line" class="error-message"></p>
        </div>
        <div class="inputform">
          <!-- <label for="githubId">Github ID:</label> -->
          <input type="text" id="githubId" name="githubId_input" placeholder="Github/Gitlab Id" required oninput="validateGithubId()">
          <p id="error-github" class="error-message"></p>
        </div>
        <div class="inputform">
          <!-- <label for="birthPlace">Birth Place:</label> -->
          <input type="text" id="birthPlace" name="birthPlace_input" placeholder ="Birth Place" required oninput="validateBirthPlace()">
          <p id="error-place" class="error-message"></p>
        </div>
        <div class="inputform">
          <!-- <label for="birthDate">Birth Date:</label> -->
          <input type="text" id="birthDate" name="birthDate_input" placeholder="Birth Date" onfocus="this.type='date'" required oninput="validateBirthDate()">
          <p id="error-date" class="error-message"></p>
        </div>
        <div id="fileInputs">
          <!-- <label for="cv">Upload CV (PDF or Word):</label> -->
          <div class="file-container">
            <input type="file" id="cv" name="cv" accept=".pdf, .doc, .docx" hidden oninput="validateCV()">
            <span id="text-cv">Upload CV</span>
            <button type="button" class="file-btn" id="btn-cv">Select File <img src="<?php echo e(Storage::url('images/Upload.svg')); ?>" alt=""></button>
          </div>
          <!-- <p id="error-cv" class="error-message"></p> -->
          <h5>File format should be in PDF, JPG, JPEG or PNG</h5>
          <div class="file-container">
            <input type="file" id="flazzCard" name="flazzCard" accept=".png, .jpg, .jpeg" hidden oninput="validateFlazzCard()">
            <span id="text-flazz">Upload Flazz Card</span>
            <button type="button" class="file-btn" id="btn-flazz">Select File <img src="<?php echo e(Storage::url('images/Upload.svg')); ?>" alt=""></button>
          </div>
          <!-- <p id="error-flazz" class="error-message"></p> -->
          <h5>File format should be in PDF, JPG, JPEG or PNG</h5>

          <!-- <label for="flazzCard">Upload Flazz Card (PNG, JPG):</label> -->
        </div>
        <div class="btn-submit">

          
          <button type="submit">Submit</button>

        </div>
      </form>
    </div>
  </div>

  <script src="<?php echo e(asset('js/registscript.js')); ?>></script>
</body>
</html>
<?php /**PATH C:\Users\62813\Downloads\TPM_Hackathon\resources\views/registBinusian.blade.php ENDPATH**/ ?>