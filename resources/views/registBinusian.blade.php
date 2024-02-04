<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration (Binusian)</title>
  <link rel="stylesheet" href="{{ asset('css/regisBinusian.css') }}">
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
      <img src="{{Storage::url('images/Logo.svg')}}" alt="">
      <h2>Leader<br>Registration</h2>
    </div>
    <div class="regis-bottom">

      <form action="{{ route('registration-binusian.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="inputform">
          <input type="text" id="fullName" name="fullName" placeholder = "Full Name" required oninput="validateFullName()" value="{{ old('fullName') }}">
          @error('fullName')
          <p id="error-name" class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="inputform">
          <input type="email" id="email" name="email" placeholder="Email" required oninput="validateEmail()" value="{{ old('email') }}">
          @error('email')
          <p id="error-name" class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="inputform">
          <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Whatsapp Number" required oninput="validatePhoneNumber()" value="{{ old('phoneNumber') }}">
          @error('phoneNumber')
          <p id="error-name" class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="inputform">
          <input type="text" id="lineId" name="lineId" placeholder="Line Id" required oninput="validateLineId()" value="{{ old('lineId') }}">
          @error('lineId')
          <p id="error-name" class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="inputform">
          <input type="text" id="githubId" name="githubId" placeholder="Github/Gitlab Id" required oninput="validateGithubId()" value="{{ old('githubId') }}">
          @error('githubId')
          <p id="error-name" class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="inputform">
          <input type="text" id="birthPlace" name="birthPlace" placeholder ="Birth Place" required oninput="validateBirthPlace()" value="{{ old('birthPlace') }}">
          @error('birthPlace')
          <p id="error-name" class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="inputform">
          <input type="text" id="birthDate" name="birthDate" placeholder="Birth Date" onfocus="this.type='date'" required oninput="validateBirthDate()" value="{{ old('birthDate') }}">
          @error('birthDate')
          <p id="error-name" class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div id="fileInputs">
          <div class="file-container">
            <input type="file" id="cv" name="cv" accept=".pdf, .jpg, .jpeg, .png" hidden oninput="validateCV()" value="{{ old('cv') }}">
            <span id="text-cv">Upload CV</span>
            <button type="button" class="file-btn" onclick="triggerFileInput()" id="btn-cv">Select File <img src="{{Storage::url('images/Upload.svg')}}" alt=""></button>
          </div>
          <h5>File format should be in PDF, JPG, JPEG or PNG</h5>
          <div class="file-container">
            <input type="file" id="flazzCard" name="flazzCard" accept=".png, .jpg, .jpeg, .pdf" hidden oninput="validateFlazzCard()" value="{{ old('flazzCard') }}">
            <span id="text-flazz">Upload Flazz Card</span>
            <button type="button" class="file-btn" onclick="triggerFileInput2()" id="btn-flazz">Select File <img src="{{Storage::url('images/Upload.svg')}}" alt=""></button>
          </div>
          <h5>File format should be in PDF, JPG, JPEG or PNG</h5>

        </div>
        <div class="btn-submit">

          {{-- #1 SUBMIT BUTTON --}}
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
  <script src="{{ asset('js/registscript.js') }}"></script>
</body>
</html>
