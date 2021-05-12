<?php include('configs/functions.php');?>
<?php include('includes/header.php');?>
  <!-- .Preloading -->
  <!-- Content  -->
  <?php if(isset($_POST['login'])){
        login();        
  }?>
<!-- Content  -->
<div id="content">
    <div class="content-wrap page-login">
      <div class="subsite-banner">
        <img src="images/subsite-banner-6.jpg">
      </div>
      <div class="subsite subsite-with-banner">
        <div class="row">
          <div class="col-md-12">
            <div class="subsite-heading">
              Login Account
            </div>
          </div>
        </div>
        <form class="form-group" method="POST">

          <div class="row field-row">
            <div class="col">
              <label>Username</label>
              <div class="field-group">
                <i class="fas fa-user-circle"></i>
                <input type="email" name = "username" class="form-control with-icon">
              </div>
            </div>
          </div>


          <div class="row field-row">
            <div class="col">
              <label>Password</label>
              <div class="field-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="form-control with-icon">
              </div>
            </div>
          </div>

          <div class="row field-row login-submit">
            <div class="col">
              <div class="button">
                <button type="submit" name="login" class="theme-button">Login</button>
              </div>
            </div>
          </div>
          <div class="row field-row text-with-link">
            <div class="col">
              <div class="field-group">
                <a href="#"> Forgot password </a>
              </div>
            </div>
          </div>

        </form>
        <div class="row">
          <div class="col-md-12">
            <div class="connect-with">
              <div class="text-head">
                Or connect with:
              </div>
              <ul>
                <li><a class="connect-facebook" href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                <li><a class="connect-google" href="#"><i class="fab fa-google"></i> Google</a></li>
                <li><a class="connect-twitter" href="#"><i class="fab fa-twitter"></i> twitter</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row field-row text-with-link">
          <div class="col">
            <div class="field-group">
              Don't have an Account ? <a href="register">Sign Up</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- .Content  -->
  <!-- Botom Panel  -->
  <?php include('includes/footer.php');?>