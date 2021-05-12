<?php include('configs/functions.php');?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
  <!-- Content  -->
  <div id="content">
    <div class="content-wrap page-news-list">
      <div class="subsite-banner">
        <img src="images/subsite-banner-5.jpg">
      </div>
      <div class="subsite subsite-with-banner">
        <div class="row">
          <div class="col-md-12">
            <div class="subsite-heading">
              My adds
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="search-form search-content">
              <div class="search-wrapper ">
                <input id="search" placeholder="Search...">
                <button class="ssubmit" type="submit" name="search_submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>

          
        <?php 
                        $sql = "SELECT * FROM addverts WHERE email = '{$_SESSION['login']}'";
                        $result = $mysqli->query($sql);
                        if($result->num_rows > 0){
                        while($row = $result->fetch_array()){
                            ?>
        <div class="row news-row">
          <div class="col-md-12">
            <div class="news-card">
              <div class="nc-top">
                <div class="nc-left">
                  <div class="ncl-image">
                    <img src="<?php echo get_image($row['Add_id']);?>" alt="image">
                  </div>
                </div>
                <div class="nc-right">
                  <div class="ncr-row-a">
                    <?php echo $row['branda_Name']?>
                  </div>
                  <div class="ncr-row-b">
                    <?php echo $row['Description'];?>
                  </div>
                </div>
                <div class="row field-row setting-submit">
                  <div class="col">
                    <div class="button">
                      <button type="submit" name = "post_add" class="theme-button">&nbsp;Edit&nbsp;</button>
                      <a href="index" class="theme-button" style="background-color:red;">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php }}else{ echo 'You don\' have any addverts running';} ?>

        <div class="row car-row pagination-row">
          <div class="col-md-12">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
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