<?php include "configs/database.php"; ?>
<?php
session_start();
if (isset($_POST['singin'])){
	//Get Post variables
   $userid = $_POST['username'];      
   $pas = $_POST['password'];
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
   
	//VALIDATE / macth the passwords
	if($pas === $user['password']){
      //header('location:products.php');
                   //Set Refresh header using PHP.
				   
    if($_SESSION['accounttype'] <> "Admin"){
		header( "refresh:3;url=http://192.168.0.11/HMS/staff/modules/departments" );
    }else{ 
		header( "refresh:3;url=http://192.168.0.11/HMS/staff/modules/index" );
		}
$msg = "<div class=\"alert alert-success alert-dismissable\" style = \"width:100%; margin-left:4%;\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
					   <p>Login successful. Please wait.</p>
			   </div>";
	
            // header('location:../logedin/classroom/dashboard.html');
  
	 }else{
	   $msg = "<div class=\"alert alert-danger alert-dismissable\" style = \"width:100%; margin-left:4%;\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
					   <p>The data you entered is invalid. Please try again</p>
			   </div>";
	
   }
	
  }
?>
