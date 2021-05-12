<?php include('configs/functions.php');?>
<?php include('includes/header.php');?>
  <!-- .Preloading -->
  <!-- Content  -->
  <?php if(isset($_POST['register'])){
        Register();        
  }?>
  <div id="content">
    <div class="content-wrap page-register">
      <div class="subsite-banner">
        <img src="images/subsite-banner.jpg">
      </div>
      <div class="subsite subsite-with-banner">
        <div class="row">
          <div class="col-md-12">
            <div class="subsite-heading">
              Create Account<?php echo $_SESSION['msg'];?>
            </div>
            <div class="subsite-heading-description">
              create a new account
            </div>
          </div>
        </div>
        <form class="form-group" method="POST" action="register.php">
          <div class="row field-row">
            <div class="col no-padding-right">
              <label>First name</label>
              <div class="field-group">
                <i class="fas fa-user"></i>
                <input type="text" name="first_name" class="form-control with-icon">
              </div>
            </div>
            <div class="col">
              <label>Last name</label>
              <div class="field-group">
                <input type="text" name = "last_name" class="form-control">
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col">
              <label>Phone Number</label>
              <div class="field-group">
                <i class="fas fa-user-circle"></i>
                <input type="text" placeholder="0778 898989" name="phone" class="form-control with-icon">
              </div>
            </div>
          </div>

          <div class="row field-row">
            <div class="col">
              <label>Email</label>
              <div class="field-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" class="form-control with-icon">
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
          <div class="row field-row">
            <div class="col">
              <label>Confirm Password</label>
              <div class="field-group">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control with-icon">
              </div>
            </div>
          </div>

          <div class="row field-row have-a-account">
            <div class="col">
              <div class="field-group">
                Already have a account? <a href="login.html"> Login </a>
              </div>
            </div>
          </div>
          <div class="row field-row register-submit">
            <div class="col">
              <div class="button">
                <button type="submit" name = "register" class="theme-button">Create Account</button>
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
        <div class="row field-row have-a-account">
          <div class="col">
            <div class="field-group">
              By signing up, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
            </div>
          </div>
        </div>

      </div>


    </div>
  </div>
  <!-- .Content  -->
  <!-- Botom Panel  -->
  <?php include('includes/footer.php');?>