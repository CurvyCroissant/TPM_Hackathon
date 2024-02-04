<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/grDashboard.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
  <div id="navbar">
    <img src="{{Storage::url('images/Variant3.svg')}}" alt="">
    <div class="nav-btn">
      <a href="#content">Dashboard</a>
      <a href="#timeline">Timeline</a>

      {{-- #1 LOGOUT BUTTON --}}
      <a href="{{ route('home') }}"> <button class="home">Log Out</button></a>

    </div>
  </div>
  <div id="content">
    <div id="dashboard">
      <div class="dash-top">
        <h1>Team Information</h1>
      </div>
      <div class="dash-bottom">
        <div class="leader">
          <div class="head-leader">
            <h3>Team Leader</h3>
          </div>
          <div class="leader-grid">
            <div class="leadgrid" id="leadgrid1">
              <label for="">Team Leader Name</label>
              <div>data from database</div>
            </div>
            <div class="leadgrid">
              <label for="">E-Mail</label>
              <div>data from database</div>
            </div>
            <div class="leadgrid">
              <label for="">Whatsapp Number</label>
              <div>data from database</div>
            </div>
            <div class="leadgrid">
              <label for="">Line ID</label>
              <div>data from database</div>
            </div>
            <div class="leadgrid">
              <label for="">Github/Gitlab ID</label>
              <div>data from database</div>
            </div>
            <div class="leadgrid">
              <label for="">Birthplace</label>
              <div>data from database</div>
            </div>
            <div class="leadgrid">
              <label for="">Birthday</label>
              <div>data from database</div>
            </div>
          </div>
        </div>
        <div class="member">
          <div class="member-head">
            <h3>Team Members</h3>
          </div>

          <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

          <div class="member-grid">
            <div class="membgrid">
              <label for="">Team Member 1</label>
              <input type="text" id="member1" name="member1" value="{{ old('member1') }}">
            </div>
            <div class="membgrid">
              <label for="">Team Member 2</label>
              <input type="text" id="member2" name="member2" value="{{ old('member2') }}">
            </div>
            <div class="membgrid">
              <label for="">Team Member 3</label>
              <input type="text" id="member3" name="member3" value="{{ old('member3') }}">
            </div>
            <div class="membgrid">
              <label for="">Team Member 4</label>
              <input type="text" id="member4" name="member4" value="{{ old('member4') }}">
            </div>
          </div>
        </div>
        <div id="edit-con">
          <button type="submit">Edit Team Members</button>
          <h4>Type a strip “-” if there is no member</h4>
        </div>
      </form>

        <div class="file-container">
          <div class="file">
            <h3>View CV</h3>
            <button class="btn-file">
              <img src="{{Storage::url('images/material-symbols_download.svg')}}" alt="">
              <span>Download CV</span>
            </button>
          </div>
          <div class="file">
            <h3>View ID Card</h3>
            <button class="btn-file">
              <img src="{{Storage::url('images/material-symbols_download.svg')}}" alt="">
              <span>Download ID Card</span>
            </button>
          </div>
        </div>
        <div class="contact">
          <div class="contact-top">
            <h3>Contact Person</h3>
          </div>
          <div class="contact-bottom">
            <h4>Jang Jongkook</h4>
            <h5>08123456789</h5>
            <h5><span>LINE ID:</span> world.wide.handsome</h5>
            <h5><span>E-mail:</span> jang.jongkook@binus.ac.id</h5>
          </div>
        </div>
      </div>
    </div>

    <div id="timeline">
      <div class="time-top">
        <h3>Timeline</h3>
      </div>
      <div class="time-bottom">
        <div class="timeline">
          <img src="{{Storage::url('images/10.svg')}}" alt="">
          <div class="container left">
            <div class="content">
              <h2>1 January 2024</h2>
              <h1>Open Registration</h1>
            </div>
          </div>
          <div class="container right">
            <div class="content">
              <h2>3 January 2024</h2>
              <h1>Close Registration</h1>
            </div>
          </div>
          <div class="container left">
            <div class="content">
              <h2>5 January 2024</h2>
              <a href="">Technical Meeting</a>
              <h5>Click to link</h5>
            </div>
          </div>
          <div class="container right">
            <div class="content">
              <h2>7 January 2024</h2>
              <a href="">Competition Day</a>
              <!-- <h1>Competition Day</h1> -->
              <h5>Click to register</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-bottom2">
      <hr>
      <div class="bottom-top">
        <div class="bottom2">
          <h5>Organized by</h5>
          <img src="{{Storage::url('images/image 31.svg')}}" alt="">
        </div>
        <div class="bottom2">
          <h5>Follow Us</h5>
          <div class="btn-contact">
            <a href="https://www.instagram.com/technoscapebncc"><img src="{{Storage::url('images/Instgram.svg')}}" alt=""></a>
            <a href="https://twitter.com/bncc_binus"><img src="{{Storage::url('images/Twitter.svg')}}" alt=""></a>
            <a href="https://www.facebook.com/bina.nusantara.computer.club"><img src="{{Storage::url('images/Facebook.svg')}}" alt=""></a>
            <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/mycompany/"><img src="{{Storage::url('images/Linkedin.svg')}}" alt=""></a>
          </div>
          <div>All Rights Reserved BNCC 2024 © Bina Nusantara Computer Club</div>
        </div>
        <div class="bottom2">
          <h5>Powered By</h5>
          <img src="{{Storage::url('images/Frame 162680.svg')}}" alt="">
        </div>
      </div>
      <div id="privacy">Privacy Policy 61.8 and Terms of Service</div>
    </div>

  </div>
</body>
</html>
