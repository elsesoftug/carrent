<?php include('configs/functions.php');?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
<!-- Content  -->
  <div id="content">
    <div class="content-wrap page-car-single">

      <div class="subsite">

      <?php 
         if($_GET['Add_id']){
                 $Add_ID = $_GET['Add_id'];
                            $_SESSION['App_id'] = $Add_ID;
                        }
                        $sql = "SELECT branda_name,price,location,Description FROM addverts WHERE Add_id = '$Add_ID'";
                        $result = $mysqli->query($sql);
                        if($result->num_rows > 0){
                        while($row = $result->fetch_array()){
                         ?>

        <div class="row">
          <div class="col-md-6">
            <div class="cs-top">
              <div class="cst-left">
                <div class="subsite-heading">
                  <?php echo $row['branda_name'];?>
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
              <div class="cst-right">
                <div class="price">
                  <div class="price-value"><?php echo $row['price'].'/=';?> </div>
                  <div class="duration"> per day </div>
                </div>
              </div>
            </div>
          </div>
        </div>




        <div class="row">
          <div class="col-md-12">
              <?php echo $row['Description'];?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="single-car-box">

              <div class="scb-right">
                <img src="<?php echo get_image($_SESSION['App_id']);?>" alt="image" class="border-radius">
              </div>

              <div class="scb-left">
                <div class="scbl scbl-a">
                  <div class="scbl-ra">Gearbox</div>
                  <div class="scbl-rb">Manual</div>
                  <div class="scbl-rc"><img src="images/transmission.png"></div>
                </div>
                <div class="scbl scbl-a scbl-center">
                  <div class="scbl-ra">Capability</div>
                  <div class="scbl-rb">5 Seats</div>
                  <div class="scbl-rc"><img src="images/security.png"></div>
                </div>
                <div class="scbl scbl-a">
                  <div class="scbl-ra">Full Tank</div>
                  <div class="scbl-rb">52 L</div>
                  <div class="scbl-rc"><img src="images/industry.png"></div>
                </div>
                <?php }} ?>

              </div>
            </div>
          </div>
        </div>
        </div>

    </div>
    
    <div class="row field-row setting-submit">
            <div class="col">
              <div class="button">
                <a href="" class="theme-button">&nbsp;Reserve Now&nbsp;</a>
                <a href="" class="theme-button">contact Owner</a>
              </div>
            </div>
          </div>
  </div>
  <!-- .Content  -->
  <!-- Botom Panel  -->
  <?php include('includes/bootomnav.php');?>


  <div class="overlay"></div>
<?php include('includes/footer.php')?>