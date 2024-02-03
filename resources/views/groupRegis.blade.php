<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group Registration</title>
  <link rel="stylesheet" href="{{ asset('css/groupRegis.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="content">
    <div class="content1 left">
      <img src="{{Storage::url('images/Logo.svg')}}" alt="">
      <h1>Get Yourself<br>Ready And Join<br>us</h1>
      <div id="login-info">
        <h4>Already have an account?</h4>
        <button>Login</button>
      </div>
    </div>
    <div class="content1 right">
      <h1>Group<br>Registration</h1>

      <form method = "POST" action="/post-create-group">
        @csrf
        <div class="input-form">
          <input type="text" name= "group_name_input" placeholder="Group Name" id="groupName" oninput="validateName()">
          <p id="error-name" class="error-message"></p>
        </div>
        <div class="input-form">
          <input type="password" name="password_input" placeholder="Password" id="password" oninput="validatePassword()">
          <p id="error-pass" class="error-message"></p>
        </div>
        <div class="input-form">
          <input type="password" placeholder="Confirm Password" id="conPassword" oninput="validateConfirmPassword()">
          <p id="error-conPass" class="error-message"></p>
        </div>
        <div class="radio">
          <div class="radiobinus">
            <input type="radio" id="radio-binusian" name="radiobinus">
            <label for="radio-binusian">Binusian</label>
          </div>
          <div class="radiobinus">
            <input type="radio" id="radio-non" name="radiobinus">
            <label for="radio-non">Non-Binusian</label>
          </div>
        </div>
      </form>

      {{-- #1 LOGIN BUTTON --}}
      <button id="btn-submit">Submit</button>

    </div>
  </div>

  <script src="{{ asset('js/groupRegis.js') }} defer></script>
</body>
</html>
