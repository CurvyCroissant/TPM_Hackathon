<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="{{ asset('css/adminPanel.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="navbar">
    <img src="{{Storage::url('images/Variant3.svg')}}" alt="">
    <div>
      <a href="">Admin Panel</a>

      {{-- #1 LOGOUT BUTTON --}}
      <a href="{{ route('home') }}"> <button class="home">Log Out</button></a>

    </div>
  </div>

  <div class="content">
    <div class="content-head">
      <h1>Admin Panel</h1>
    </div>
    <div class="content-bottom">
      <div class="fitur">
        <div class="search-fitur">
          <img src="{{Storage::url('images/Vector (1).svg')}}" alt="">
          <input type="search" placeholder="Search Team">
        </div>
        <span class="sort-con">
          <div class="sort">
            <div>
              <img src="{{Storage::url('images/basil_sort-outline.svg')}}" alt="">
              <span>Sort</span>
            </div>
            <button onclick="choice()" id="sort-btn">
              <img src="{{Storage::url('images/ep_arrow-down-bold.svg')}}" alt="">
            </button>
          </div>
          <div id="sort-choice">
            <hr>
            <div class="sortA ascending">
              <button>
                <img src="{{Storage::url('images/icons8_alphabetical-sorting.svg')}}" alt="">
                Ascending
              </button>
            </div>
            <hr>
            <div class="sortA descending">
              <button>
                <img src="{{Storage::url('images/icons8_alphabetical-sorting-2.svg')}}" alt="">
                Descending
              </button>
            </div>
            <hr>
            <div class="sortA free">
              <button>
                <img src="{{Storage::url('images/ic_round-sort.svg')}}" alt="">
                Free
              </button>
            </div>
          </div>
        </span>
      </div>

      <hr>

      <div class="info-name">
        <div>
          <span>No.</span>
          <span>Team Name</span>
        </div>
        <div>
          <span>Action</span>
        </div>
      </div>

      <hr>

      <!-- start team info 1 -->
      <div class="team-info">
        <div class="info-general">
          <span class="info-left">
            <span>1.</span>
            <span>Team Name 1</span>
          </span>
          <span class="info-right">
            <button class="view-data" onclick="viewData1()">
              <img src="{{Storage::url('images/fluent-mdl2_view.svg')}}" alt="">
              <span>View Data</span>
            </button>
            <button onclick="editData1()">
              <img src="{{Storage::url('images/ep_edit.svg')}}" alt="">
              <span>Edit Data</span>
            </button>

            @forelse ($list_group as $group)
                <form action = "/delete-group/" {{ $group->id }} method="post">
                        @csrf
                    <button type="submit" id="delete-btn" >
                    <img src="{{Storage::url('images/Vector (2).svg')}}" alt="">
                    <span>Delete Team</span>
                    </button>
                </form>
            @empty
                {{-- <p>No Group Inputed</p> --}}
            @endforelse
          </span>
        </div>

        <div id="dashboard-view1">
          <hr>
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
                  <label for="">Github / Gitlab ID</label>
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
              <div class="member-grid">
                <div class="membgrid">

                  <div>Member 1</div>
                </div>
                <div class="membgrid">
                  <div>Member 2</div>
                </div>
                <div class="membgrid">
                  <div>Member 3</div>
                </div>
                <div class="membgrid">
                  <div>Member 4</div>
                </div>
              </div>
            </div>
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

        <div id="dashboard-edit1">
          <hr>
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
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">E-Mail</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Whatsapp</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Line ID</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Github / Gitlab ID</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Birth Place</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Birthday</label>
                  <input type="date" id="member1">
                </div>
              </div>
            </div>
            <div class="member">
              <div class="member-head">
                <h3>Team Members</h3>
              </div>
              <div class="member-grid">
                <div class="membgrid">
                  <label for="">Team Member 1</label>
                  <input type="text" id="member1">
                </div>
                <div class="membgrid">
                  <label for="">Team Member 2</label>
                  <input type="text" id="member2">
                </div>
                <div class="membgrid">
                  <label for="">Team Member 3</label>
                  <input type="text" id="member3">
                </div>
                <div class="membgrid">
                  <label for="">Team Member 4</label>
                  <input type="text" id="member4">
                </div>
              </div>
            </div>
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
      </div>

      <!-- start team info 2 -->
      <div class="team-info">
        <hr>
        <div class="info-general">
          <span class="info-left">
            <span>2.</span>
            <span>Team Name 2</span>
          </span>
          <span class="info-right">
            <button class="view-data" onclick="viewData2()">
              <img src="{{Storage::url('images/fluent-mdl2_view.svg')}}" alt="">
              <span>View Data</span>
            </button>
            <button onclick="editData2()">
              <img src="{{Storage::url('images/ep_edit.svg')}}" alt="">
              <span>Edit Data</span>
            </button>
            <button id="delete-btn">
              <img src="{{Storage::url('images/image/Vector (2).svg')}}" alt="">
              <span>Delete Team</span>
            </button>
          </span>
        </div>

        <!-- start of view 2 -->
        <div id="dashboard-view2">
          <hr>
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
                  <label for="">Github / Gitlab ID</label>
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
              <div class="member-grid">
                <div class="membgrid">

                  <div>Member 1</div>
                </div>
                <div class="membgrid">
                  <div>Member 2</div>
                </div>
                <div class="membgrid">
                  <div>Member 3</div>
                </div>
                <div class="membgrid">
                  <div>Member 4</div>
                </div>
              </div>
            </div>
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
        <!-- end of view 2 -->

        <!-- start of edit 2 -->
        <div id="dashboard-edit2">
          <hr>
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
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">E-Mail</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Whatsapp</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Line ID</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Github / Gitlab ID</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Birth Place</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Birthday</label>
                  <input type="date" id="member1">
                </div>
              </div>
            </div>
            <div class="member">
              <div class="member-head">
                <h3>Team Members</h3>
              </div>
              <div class="member-grid">
                <div class="membgrid">
                  <label for="">Team Member 1</label>
                  <input type="text" id="member1">
                </div>
                <div class="membgrid">
                  <label for="">Team Member 2</label>
                  <input type="text" id="member2">
                </div>
                <div class="membgrid">
                  <label for="">Team Member 3</label>
                  <input type="text" id="member3">
                </div>
                <div class="membgrid">
                  <label for="">Team Member 4</label>
                  <input type="text" id="member4">
                </div>
              </div>
            </div>
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
        <!-- end of edit 2 -->
      </div>
      <!-- end of team info 2 -->

      <!-- start team info 3 -->
      <div class="team-info">
        <hr>
        <div class="info-general">
          <span class="info-left">
            <span>3.</span>
            <span>Team Name 3</span>
          </span>
          <span class="info-right">
            <button class="view-data" onclick="viewData3()">
              <img src="{{Storage::url('images/fluent-mdl2_view.svg')}}" alt="">
              <span>View Data</span>
            </button>
            <button onclick="editData3()">
              <img src="{{Storage::url('images/ep_edit.svg')}}" alt="">
              <span>Edit Data</span>
            </button>
            <button id="delete-btn">
              <img src="{{Storage::url('images/Vector (2).svg')}}" alt="">
              <span>Delete Team</span>
            </button>
          </span>
        </div>

        <!-- start of view 3 -->
        <div id="dashboard-view3">
          <hr>
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
                  <label for="">Github / Gitlab ID</label>
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
              <div class="member-grid">
                <div class="membgrid">

                  <div>Member 1</div>
                </div>
                <div class="membgrid">
                  <div>Member 2</div>
                </div>
                <div class="membgrid">
                  <div>Member 3</div>
                </div>
                <div class="membgrid">
                  <div>Member 4</div>
                </div>
              </div>
            </div>
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
        <!-- end of view 3 -->

        <!-- start of edit 3 -->
        <div id="dashboard-edit3">
          <hr>
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
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">E-Mail</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Whatsapp</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Line ID</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Github / Gitlab ID</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Birth Place</label>
                  <input type="text" id="member1">
                </div>
                <div class="leadgrid">
                  <label for="">Birthday</label>
                  <input type="date" id="member1">
                </div>
              </div>
            </div>
            <div class="member">
              <div class="member-head">
                <h3>Team Members</h3>
              </div>
              <div class="member-grid">
                <div class="membgrid">
                  <label for="">Team Member 1</label>
                  <input type="text" id="member1">
                </div>
                <div class="membgrid">
                  <label for="">Team Member 2</label>
                  <input type="text" id="member2">
                </div>
                <div class="membgrid">
                  <label for="">Team Member 3</label>
                  <input type="text" id="member3">
                </div>
                <div class="membgrid">
                  <label for="">Team Member 4</label>
                  <input type="text" id="member4">
                </div>
              </div>
            </div>
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
        <!-- end of edit 3 -->
      </div>
      <!-- end of team info 3 -->
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

  <script src="{{ asset('js/adminPanel.js') }}"></script>
</body>
</html>
