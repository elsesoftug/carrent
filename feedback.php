<?php include('configs/functions.php');?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
  <!-- Content  -->
  <div id="content">
    <div class="content-wrap page-feedback">

      <div class="subsite-banner">
        <img src="images/subsite-banner.jpg">
      </div>
      <div class="subsite subsite-with-banner">
        <div class="row">
          <div class="col-md-12">
            <div class="subsite-heading">
              Send us your feedback!
            </div>
            <div class="subsite-heading-description">
              Do you have suggestion or found some bug?
              let us know in the field bellow.
            </div>
          </div>
        </div>
        <form class="form-group">
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
            <div class="col">
              <label>Feedback</label>
              <div class="field-group">
                <textarea class="form-control" aria-label="note" placeholder="describe your experience here.."
                  rows="3"></textarea>
              </div>
            </div>
          </div>
          <div class="row field-row row-check">
            <div class="col">
              <div class="field-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    I agree to <a href="#">Terms and Conditions</a>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="row field-row feedback-submit">
            <div class="col">
              <div class="button">
                <button type="submit" class="theme-button">&nbsp;Save&nbsp;</button>
                <button class="theme-button">Reset</button>
              </div>
            </div>
          </div>
        </form>

      </div>

    </div>
  </div>
  <!-- .Content  -->
  <?php include('includes/bootomnav.php');?>


<div class="overlay"></div>
<?php include('includes/footer.php')?>