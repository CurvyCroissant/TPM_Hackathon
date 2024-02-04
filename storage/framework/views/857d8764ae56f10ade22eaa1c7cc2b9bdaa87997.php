<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group Log In</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/groupLogin.css')); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="content">
    <div class="content1 left">
      <img src="<?php echo e(Storage::url('images/Logo.svg')); ?>" alt="">
      <h1>Get Yourself<br>Ready And Join<br>us</h1>
      <div id="login-info">
        <h4>Don't have an account?</h4>
        <a href="<?php echo e(route('registration')); ?>"><button class="Register">Register</button></a>

      </div>
    </div>
    <div class="content1 right">
      <h1>Group<br>Log In</h1>

      <form id="form-groupRegis" action="">
        <div class="input-form">
          <input type="text" placeholder="Group Name" id="groupName" oninput="validateName()">
          <p id="error-name" class="error-message"></p>
        </div>
        <div class="input-form">
          <input type="password" placeholder="Password" id="password" oninput="validatePassword()">
          <p id="error-pass" class="error-message"></p>
        </div>
      </form>

      
      <a href="<?php echo e(route('dashboard')); ?>"><button id="btn-submit">Log In</button></a>

    </div>
  </div>

  <script src="<?php echo e(asset('js/groupLogin.js')); ?> defer></script>
</body>
</html>
<?php /**PATH C:\Users\62813\Downloads\TPM_Hackathon\resources\views/groupLogin.blade.php ENDPATH**/ ?>