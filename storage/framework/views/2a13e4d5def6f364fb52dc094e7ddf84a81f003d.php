<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group Registration</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/groupRegis.css')); ?>">
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
        <h4>Already have an account?</h4>
        <a href="<?php echo e(route('login')); ?>"> <button>Login</button></a>

      </div>
    </div>
    <div class="content1 right">
      <h1>Group<br>Registration</h1>

      <form action="<?php echo e(route('registration.store')); ?>" method = "POST" enctype="multipart/form-data" >
        <?php echo csrf_field(); ?>

        <div class="input-form">
          <input type="text" name= "groupName" placeholder="Group Name" id="groupName" oninput="validateName()" value="<?php echo e(old('groupName')); ?>">
          <?php $__errorArgs = ['groupName'];
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
        <div class="input-form">
          <input type="password" name="password" placeholder="Password" id="password" oninput="validatePassword()" value="<?php echo e(old('password')); ?>">
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p id="error-pass" class="error-message"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="input-form">
          <input type="password" placeholder="Confirm Password" name="conPassword" id="conPassword" oninput="validateConfirmPassword()" value="<?php echo e(old('conPassword')); ?>">
          <?php $__errorArgs = ['conPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p id="error-conPass" class="error-message"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="radio">
          <div class="radiobinus">
            <input type="radio" id="binusian" name="binusian" value="<?php echo e(old('binusian')); ?>">
            <label for="radio-binusian">Binusian</label>
          </div>
          <div class="radiobinus">
            <input type="radio" id="nonBinusian" name="nonBinusian" value="<?php echo e(old('nonBinusian')); ?>">
            <label for="radio-non">Non-Binusian</label>
          </div>
        </div>
      
      <button type="submit" id="btn-submit">Submit</button>
    </form>

    </div>
  </div>

  <script src="<?php echo e(asset('js/groupRegis.js')); ?> defer></script>
</body>
</html>
<?php /**PATH C:\Users\62813\Downloads\TPM_Hackathon\resources\views/groupRegis.blade.php ENDPATH**/ ?>