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

      <form action="<?php echo e(route('registration-binusian.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="inputform">
          <input type="text" id="fullName" name="fullName" placeholder = "Full Name" required oninput="validateFullName()" value="<?php echo e(old('fullName')); ?>">
          <?php $__errorArgs = ['fullName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p id="error-name" class="error-message"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="inputform">
          <input type="email" id="email" name="email" placeholder="Email" required oninput="validateEmail()" value="<?php echo e(old('email')); ?>">
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p id="error-name" class="error-message"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="inputform">
          <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Whatsapp Number" required oninput="validatePhoneNumber()" value="<?php echo e(old('phoneNumber')); ?>">
          <?php $__errorArgs = ['phoneNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p id="error-name" class="error-message"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="inputform">
          <input type="text" id="lineId" name="lineId" placeholder="Line Id" required oninput="validateLineId()" value="<?php echo e(old('lineId')); ?>">
          <?php $__errorArgs = ['lineId'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p id="error-name" class="error-message"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="inputform">
          <input type="text" id="githubId" name="githubId" placeholder="Github/Gitlab Id" required oninput="validateGithubId()" value="<?php echo e(old('githubId')); ?>">
          <?php $__errorArgs = ['githubId'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p id="error-name" class="error-message"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="inputform">
          <input type="text" id="birthPlace" name="birthPlace" placeholder ="Birth Place" required oninput="validateBirthPlace()" value="<?php echo e(old('birthPlace')); ?>">
          <?php $__errorArgs = ['birthPlace'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p id="error-name" class="error-message"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="inputform">
          <input type="text" id="birthDate" name="birthDate" placeholder="Birth Date" onfocus="this.type='date'" required oninput="validateBirthDate()" value="<?php echo e(old('birthDate')); ?>">
          <?php $__errorArgs = ['birthDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p id="error-name" class="error-message"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div id="fileInputs">
          <div class="file-container">
            <input type="file" id="cv" name="cv" accept=".pdf, .jpg, .jpeg, .png" hidden oninput="validateCV()" value="<?php echo e(old('cv')); ?>">
            <span id="text-cv">Upload CV</span>
            <button type="button" class="file-btn" onclick="triggerFileInput()" id="btn-cv">Select File <img src="<?php echo e(Storage::url('images/Upload.svg')); ?>" alt=""></button>
          </div>
          <h5>File format should be in PDF, JPG, JPEG or PNG</h5>
          <div class="file-container">
            <input type="file" id="flazzCard" name="flazzCard" accept=".png, .jpg, .jpeg, .pdf" hidden oninput="validateFlazzCard()" value="<?php echo e(old('flazzCard')); ?>">
            <span id="text-flazz">Upload Flazz Card</span>
            <button type="button" class="file-btn" onclick="triggerFileInput2()" id="btn-flazz">Select File <img src="<?php echo e(Storage::url('images/Upload.svg')); ?>" alt=""></button>
          </div>
          <h5>File format should be in PDF, JPG, JPEG or PNG</h5>

        </div>
        <div class="btn-submit">

          
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    function triggerFileInput(){
        document.getElementById('cv').click();
    }
    function triggerFileInput2(){
        document.getElementById('flazzCard').click();
    }
    </script>
  <script src="<?php echo e(asset('js/registscript.js')); ?>></script>
</body>
</html>
<?php /**PATH C:\Users\62813\Downloads\TPM_Hackathon\resources\views/registBinusian.blade.php ENDPATH**/ ?>