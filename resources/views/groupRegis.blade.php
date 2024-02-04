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
        <a href="{{ route('login') }}"> <button>Login</button></a>

      </div>
    </div>
    <div class="content1 right">
      <h1>Group<br>Registration</h1>

      <form action="{{ route('registration.store')}}" method = "POST" enctype="multipart/form-data" >
        @csrf

        <div class="input-form">
          <input type="text" name= "groupName" placeholder="Group Name" id="groupName" oninput="validateName()" value="{{ old('groupName') }}">
          @error('groupName')
          <p id="error-name" class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="input-form">
          <input type="password" name="password" placeholder="Password" id="password" oninput="validatePassword()" value="{{ old('password') }}">
          @error('password')
          <p id="error-pass" class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="input-form">
          <input type="password" placeholder="Confirm Password" name="conPassword" id="conPassword" oninput="validateConfirmPassword()" value="{{ old('conPassword') }}">
          @error('conPassword')
          <p id="error-conPass" class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="radio">
          <div class="radiobinus">
            <input type="radio" id="binusian" name="binusian" value="{{ old('binusian') }}">
            <label for="radio-binusian">Binusian</label>
          </div>
          <div class="radiobinus">
            <input type="radio" id="nonBinusian" name="nonBinusian" value="{{ old('nonBinusian') }}">
            <label for="radio-non">Non-Binusian</label>
          </div>
        </div>
        <div>
            @if ($errors->any())
                {{$errors->first()}}
            @endif
        </div>
      {{-- #1 LOGIN BUTTON --}}
      <button type="submit" id="btn-submit">Submit</button>
    </form>

    </div>
  </div>

  <script src="{{ asset('js/groupRegis.js') }} defer></script>
</body>
</html>
