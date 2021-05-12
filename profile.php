<?php include('configs/functions.php');?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
  <!-- Content  -->
  <div id="content">
    <div class="content-wrap page-profile">

      <div class="subsite-banner">
        <img src="images/subsite-banner-5.jpg">
      </div>
      <div class="subsite subsite-with-banner">


        <div class="row-avatar">
          <div class="avatar-img">
            <img src="images/profile4.jpg">
          </div>
        </div>
        <div class="row-info-profile">
          <div class="proname"><?php echo ucfirst($_SESSION['fname']). " ".ucfirst($_SESSION['lname']);?></div>
          <div class="proname-info">Driver</div>
          <div class="socmed">
            <div class="socmed-line">
              <div class="socmed-item">
                <div class="si-icon">
                  <i class="fab fa-facebook-f"></i>
                </div>
              </div>
            </div>
            <div class="socmed-line">
              <div class="socmed-item">
                <div class="si-icon">
                  <i class="fab fa-instagram"></i>
                </div>
              </div>
            </div>
            <div class="socmed-line">
              <div class="socmed-item">
                <div class="si-icon">
                  <i class="fab fa-twitter"></i>
                </div>
              </div>
            </div>
            <div class="socmed-line">
              <div class="socmed-item">
                <div class="si-icon">
                  <i class="fab fa-youtube"></i>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="probox">
          <div class="bx-col">
            <div class="bx-col-in"> Trips<br><span class="count"> 58 </span></div>
          </div>
          <div class="bx-col">
            <div class="bx-col-in border-center"> Photos<br><span class="count"> 388 </span></div>
          </div>
          <div class="bx-col">
            <div class="bx-col-in"> Review<br><span class="count"> 43 </span></div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="profile-trip">
          <div class="cf-heading">Lilia's trips</div>
          <div class="default-carousel">
            <!-- item -->
            <div class="destination-card-small">
              <div class="dcs-img">
                <div class="dcs-row-a">Yogyakarta, Indonesia</div>
                <img src="images/destination1.jpg">
              </div>
              <div class="star-rates">
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="rated-value">5.0</span>
              </div>
            </div>
            <!-- .item -->
            <!-- item -->
            <div class="destination-card-small">
              <div class="dcs-img">
                <div class="dcs-row-a">Phuket, Thailand</div>
                <img src="images/destination6.jpg">
              </div>
              <div class="star-rates">
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star ">
                  <i class="fas fa-star"></i>
                </span>
                <span class="rated-value">4.0</span>
              </div>
            </div>
            <!-- .item -->
            <!-- item -->
            <div class="destination-card-small">
              <div class="dcs-img">
                <div class="dcs-row-a">Bali, Indonesia</div>
                <img src="images/destination4.jpg">
              </div>
              <div class="star-rates">
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="rated-value">4.0</span>
              </div>
            </div>
            <!-- .item -->
            <!-- item -->
            <div class="destination-card-small">
              <div class="dcs-img">
                <div class="dcs-row-a">Bandung, Indonesia</div>
                <img src="images/destination5.jpg">
              </div>
              <div class="star-rates">
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="star rated">
                  <i class="fas fa-star"></i>
                </span>
                <span class="rated-value">5.0</span>
              </div>
            </div>
            <!-- .item -->
          </div>
        </div>

      </div>

    </div>
  </div>
  <!-- .Content  -->
			<!-- Botom Panel  -->
            <?php include('includes/bootomnav.php');?>


<div class="overlay"></div>
<?php include('includes/footer.php')?>