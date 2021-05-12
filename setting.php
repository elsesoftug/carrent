<?php include('configs/functions.php');?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
  <!-- Content  -->
  <div id="content">
    <div class="content-wrap page-setting">
      <div class="subsite">
        <div class="row">
          <div class="col-md-12">
            <div class="subsite-heading">
              Setting Account
            </div>
          </div>
        </div>
        <form class="form-group">
          <div class="row field-row">
            <div class="col-md-12">
              <div class="profile-picture">
                <div class="pptext"></div>
                <div class="ppimg">
                  <img src="images/profile4.jpg">
                </div>
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col no-padding-right">
              <label>First name</label>
              <div class="field-group">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control with-icon" value="Lillia">
              </div>
            </div>
            <div class="col">
              <label>Last name</label>
              <div class="field-group">
                <input type="text" class="form-control" value="Doe">
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col">
              <label>Phone</label>
              <div class="field-group">
                <i class="fas fa-phone-square"></i>
                <input type="text" class="form-control with-icon" value="+628570857857">
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col">
              <label>Email</label>
              <div class="field-group">
                <i class="fas fa-envelope"></i>
                <input type="text" class="form-control with-icon" value="lilliadoe@domain.com">
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col ">
              <label>Address </label>
              <div class="field-group">
                <i class="fas fa-home"></i>
                <input type="text" class="form-control with-icon" value="988 Monjali st, Yogyakarta">
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col">
              <label>Change photo</label>
              <div class="field-group">
                <i class="fas fa-camera"></i>
                <input type="file" class="form-control with-icon" id="inputGroupFile02">
              </div>
            </div>
          </div>
          <div class="row field-row setting-submit">
            <div class="col">
              <div class="button">
                <button type="submit" class="theme-button">&nbsp;Save&nbsp;</button>
                <button class="theme-button">Cancel</button>
              </div>
            </div>
          </div>
        </form>


      </div>

    </div>
  </div>
  <!-- .Content  -->
  <!-- Botom Panel  -->
  <?php include('includes/bootomnav.php');?>


<div class="overlay"></div>
<?php include('includes/footer.php')?>