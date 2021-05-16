<?php require "database.php"; ?>
<?php
session_start();
//adding next of kin
function Register(){
    require "database.php";
     //Get Post variables and placing them in an array
	 $input = array();
	 $input[0] = $mysqli->escape_string($_POST['first_name']);
	 $input[1] = $mysqli->escape_string($_POST['last_name']);
	 $input[2] = $mysqli->escape_string($_POST['email']);
	 $input[3] = $mysqli->escape_string($_POST['password']);
	 $input[4] = $mysqli->escape_string("");
	 $input[5] = $mysqli->escape_string($_POST['phone']);

	 $query ="INSERT INTO accounts (firstname,lastname,telphone,password,email,status,hash) 
	   values('$input[0]','$input[1]','$input[5]','$input[3]','$input[2]','$input[4]','')";
	  $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	 
 		 $_SESSION['msg'];
	   if(($insert_row)){
		//$_SESSION['msg'] = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
		//<p>New user  has been added. Please share the password with the user</p>
		//</div>";

		$_SESSION['login'] =  $input[2];
		$_SESSION['accounttype'] = $input[4];
		$_SESSION['fname'] = $input[0];
		$_SESSION['lname'] = $input[1];
		$_SESSION['telphone'] = $input[5];
		$_SESSION['msg']="";
		
		header("Location: http://127.0.0.1/home/index");
		   
	   }else{
		$_SESSION['msg'] = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
		 <p>Some thing went wrong. user not added</p>
					</div>";
	   }
	
  }

  //function loging in
  function login(){
    require "database.php";
	//Get Post variables
	$userid = $mysqli->escape_string($_POST['username']);      
	$pas = $mysqli->escape_string($_POST['password']);
	$hashpass = $pas;//hashing the password
	//$hashpass = password_hash($pas,PASSWORD_BCRYPT);//hashing the password
	//$usertype = $_POST['acounttype'];
	 //Question query
	 $query="SELECT * FROM accounts WHERE email = '$userid' ";
	 $select_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
	 //$available = $select_row->num_rows;
	 $user = $select_row->fetch_assoc();
	  //store user data in sessions
	$_SESSION['login'] =  $userid;
	$_SESSION['accounttype'] = $user['status'];
	$_SESSION['fname'] = $user['firstname'];
	$_SESSION['lname'] = $user['lastname'];
	$_SESSION['telphone'] = $user['telphone'];
	$_SESSION['msg'];
	 //VALIDATE / macth the passwords
	 if($pas === $user['password']){
	   	 header('Location:index');   
	  }else{
		$_SESSION['msg'] = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
		 <p>Some thing went wrong. user not added</p>
					</div>";
	 
	}
	 
 

  }

  //Post Job
function Post_add(){
    require "database.php";
     //Get Post variables and placing them in an array
	 $input = array();
	 $input[0] = $mysqli->escape_string($_POST['brand_Name']);
	 $input[1] = $mysqli->escape_string($_POST['price']);
	 $input[2] = $mysqli->escape_string($_POST['email']);
	 $input[3] = $mysqli->escape_string($_POST['location']);
	 $input[4] = $mysqli->escape_string($_POST['description']);
	 $input[5] = $mysqli->escape_string($_POST['phone']);
	 $input[6] = date('d/M/Y').'/'.time();	  
	 $query ="INSERT INTO addverts (Add_id,branda_Name,No_passangers,Self_drive,email,date_rec,image,price,location,Description) 
	   values('$input[6]','$input[0]','','','$input[2]','','','$input[1]','$input[3]','$input[4]')";
	  $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);

	  // Configure upload directory and allowed file types
	  $upload_dir = 'uploads'.DIRECTORY_SEPARATOR;
	  $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
		
	  // Define maxsize for files i.e 2MB
	  $maxsize = 10 * 1024 * 1024; 
	
	  // Checks if user sent an empty form 
	  if(!empty(array_filter($_FILES['files']['name']))) {
	
		  // Loop through each file in files[] array
		  foreach ($_FILES['files']['tmp_name'] as $key => $value) {
				
			  $file_tmpname = $_FILES['files']['tmp_name'][$key];
			  $file_name = $_FILES['files']['name'][$key];
			  $file_size = $_FILES['files']['size'][$key];
			  $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
	
			  // Set upload file path
			  $filepath = $upload_dir.'/'.$file_name;
	
			  // Check file type is allowed or not
			  if(in_array(strtolower($file_ext), $allowed_types)) {
	
				  // Verify file size - 2MB max 
				  if ($file_size > $maxsize)         
					  echo "Error: File size is larger than the allowed limit."; 
	
				  // If file with name already exist then append time in
				  // front of name of the file to avoid overwriting of file
				  if(file_exists($filepath)) {
					  $filepath = $upload_dir.'/'.time().$file_name;
						
					  if( move_uploaded_file($file_tmpname, $filepath)) {
						$query ="INSERT INTO display (Add_id,path,upload_at) 
						values('$input[6]','$filepath','')";
					   $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
						 // echo "{$file_name} successfully uploaded <br />";
					  } 
					  else {                     
						  echo "Error uploading {$file_name} <br />"; 
					  }
				  }
				  else {
					
					  if( move_uploaded_file($file_tmpname, $filepath)) {
						  //store file path in the data base
						$query ="INSERT INTO display (Add_id,path,upload_at) 
						values('$input[6]','$filepath','')";
					   $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
				 
						 // echo "{$file_name} successfully uploaded <br />";
					  }
					  else {                     
						  echo "Error uploading {$file_name} <br />"; 
					  }
				  }
			  }
			  else {
					
				  // If file extention not valid
				  echo "Error uploading {$file_name} "; 
				  echo "({$file_ext} file type is not allowed)<br / >";
			  } 
		  }
	  } 
	  else {
			
		  // If no files selected
		  echo "No files selected.";
	  }

	 
	 	 $_SESSION['msg'];
	   if(($insert_row)){
		$_SESSION['msg'] = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
		<p>New user  has been added. Please share the password with the user</p>
		</div>";
			
		//header("Location: http://127.0.0.1/home/index");
		   
	   }else{
		$_SESSION['msg'] = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
		 <p>Some thing went wrong. user not added</p>
					</div>";
	   }
	
  }

  //get display image
  function get_image($Add_id){
	require "database.php";
    $sumAmount ="SELECT path FROM display WHERE Add_id = '$Add_id' LIMIT 1";
    $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
    $row = mysqli_fetch_assoc($result); 
   return $row['path'];
   
  }

  //resizing imag

    ?>