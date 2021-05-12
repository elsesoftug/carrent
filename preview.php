<?php include('configs/functions.php');?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
  <!-- Content  -->
  <div id="content">
    <div class="content-wrap page-gallery">


      <div class="subsite">
        <div class="row">
          <div class="col-md-12">

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="gallery-section">
              <div class="row-filter">
                <!-- filter -->
                <!-- <div class="filter-gallery">
                      <button data-filter="gallery-show-all" class="filter-button active">All</button>
                      <button data-filter="hotel" class="filter-button">Hotel</button>
                      <button data-filter="restaurant" class="filter-button">Restaurant</button>
                      <button data-filter="destination" class="filter-button">Destinations</button>
                      <button data-filter="city" class="filter-button">City</button>
                    </div> -->
                <!-- /filter -->
              </div>
              <div class="row-gallery">
                <div class="wrap-gallery">
                <?php 
                        if($_GET['Add_id']){
                            $Add_ID = $_GET['Add_id'];
                            $_SESSION['App_id'] = $Add_ID;
                        }
                        $sql = "SELECT path FROM display WHERE Add_id = '$Add_ID'";
                        $result = $mysqli->query($sql);
                        if($result->num_rows > 0){
                        while($row = $result->fetch_array()){
                         ?>

                  <div class="gall-col gallery-img-box" data-category-image="hotel,city">
                    <a class="gallery-list" href="<?php echo $row['path'];?>"><img alt="gallery"
                        src="<?php echo $row['path'];?>"></a>
                  </div>
                  <?php }} ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row field-row setting-submit">
            <div class="col">
              <div class="button">
                <a href="car_single?Add_id=<?php echo $_SESSION['App_id'];?>" class="theme-button">&nbsp;View Description&nbsp;</a>
                <a href="" class="theme-button">contact Owner</a>
              </div>
            </div>
          </div>
        
      </div>


      
<div class="overlay"></div>



    </div>
  </div>
  <!-- .Content  -->
  <!-- Botom Panel  -->

  <?php include('includes/bootomnav.php');?>


<div class="overlay"></div>
<?php include('includes/footer.php')?>