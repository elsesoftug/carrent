  <!-- Sidebar left -->
  <nav id="sidebarleft" class="sidenav">
  <div id="dismiss">
      <i class="fas fa-times"></i>
    </div>
    <div class="sidebar-header">
      <h3>Account</h3>
    </div>
    <div class="sdprofile">
      <div class="sdp-left">
        <img src="images/profile4.jpg" alt="profile">
      </div>
      <div class="sdp-right">
        <div class="sd-name"><?php echo ucfirst($_SESSION['fname']). " ".ucfirst($_SESSION['lname']);?></div>
        <div class="sd-status"><?php echo $_SESSION['telphone']?></div>
      </div>
    </div>
    <ul class="list-unstyled components">
      <li>
        <a href="index"><i class="fas fa-home"></i>Home</a>
      </li>
      <li>
      </li>
      <li>
        <a href="#pagemyaccount" data-toggle="collapse" aria-expanded="false"><i class="fas fa-user"></i>My
          Account <span><i class="fas fa-caret-down"></i></span></a>
        <ul class="collapse collapsible-body" id="pagemyaccount">
          <li>
            <a href="profile">Profile</a>
          </li>
          <li>
            <a href="setting">Settings</a>
          </li>
        </ul>
      </li>


      <li>
        <a href="#pagemybooking" data-toggle="collapse" aria-expanded="false"><i class="fas fa-receipt"></i>My
          Bookings <span><i class="fas fa-caret-down"></i></span></a>
        <ul class="collapse collapsible-body" id="pagemybooking">
          <li>
            <a href="myrides">My rides</a>
          </li>
        </ul>
      </li>


      <li>
        <a href="feedback"><i class="fas fa-car"></i>Feedback</a>
      </li>

      <li>
        <a href="myadds"><i class="fas fa-car"></i>My Adds</a>
      </li>

      <li>
        <a href="single_page.html"><i class="fas fa-exclamation-circle"></i>About</a>
      </li>
      <li>
        <a href="configs/logout.php"><i class="fas fa-exclamation-circle"></i>Logout</a>
      </li>
    </ul>
  </nav>
  <!-- .Sidebar left -->
  <!-- Sidebar right -->
  <nav id="sidebarright" class="sidenav">
    <div id="dismiss">
      <i class="fas fa-times"></i>
    </div>
    <div class="sidebar-header">
      <h3>Notifications</h3>
    </div>
    <ul class="right-menu">

      <li class="right-menu-item">
        <a href="#">
          <i class="fas fa-envelope"></i>
          <div class="ntitle">Your transaction was successful</div>
          <div class="desc">lorem ipsum dolor sit amet...</div>
        </a>
      </li>
      <li class="right-menu-item">
        <a href="#">
          <i class="fas fa-star"></i>
          <div class="ntitle">You have received an award</div>
          <div class="desc">lorem ipsum dolor sit amet...</div>
        </a>
      </li>
      <li class="right-menu-item">
        <a href="#">
          <i class="fas fa-car-alt"></i>
          <div class="ntitle">Your tour schedule</div>
          <div class="desc">lorem ipsum dolor sit amet...</div>
        </a>
      </li>
      <li class="right-menu-item">
        <a href="#">
          <i class="fas fa-ticket-alt"></i>
          <div class="ntitle">Promo offer for you today</div>
          <div class="desc">lorem ipsum dolor sit amet...</div>
        </a>
      </li>
      <li class="right-menu-item">
        <a href="#">
          <i class="fas fa-envelope"></i>
          <div class="ntitle">You get a point</div>
          <div class="desc">lorem ipsum dolor sit amet...</div>
        </a>
      </li>

    </ul>
  </nav>
  <!-- .Sidebar left -->
  <!-- Sidebar right -->
  <nav id="sidebarright" class="sidenav">
    <div id="dismiss">
      <i class="fas fa-times"></i>
    </div>
    <div class="sidebar-header">
      <h3>Notifications</h3>
    </div>
    <ul class="right-menu">
      <li class="right-menu-item">
        <a href="#">
          <i class="fas fa-envelope"></i>
          <div class="ntitle">Your transaction was successful</div>
          <div class="desc">lorem ipsum dolor sit amet...</div>
        </a>
      </li>
      <li class="right-menu-item">
        <a href="#">
          <i class="fas fa-star"></i>
          <div class="ntitle">You have received an award</div>
          <div class="desc">lorem ipsum dolor sit amet...</div>
        </a>
      </li>
      <li class="right-menu-item">
        <a href="#">
          <i class="fas fa-car-alt"></i>
          <div class="ntitle">Your tour schedule</div>
          <div class="desc">lorem ipsum dolor sit amet...</div>
        </a>
      </li>
      <li class="right-menu-item">
        <a href="#">
          <i class="fas fa-ticket-alt"></i>
          <div class="ntitle">Promo offer for you today</div>
          <div class="desc">lorem ipsum dolor sit amet...</div>
        </a>
      </li>
      <li class="right-menu-item">
        <a href="#">
          <i class="fas fa-envelope"></i>
          <div class="ntitle">You get a point</div>
          <div class="desc">lorem ipsum dolor sit amet...</div>
        </a>
      </li>
    </ul>
  </nav>
  <!-- .Sidebar right-->
  <!-- Header  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-header">
    <div class="container-fluid">
    <?php if(!empty($_SESSION['login'])){?>  
    <button type="button" id="sidebarleftbutton" class="btn">
        <i class="fas fa-align-left"></i>
      </button>
      <?php } else{?>
        <button type="button" id="sidebarleftbutton" class="btn">
        <b><a href="login" style="color:white;">Signin</a></b>
      </button>      
      <?php }?>

      <div class="logo">Plesir</div>
      <button type="button" id="sidebarrightbutton" class="btn">
        <div class="notif">
          <i class="fas fa-bell"></i>
          <i class="fas fa-circle "></i>
        </div>
      </button>
    </div>
  </nav>
  <!-- .Header  -->