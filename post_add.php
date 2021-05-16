<?php include('configs/functions.php');?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');
$_SESSION['msg']="";
?>
  <!-- Content  -->
  <?php if(isset($_POST['post_add'])){
        Post_add();        
  }?>
  <div id="content">
    <div class="content-wrap page-setting">
      <div class="subsite">
        <div class="row">
          <div class="col-md-12">
            <div class="subsite-heading">
              Post your addverts<?php echo $_SESSION['msg'];?>
            </div>
          </div>
        </div>
        <form class="form-group" method = "POST" action="post_add" enctype="multipart/form-data">
          <div class="row field-row">
            <div class="col-md-12">
              <div class="profile-picture">
                <div class="pptext"></div>
                
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col no-padding-right">
              <label>Brand Name</label>
              <div class="field-group">
                <input type="text" name="brand_Name" class="form-control with-icon" value="">
              </div>
            </div>
            <div class="col">
              <label>Price(Per day)</label>
              <div class="field-group">
                <input type="text" name = "price" class="form-control" value="">
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col">
              <label>Phone</label>
              <div class="field-group">
                <i class="fas fa-phone-square"></i>
                <input type="text" name = "phone" class="form-control with-icon" value="<?php echo $_SESSION['telphone'];?>">
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col">
              <label>Email</label>
              <div class="field-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name = "email" class="form-control with-icon" value="<?php echo $_SESSION['login'];?>">
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col ">
              <label>Address </label>
              <div class="field-group">
                <i class="fas fa-home"></i>
                <input type="text" name = "location" class="form-control with-icon" value="">
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col ">
              <label>Describe you service </label>
              <i class="fas fa-home"></i>
               <div class="field-group">
                <textarea type="text" name = "description" class="form-control with-icon" value="">
                </textarea>
              </div>
            </div>
          </div>
          <div class="row field-row">
            <div class="col">
              <label>Upload display photo</label>
              <div class="field-group">
                <i class="fas fa-camera"></i>
                <input type="file" name="files[]" multiple class="form-control with-icon" id="inputGroupFile02">
              </div>
            </div>
          </div>
          <div class="row field-row setting-submit">
            <div class="col">
              <div class="button">
                <button type="submit" name = "post_add" class="theme-button">&nbsp;Submit&nbsp;</button>
                <a href="index" class="theme-button">Cancel</a>
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