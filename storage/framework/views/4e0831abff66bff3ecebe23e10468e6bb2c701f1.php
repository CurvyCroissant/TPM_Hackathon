<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HACKATHON</title>
  <link rel="icon" type="image/png" href="image/meteor.png">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Afacad:wght@400;500;700&family=Jost:wght@300;400;500;600;700;800;900&family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Kumbh+Sans:wght@700&family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
  <img id="background" src="<?php echo e(Storage::url('images/BACKGROUND (1).svg')); ?>" alt="">

  <div class="container-navbar" id="navbar">
    <div id="left-section-nav">
      <img id="logo-nav" src="<?php echo e(Storage::url('images/meteor.png')); ?>" alt="">
      <h1 id="hack-nav">HACK<br>ATHON</h1>
    </div>
    <div id="right-section-nav">
      <a class="anchor-nav bold" href="#background">Home</a>
      <a class="anchor-nav regular" href="#about">About</a>
      <a class="anchor-nav regular" href="#champion">Champion Prizes</a>
      <a class="anchor-nav regular" href="#mentorJuries">Mentor & Jury</a>
      <a class="anchor-nav regular" href="#FAQ">FAQ</a>
      <a class="anchor-nav regular" href="#timeline">Timeline</a>

      
      <a href="<?php echo e(route('login')); ?>"><button id="login-button">Login</button></a>

    </div>
  </div>

  <div id="content">
    <img id="cloud-1" src="<?php echo e(Storage::url('images/Image.png')); ?>" alt="">
    <img id="cloud-2" src="<?php echo e(Storage::url('images/Image.png')); ?>" alt="">
    <img id="cloud-3" src="<?php echo e(Storage::url('images/Image.png')); ?>" alt="">
    <div id="header">
      <div class="left-section-header">
        <img id="logo-content" src="<?php echo e(Storage::url('images/Logo.svg')); ?>" alt="">
        <div class="heading">
          <p class="heading-1">Transform Your Ideas Into Reality</p>
          <br>
          <p class="heading-2">Hackathon 2024 Is Finally Here!</p>
        </div>
        <div class="learn-div">
          <button id="Learn-button">Learn More</button>
        </div>
      </div>
      <div class="right-section-header">
        <img id="astronaut-content" src="<?php echo e(Storage::url('images/7450345.svg')); ?>" alt="">
      </div>
    </div>

    <div id="about">
      <img id="border-about" src="<?php echo e(Storage::url('images/Vector 1.png')); ?>" alt="">
      <div class="left-section-about">
        <div class="info">
          <p class="title">Welcome To</p>
          <img id="logo-info" src="<?php echo e(Storage::url('images/Logo.svg')); ?>" alt="">
        </div>
        <h3 class="subhead">Transforming Ideas Into Reality</h3>
        <div class="par">
          <p class="desc"><span class="bold1">HACKATHON</span> is an exhilirating annual event hosted by <span class="bold1">BNCC</span> that brings together creative minds,
            tech enthusiasts, and problem solvers from various backgrounds to participate in a marathon of hacking,
            where <span class="bold1">innovation meets collaboration</span> to <span class="bold1">transform ideas into reality</span>.
          </p>
          <p class="mission">Our Mission is to foster an environment of collaboration, learning and innovation</p>
        </div>
        <div class="button-about-con">

          
          <a href="<?php echo e(route('registration')); ?>"><button class="Register">Register</button></a>

          <button id="Download">Download Guidebook</button>
        </div>
      </div>
      <div class="right-section-header">
        <img id="Astro" src="<?php echo e(Storage::url('images/4.svg')); ?>" alt="">
      </div>
    </div>

    <div class="join">
      <img id="cloud-4" src="<?php echo e(Storage::url('images/Image.png')); ?>" alt="">
      <img id="cloud-5" src="<?php echo e(Storage::url('images/Image.png')); ?>" alt="">
      <img id="cloud-6" src="<?php echo e(Storage::url('images/Image.png')); ?>" alt="">
      <img class="pseudo" id="pseudo-1" src="<?php echo e(Storage::url('images/pseudo.svg')); ?>" alt="">
      <div class="join-top bold1">
        <h1>Why <span>You</span> Should <br> Join <span>Us</span>?</h1>
      </div>
      <div class="join-bottom">
        <img id="astro-3" src="<?php echo e(Storage::url('images/8.png')); ?>" alt="">
          <div class="benefit skill">
            <img src="<?php echo e(Storage::url('images/Hand with key and question.png')); ?>" alt="">
            <p>Skill<br>Enhancement</p>
          </div>
          <div class="benefit learning">
          <img src="<?php echo e(Storage::url('images/stack of books and mug next to laptop screen showing planets.png')); ?>" alt="">
            <p>Learning<br>Opportunities</p>
          </div>
          <div class="benefit network">
            <img src="<?php echo e(Storage::url('images/Company of young people.png')); ?>" alt="">
            <p>Networking</p>
          </div>
          <div class="benefit recognition">
            <img src="<?php echo e(Storage::url('images/Gold trophy.png')); ?>" alt="">
            <p>Recognition &<br>Reward</p>
          </div>
          <div class="benefit resume">
            <img src="<?php echo e(Storage::url('images/service-icon-3.png.png')); ?>" alt="">
            <p>Resume & CV<br>Building</p>
          </div>
      </div>
    </div>

    <div id="recap">
      <div class="recap-header">
        <h1>TechnoScape Recap</h1>
      </div>
      <div class="video-recap">
        <video src=""></video>
      </div>
      <img id="border-join" src="<?php echo e(Storage::url('images/Vector.png')); ?>" alt="">
    </div>

    <div id="champion">
      <img class="pseudo" id="pseudo-2" src="<?php echo e(Storage::url('images/pseudo.svg')); ?>" alt="">
      <div class="champ-top">
        <h1>Champion Prizes</h1>
      </div>
      <div class="champ-bottom">
        <img id="champ-img" src="<?php echo e(Storage::url('images/image 4.png')); ?>" alt="">
        <img id="astro-4" src="<?php echo e(Storage::url('images/7450346.png')); ?>" alt="">
        <div class="champ-container first">
          <div class="num num-1">
            <h2>1</h2>
            <h3>st</h3>
          </div>
          <div class="champion-prize">
            <img class="medal-img" src="<?php echo e(Storage::url('images/Medal First Place.png')); ?>" alt="">
            <h4 class="prizes">Rp1.500.000,00</h4>
            <div class="merchandise">
              <img src="<?php echo e(Storage::url('images/Ellipse 3.png')); ?>" alt="">
              <h5 class="subhead-prize">Hackathon's Merchandise</h5>
            </div>
            <div class="merchandise">
              <img src="<?php echo e(Storage::url('images/Ellipse 3.png')); ?>" alt="">
              <h5 class="subhead-prize">Certificate</h5>
            </div>
          </div>
        </div>
        <div class="champ-container second">
          <div class="num num-2">
            <h2>2</h2>
            <h3>nd</h3>
          </div>
          <div class="champion-prize">
            <img class="medal-img" src="<?php echo e(Storage::url('images/Medal Second Place.png')); ?>" alt="">
            <h4 class="prizes">Rp1.000.000,00</h4>
            <div class="merchandise">
              <img src="<?php echo e(Storage::url('images/Ellipse 3.png')); ?>" alt="">
              <h5 class="subhead-prize">Hackathon's Merchandise</h5>
            </div>
            <div class="merchandise">
              <img src="<?php echo e(Storage::url('images/Ellipse 3.png')); ?>" alt="">
              <h5 class="subhead-prize">Certificate</h5>
            </div>
          </div>
        </div>
        <div class="champ-container third">
          <div class="num num-3">
            <h2>3</h2>
            <h3>rd</h3>
          </div>
          <div class="champion-prize">
            <img class="medal-img" src="<?php echo e(Storage::url('images/Medal Third Place.png')); ?>" alt="">
            <h4 class="prizes">Rp500.000,00</h4>
            <div class="merchandise">
              <img src="<?php echo e(Storage::url('images/Ellipse 3.png')); ?>" alt="">
              <h5 class="subhead-prize">Hackathon's Merchandise</h5>
            </div>
            <div class="merchandise">
              <img src="<?php echo e(Storage::url('images/Ellipse 3.png')); ?>" alt="">
              <h5 class="subhead-prize">Certificate</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="mentorJuries">
      <img class="pseudo" id="pseudo-2" src="<?php echo e(Storage::url('images/pseudo.svg')); ?>" alt="">
      <img id="border-mentor" src="<?php echo e(Storage::url('images/Vector3.png')); ?>" alt="">
      <div class="mentorJuries-head">
        <h1 class="MenTitle">Mentor & Jury</h1>
      </div>
      <div class="juries">
        <h3 class="juries-title">Juries</h3>
        <div class="judge-container">
          <div class="judge">
            <img src="<?php echo e(Storage::url('images/Jury 2.png')); ?>">
            <h5>Jury</h5>
            <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
          </div>
          <div class="judge">
            <img src="<?php echo e(Storage::url('images/Jury 1.png')); ?>">
            <h5>Jury</h5>
            <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
          </div>
          <div class="judge">
            <img src="<?php echo e(Storage::url('images/Jury 3.png')); ?>">
            <h5>Jury</h5>
            <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
          </div>
        </div>
      </div>
      <div class="mentor">
        <div class="mentor-title">
          <h3>Mentor</h3>
        </div>
        <div class="slider">
          <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">

            <div class="slide satu">
              <div class="judge-container">
                <div class="mentor">
                  <img src="<?php echo e(Storage::url('images/Mentor 1.svg')); ?>">
                  <h5>Mentor</h5>
                  <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
                </div>
                <div class="mentor">
                  <img src="<?php echo e(Storage::url('images/Mentor 3.svg')); ?>">
                  <h5>Mentor</h5>
                  <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
                </div>
                <div class="mentor">
                  <img src="<?php echo e(Storage::url('images/Mentor 4.svg')); ?>">
                  <h5>Mentor</h5>
                  <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
                </div>
              </div>
            </div>
            <div class="slide dua">
              <div class="judge-container">
                <div class="mentor">
                  <img src="<?php echo e(Storage::url('images/Mentor 5.svg')); ?>">
                  <h5>Mentor</h5>
                  <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
                </div>
                <div class="mentor">
                  <img src="<?php echo e(Storage::url('images/Mentor 8.svg')); ?>">
                  <h5>Mentor</h5>
                  <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
                </div>
                <div class="mentor">
                  <img src="<?php echo e(Storage::url('images/Mentor 9.svg')); ?>">
                  <h5>Mentor</h5>
                  <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
                </div>
              </div>
            </div>
            <div class="slide tiga">
              <div class="judge-container">
                <div class="mentor">
                  <img src="<?php echo e(Storage::url('images/Mentor 2.svg')); ?>">
                  <h5>Mentor</h5>
                  <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
                </div>
                <div class="mentor">
                  <img src="<?php echo e(Storage::url('images/Mentor 6.svg')); ?>">
                  <h5>Mentor</h5>
                  <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
                </div>
                <div class="mentor">
                  <img src="<?php echo e(Storage::url('images/Mentor 7.svg')); ?>">
                  <h5>Mentor</h5>
                  <p><span class="bold1">Kin Jennie</span><br> Software Engineer @ Odd Atelier</p>
                </div>
              </div>
            </div>
          </div>
          <div class="navigation-manual-div">
            <div class="navigation-manual">
              <label for="radio1" class="manual-btn" id="nav-btn1"></label>
              <label for="radio2" class="manual-btn" id="nav-btn2"></label>
              <label for="radio3" class="manual-btn" id="nav-btn3"></label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="FAQ">
      <img class="pseudo" id="pseudo-2" src="<?php echo e(Storage::url('images/pseudo.svg')); ?>" alt="">
      <div class="faq-top">
        <h1>FAQ</h1>
        <h3>Frequently Asked Question</h3>
      </div>
      <div class="faq-bottom">
        <div class="bottom-left-faq">
          <img src="<?php echo e(Storage::url('images/6.png')); ?>" alt="">
        </div>
        <div class="bottom-right-faq">
          <div class="question-con">
            <div class="con-top">
              <h3>Who is eligible to participate in this hackathon?</h3>
              <button onclick="showHide1()">
                <img src="<?php echo e(Storage::url('images/Dropdown Arrow.png')); ?>" alt="">
              </button>
            </div>
            <div class="con-bottom" id="con-bottom1">
              <hr>
              <h3>This event is open to all university students. Whether you're an undergrad, postgrad, or PhD candidate, as long as you're currently enrolled in a university, you're welcome to participate.</h3>
            </div>
          </div>
          <div class="question-con">
            <div class="con-top">
              <h3>Do I need a team to register, and how many members can a team have?</h3>
              <button onclick="showHide2()">
                <img src="<?php echo e(Storage::url('images/Dropdown Arrow.png')); ?>" alt="">
              </button>
            </div>
            <div class="con-bottom" id="con-bottom2">
              <hr>
              <h3>Yes, participants need to form a team before registering. Each team should consist of 3-5 members. We encourage forming teams with diverse skills and backgrounds to enrich the collaboration experience.</h3>
            </div>
          </div>
          <div class="question-con">
            <div class="con-top">
              <h3>How do we register our team for the event?</h3>
              <button onclick="showHide3()">
                <img src="<?php echo e(Storage::url('images/Dropdown Arrow.png')); ?>" alt="">
              </button>
            </div>
            <div class="con-bottom" id="con-bottom3">
              <hr>
              <h3>The team leader should register on behalf of the team using our online registration portal. You'll need to provide the required information of all team members. Ensure that all team members meet the eligibility criteria.</h3>
            </div>
          </div>
          <div class="question-con">
            <div class="con-top">
              <h3>What technical requirements are there for participation?</h3>
              <button onclick="showHide4()">
                <img src="<?php echo e(Storage::url('images/Dropdown Arrow.png')); ?>" alt="">
              </button>
            </div>
            <div class="con-bottom" id="con-bottom4">
              <hr>
              <h3>Since this is a fully online event, a stable internet connection is crucial. Each team member needs a computer capable of handling relevant software for development, designing, or coding.</h3>
            </div>
          </div>
          <div class="question-con">
            <div class="con-top">
              <h3>Who is eligible to participate in this hackathon?</h3>
              <button onclick="showHide5()">
                <img src="<?php echo e(Storage::url('images/Dropdown Arrow.png')); ?>" alt="">
              </button>
            </div>
            <div class="con-bottom" id="con-bottom5">
              <hr>
              <h3>We will provide access to online workshops, mentorship from industry professionals, and tech support throughout the event. These resources are designed to guide and enrich your project development experience.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="timeline">
      <img class="pseudo" id="pseudo-2" src="<?php echo e(Storage::url('images/pseudo.svg')); ?>" alt="">
      <div class="time-top">
        <h3>Timeline</h3>
      </div>
      <div class="time-bottom">
        <div class="timeline">
          <img src="<?php echo e(Storage::url('images/10.png')); ?>" alt="">
          <div class="container left">
            <div class="content">
              <h2>1 January 2024</h2>
              <a href="">Open Registration</a>
              <h5>Click to register</h5>
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
              <h1>Competition Day</h1>
            </div>
          </div>
        </div>
      </div>
      <img id="timeline-border" src="<?php echo e(Storage::url('images/Vector9.png')); ?>" alt="">
    </div>

    <div id="sponsor">
      <img class="pseudo" id="pseudo-3" src="<?php echo e(Storage::url('images/pseudo.svg')); ?>" alt="">
      <div class="sponsor-top">
        <h1>Our Sponsors</h1>
      </div>
      <div class="sponsor-bottom">
        <div class="sponsor">
          <h2>Platinum Sponsor</h2>
          <div class="sponsor-img">
            <img src="<?php echo e(Storage::url('images/image 19.png')); ?>" alt="">
            <img src="<?php echo e(Storage::url('images/image 20.png')); ?>" alt="">
            <img src="<?php echo e(Storage::url('images/image 21.png')); ?>" alt="">
          </div>
        </div>
        <div class="sponsor" id="gold">
          <h2>Gold Sponsor</h2>
          <div class="sponsor-img">
            <img src="<?php echo e(Storage::url('images/image 22.png')); ?>" alt="">
            <img src="<?php echo e(Storage::url('images/image 23.png')); ?>" alt="">
            <img src="<?php echo e(Storage::url('images/image 24.png')); ?>" alt="">
          </div>
        </div>
        <div class="sponsor">
          <h2>Silver Sponsor</h2>
          <div class="sponsor-img" id="silver">
            <div id="silver-top">
              <img src="<?php echo e(Storage::url('images/image 25.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 26.png')); ?>" alt="">
            </div>
            <div id="silver-bottom">
              <img src="<?php echo e(Storage::url('images/image 27.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 28.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 29.png')); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="media">
      <img class="pseudo" id="pseudo-3" src="<?php echo e(Storage::url('images/pseudo.svg')); ?>" alt="">
      <div class="media-top">
        <h2>Media Partner</h2>
      </div>
      <div class="media-bottom">
        <img src="<?php echo e(Storage::url('images/11.png')); ?>" alt="">
        <div class="media-left-con">
          <div class="media-img" id="media-1">
            <div class="slides-media1">
              <img src="<?php echo e(Storage::url('images/image 9.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 6.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 8.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 10.png')); ?>" alt="">
            </div>
            <div class="slides-media1">
              <img src="<?php echo e(Storage::url('images/image 9.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 6.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 8.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 10.png')); ?>" alt="">
            </div>
          </div>
          <div class="media-img" id="media-2">
            <div class="slides-media2">
              <img src="<?php echo e(Storage::url('images/image 9.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 6.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 8.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 10.png')); ?>" alt="">
            </div>
            <div class="slides-media2">
              <img src="<?php echo e(Storage::url('images/image 9.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 6.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 8.png')); ?>" alt="">
              <img src="<?php echo e(Storage::url('images/image 10.png')); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <img id="media-border" src="<?php echo e(Storage::url('images/Vector10.png')); ?>" alt="">
    </div>

    <div id="event">
      <img class="pseudo" id="pseudo-4" src="<?php echo e(Storage::url('images/pseudo.svg')); ?>" alt="">
      <div class="event-top">
        <h2>Other Events</h2>
      </div>
      <div class="event-bottom">
        <div class="event-bottomLR">
          <img src="<?php echo e(Storage::url('images/Frame 162616.png')); ?>" alt="">
          <div class="event-info">
            <h3>Virtual Conference</h3>
            <div class="date-event">
              <div class="date">
                <img src="<?php echo e(Storage::url('images/mingcute_time-fill.svg')); ?>" alt="">
                <h5>1 February 2024</h5>
              </div>
              <div class="time">
                <img src="<?php echo e(Storage::url('images/lets-icons_date-fill.svg')); ?>" alt="">
                <h5>13:00 - End</h5>
              </div>
              <div class="public">
                <img src="<?php echo e(Storage::url('images/ic_baseline-people.svg')); ?>" alt="">
                <h5>Public</h5>
              </div>
            </div>
            <div class="event-desc">
              <h5>Our virtual conference: 'Transform Your Ideas into Reality,' invites tech enthusiasts to converge, brainstorm, and code their way from mere concepts to real-world digital solutions.</h5>
            </div>
            <div class="event-btn">
              <button class="Register">Register</button>
            </div>
          </div>
        </div>
        <div class="event-bottomLR">
          <div class="event-info">
            <h3>Developer Workshop</h3>
            <div class="date-event">
              <div class="date">
                <img src="<?php echo e(Storage::url('images/mingcute_time-fill.svg')); ?>" alt="">
                <h5>5 February 2024</h5>
              </div>
              <div class="time">
                <img src="<?php echo e(Storage::url('images/lets-icons_date-fill.svg')); ?>" alt="">
                <h5>13:00 - End</h5>
              </div>
              <div class="public">
                <img src="<?php echo e(Storage::url('images/ic_baseline-people.svg')); ?>" alt="">
                <h5>Participants</h5>
              </div>
            </div>
            <div class="event-desc">
              <h5> In Hackathon’s developer workshop participants can enhance their coding skills and collaborate on innovative software development techniques in a dynamic, hands-on environment.</h5>
            </div>
            <div class="event-btn">
              <button class="Register yellow">Register</button>
            </div>
          </div>
          <img src="<?php echo e(Storage::url('images/Frame 162629.png')); ?>" alt="">
        </div>
      </div>
    </div>

    <div id="contact">
      <img class="pseudo" id="pseudo-2" src="<?php echo e(Storage::url('images/pseudo.svg')); ?>" alt="">
      <div class="contact-top">
        <h2>Contact Us</h2>
      </div>
      <div class="contact-bottom">
        <div class="contact-btm-left">
          <img src="<?php echo e(Storage::url('images/7450347.png')); ?>" alt="">
        </div>
        <div class="contact-btm-right">
          <form action="" id="form-contact">
            <div class="form-input">
              <label for="name">Name</label>
              <input type="text" placeholder="Enter Your Name Here" name="name" id="name1">
              <p id="error-name" class="error-message"></p>
            </div>
            <div class="form-input">
              <label for="email">E-mail</label>
              <input type="email" placeholder="Enter Your E-mail Here" name="email" id="email1">
              <p id="error-email" class="error-message"></p>
            </div>
            <div class="form-input">
              <label for="name">Subject</label>
              <input type="text" placeholder="Enter Your E-mail Subject Here" id="subject1">
              <p id="error-subject" class="error-message"></p>
            </div>
            <div class="form-input">
              <label for="message">Message</label>
              <textarea id="message1" cols="20" rows="10" placeholder="Send Us Your Message Here" name="message"></textarea>
              <p id="error-message1" class="error-message"></p>
            </div>
            <div>
              <button type="" class="Register yellow" id="btn-send">Send</button>
            </div>
          </form>
        </div>
      </div>
      <div class="contact-bottom2">
        <hr>
        <div class="bottom-top">
          <div class="bottom2">
            <h5>Organized by</h5>
            <img src="<?php echo e(Storage::url('images/image 31.svg')); ?>" alt="">
          </div>
          <div class="bottom2">
            <h5>Follow Us</h5>
            <div class="btn-contact">
              <a href="https://www.instagram.com/technoscapebncc"><img src="<?php echo e(Storage::url('images/Instgram.svg')); ?>" alt=""></a>
              <a href="https://twitter.com/bncc_binus"><img src="<?php echo e(Storage::url('images/Twitter.svg')); ?>" alt=""></a>
              <a href="https://www.facebook.com/bina.nusantara.computer.club"><img src="<?php echo e(Storage::url('images/Facebook.svg')); ?>" alt=""></a>
              <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/mycompany/"><img src="<?php echo e(Storage::url('images/Linkedin.svg')); ?>" alt=""></a>
            </div>
            <div>All Rights Reserved BNCC 2024 © Bina Nusantara Computer Club</div>
          </div>
          <div class="bottom2">
            <h5>Powered By</h5>
            <img src="<?php echo e(Storage::url('images/Frame 162680.svg')); ?>" alt="">
          </div>
        </div>
        <div id="privacy">Privacy Policy 61.8 and Terms of Service</div>
      </div>
      <img id="contact-border" src="<?php echo e(Storage::url('images/foot-back.svg')); ?>" alt="">
    </div>
  </div>

  <script src="<?php echo e(asset('js/script.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\Louis Storage\Code\Project\Web project\TPM_Hackathon\resources\views/index.blade.php ENDPATH**/ ?>