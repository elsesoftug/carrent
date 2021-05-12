<?php require "../configs/database.php"; ?>

<?php
session_start();
//adding a new patient update_patient
if (isset($_POST['add_patient'])){
  $input = array();
  $input[0] = $mysqli->escape_string($_POST['patient_id']);
  $input[1] = $mysqli->escape_string($_POST['acount_type']);
  $input[2] = $mysqli->escape_string(ucfirst($_POST['fname']));
  $input[3] = $mysqli->escape_string(ucfirst($_POST['lname']));
  $input[4] = $mysqli->escape_string($_POST['age']);
  $input[5] = $mysqli->escape_string($_POST['Gender']);
  $input[6] = $mysqli->escape_string($_POST['phone']);
  $input[7] = $mysqli->escape_string($_POST['email']);
  $input[8] = $mysqli->escape_string(ucfirst($_POST['village']));
  $input[9] = $mysqli->escape_string(ucfirst($_POST['district']));

  //inserting the reques(tests)
  Doctor_request($input[0]);
  Doctor_prescribe($input[0]);
  Next_kin($input[0]);
     $list = array();
  // Check if any option is selected 
  if(isset($_POST["deptment"]))  
  { 
      // Retrieving each selected option 
      foreach ($_POST['deptment'] as $subject)  
      $list[] = $subject;    
  }  
 
  $input[10] = implode( ", ", $list );
  $input[11] = "Pending";
  $input[12] = $mysqli->escape_string(ucfirst($_POST['served_by']));
  $input[13] = $mysqli->escape_string($_POST['date']);
  $input[14] = $mysqli->escape_string($_POST['weight']);
  $input[15] = $mysqli->escape_string($_POST['complaint']);
  $input[16] = $mysqli->escape_string($_POST['history']);

  $query ="INSERT INTO patient (PID,fname,lname,gender,age,phone,email,village,District,Dept,accontType,served_by,date,status,Diagonosis,weight,pcomplaint,Mhistory) 
  values('$input[0]','$input[2]','$input[3]','$input[5]','$input[4]','$input[6]','$input[7]','$input[8]','$input[9]','$input[10]','$input[1]','$input[12]','$input[13]','$input[11]','','$input[14]','$input[15]','$input[16]')";
  $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

//       //notify use
   if($insert_row>0){
     $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
                 <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        <p>Patient has been added.</p>
                </div>";
       
   }else{
       $msg = "  <div class=\"btn btn-danger pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" id = \"msg\">
                 
             <p>Please try again</p>
   
   
                </div>";
               } 
    }    
 


//adding a new patient update_patient
if (isset($_POST['add_patient_all'])){
  $input = array();
  $input[0] = $mysqli->escape_string($_POST['patient_id']);
  $input[1] = $mysqli->escape_string($_POST['acount_type']);
  $input[2] = $mysqli->escape_string(ucfirst($_POST['fname']));
  $input[3] = $mysqli->escape_string(ucfirst($_POST['lname']));
  $input[4] = $mysqli->escape_string($_POST['age']);
  $input[5] = $mysqli->escape_string($_POST['Gender']);
  $input[6] = $mysqli->escape_string($_POST['phone']);
  $input[7] = $mysqli->escape_string($_POST['email']);
  $input[8] = $mysqli->escape_string(ucfirst($_POST['village']));
  $input[9] = $mysqli->escape_string(ucfirst($_POST['district']));
  //$input[10] = $mysqli->escape_string(ucfirst($_POST['deptment']));
  $input[11] = "Pending";
  $input[12] = $mysqli->escape_string(ucfirst($_POST['served_by']));
  $input[13] = $mysqli->escape_string($_POST['date']);

  //inserting the reques(tests)
  //Doctor_request($input[0]);
  
     $list = array();
  // Check if any option is selected 
  if(isset($_POST["deptment"]))  
  { 
      // Retrieving each selected option 
      foreach ($_POST['deptment'] as $subject)  
      $list[] = $subject;    
  }
  
  $input[10] = implode( ", ", $list );
  $query ="INSERT INTO patient (PID,fname,lname,gender,age,phone,email,village,District,Dept,accontType,served_by,date,status,Diagonosis,weight) 
  values('$input[0]','$input[2]','$input[3]','$input[5]','$input[4]','$input[6]','$input[7]','$input[8]','$input[9]','$input[10]','$input[1]','$input[12]','$input[13]','$input[11]','','')";
  $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

  Next_kin($input[0]);
//       //notify use
   if($insert_row){
     $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
                 <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        <p>Patient has been added.</p>
                </div>";
       
   }else{
       $msg = "  <div class=\"btn btn-danger pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" id = \"msg\">
                 
             <p>Please try again</p>
   
   
                </div>";
               } 
             }    
 
  //updating a patient 
if (isset($_POST['update_patient'])){ 
  Update_Patient();
 }


 //self Request Patients
 if (isset($_POST['add_self_req'])){
  $input = array();
  $input[0] = $mysqli->escape_string($_POST['patient_id']);
  $input[1] = $mysqli->escape_string('');
  $input[2] = $mysqli->escape_string(ucfirst($_POST['fname']));
  $input[3] = $mysqli->escape_string(ucfirst($_POST['lname']));
  $input[4] = $mysqli->escape_string($_POST['age']);
  $input[5] = $mysqli->escape_string('');
  $input[6] = $mysqli->escape_string($_POST['phone']);
  $input[7] = $mysqli->escape_string('');
  $input[8] = $mysqli->escape_string(ucfirst(''));
  $input[9] = $mysqli->escape_string(ucfirst(''));

  //Doctor_prescribe($input[0]);
  //Next_kin($input[0]);
     $list = array();
  // Check if any option is selected 
  if(isset($_POST["deptment"]))  
  { 
      // Retrieving each selected option 
      foreach ($_POST['deptment'] as $subject)  
      $list[] = $subject;    
  }  
 
  $input[10] = implode( ", ", $list );
  $input[11] = "Selfrequest";
  $input[12] = $mysqli->escape_string(ucfirst($_POST['served_by']));
  $input[13] = $mysqli->escape_string($_POST['date']);
  $input[14] = $mysqli->escape_string('');
  $input[15] = $mysqli->escape_string('');
  $input[16] = $mysqli->escape_string('');

  $query ="INSERT INTO patient (PID,fname,lname,gender,age,phone,email,village,District,Dept,accontType,served_by,date,status,Diagonosis,weight,pcomplaint,Mhistory) 
  values('$input[0]','$input[2]','$input[3]','$input[5]','$input[4]','$input[6]','$input[7]','$input[8]','$input[9]','$input[10]','$input[1]','$input[12]','$input[13]','$input[11]','','$input[14]','$input[15]','$input[16]')";
  $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

  //inserting the reques(tests)
  Doctor_request($input[0]);
  
 //make payments
  Buyselfrequest();
  Notification();
//        
 }  
 
 
//function buycart self request
function Buyselfrequest(){
  //Get Post variables and placing them in an array
  require "../configs/database.php";
  $input = array();
  $input[0] = "M/".mt_rand(0,10000);
  $input[1] = $mysqli->escape_string($_POST['total']);
  $input[2] = $mysqli->escape_string($_POST['served_by']);
  $input[3] = "Self Request";
  $input[4] = $mysqli->escape_string($_POST['date']);
  $input[5] = $mysqli->escape_string($_POST['cash']);
  $input[6] = $mysqli->escape_string($_POST['debt']);
  $input[7] = $mysqli->escape_string($_POST['balance']);
  $_SESSION['sales_id'] = $input[0];


  if($input[5] !== '' && is_numeric($input[5])){  

  for($i=0;$i<count($_POST['slno']);$i++){
    $title = $mysqli->escape_string($_POST['title'][$i]);
    $unitprice = $mysqli->escape_string($_POST['unitprice'][$i]);
    $quantity = $mysqli->escape_string($_POST['quantity'][$i]);
    $price = $quantity *  $unitprice;
  
    $sql="INSERT INTO items_sold(SID,Item,Unit_price,Quantity,Price)
    VALUES('$input[0]','$title','$unitprice','$quantity','$price')";
    $mysqli->query($sql) or die ($mysqli->error.__LINE__);
     
    // //reducing stock
    // $sql2="UPDATE medicines SET Total_number_o_units = Total_number_o_units - $quantity WHERE medicine_name = '$title'";
    // $update_row =$mysqli->query($sql2) or die ($mysqli->error.__LINE__);

}//end loop

// $msg = " <div class=\"btn btn-danger pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
//     <p>Please Enter the Amount given</p>
//                </div>"; 

}else{

// echo '<div class="alert alert-danger" role="alert">Error Submitting in Data</div>';
}

  $query ="INSERT INTO sales (SID,Amount,made_by,Date,Dept,cash,Debt,Balance) 
  values('$input[0]','$input[1]','$input[2]','$input[4]','$input[3]','$input[5]','$input[6]','$input[7]')";
  $mysqli->query($query) or die ($mysqli->error.__LINE__);

}


//notification
function Notification(){
  
    $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
    <p>Payment has been recorded. You may  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
    Click here to Print
  </button></p>
               </div>";
  return $msg;

}

//function tests to be made
function test_requested($PatientID){
  require "../configs/database.php";
  $n=1;
  $sql = "SELECT Servicename,test_status FROM tests WHERE PID = '$PatientID' AND test_status = 'Test complet'";
  $result = $mysqli->query($sql);
  if($result->num_rows > 0){
  while($row = $result->fetch_array()){
      ?>
<tr>
                    <td><?php echo $n;?></td>
                    <td style = "display:none;"><input type = "text" name= "serv_name" id = "serv_name"><?php echo $row['Servicename'];?></td>
                    <td><?php echo $row['Servicename'];?></td>
                    <td><?php echo $row['test_status'];?></td>
                    <td><?php  echo "<a href =\"#\"  id = \'remove\' onclick=\"removeFromcart2();\" class='badge badge-danger'>EDIT</a>";?></td>
                    <td><!-- Grid row -->
                  </tr>
<?php $n++; }}
         
}


          //lab report 
if (isset($_POST['lab_report'])){
     //Get Post variables and placing them in an array     
     $input = array();
     $input[0] = "";
     $input[1] = $mysqli->escape_string($_POST['patient_id']);
     $input[2] = $mysqli->escape_string($_POST['param']);
     $input[5] = $mysqli->escape_string($_POST['specimen_1']);
     $input[13] = $mysqli->escape_string($_POST['served_by']);
     $input[14] = $mysqli->escape_string($_POST['date']);
     $input[15] = "Test complet";
     $input[16] = $mysqli->escape_string($_POST['Diagonosis']);
     $input[17] = $mysqli->escape_string($_POST['Test_1']);
     $_SESSION['has_param']=True;
     //when test has parameters
     if(empty($_POST['Test_1_no'])){    
      for($i=0;$i<count($_POST['slno']);$i++){
          $profile = $_POST['profile'][$i];
          $results = $_POST['results'][$i];
          $flag = $_POST['flag'][$i];
          $Units = $_POST['Units'][$i];
          $Lower_Limit = $_POST['Lower_Limit'][$i];
          $Upper_Limit = $_POST['Upper_Limit'][$i];
          if($results !== '' && $flag !==''){
          $sql="INSERT INTO labtests(PID,D1,specimen_1,Result,served_by,date,Profile,value,flag,Units,Lower_Limit,Upper_Limit)
          VALUES('$input[1]','$input[2]','$input[5]','$input[17]','$input[13]','$input[14]','$profile','$results','$flag','$Units','$Lower_Limit','$Upper_Limit')";
          $insert_row =$mysqli->query($sql) or die ($mysqli->error.__LINE__);
            //  echo '<div class="alert alert-success" role="alert">Submitted Successfully</div>';
          }
      }//end loop

    //  $input[17] = $mysqli->escape_string($_POST['Test_1_no']);
      $sql="INSERT INTO labtests(PID,D1,specimen_1,Result,served_by,date,Profile,value,flag,Units,Lower_Limit,Upper_Limit)
      VALUES('$input[1]','$input[2]','$input[5]','$input[17]','$input[13]','$input[14]','NILL','NILL','NILL','NILL','NILL','NILL')";
      $insert_row =$mysqli->query($sql) or die ($mysqli->error.__LINE__);
     

    }else{
      $input[17] = $mysqli->escape_string($_POST['Test_1_no']);
      $sql="INSERT INTO labtests(PID,D1,specimen_1,Result,served_by,date,Profile,value,flag,Units,Lower_Limit,Upper_Limit)
      VALUES('$input[1]','$input[2]','$input[5]','$input[17]','$input[13]','$input[14]','NILL','NILL','NILL','NILL','NILL','NILL')";
      $insert_row =$mysqli->query($sql) or die ($mysqli->error.__LINE__);
     

      //notify user
      $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
      <p> Test resuted have been submited to doctor.</p>
                 </div>";  

    }//end of has params

      $query="UPDATE patient SET status = '$input[15]' 
      WHERE PID = '$input[1]'";
      $updater_patient=$mysqli->query($query) or die ($mysqli->error.__LINE__);
      
      $dateCompleted = $mysqli->escape_string(date('d/M/Y')." ".date("h:i:sa"));
      $query="UPDATE tests SET test_status = '$input[15]',Completion_date = '$dateCompleted' 
      WHERE PID = '$input[1]' AND Servicename = '$input[2]'";
      $updater_test=$mysqli->query($query) or die ($mysqli->error.__LINE__);
    
    }//end of lab report


        //treatment. 
if (isset($_POST['isue_medicine'])){
    //Get Post variables and placing them in an array
    $input = array();
    $input[0] = $mysqli->escape_string($_POST['names']);
    $input[1] = $mysqli->escape_string($_POST['patient_id']);
    $input[2] = $mysqli->escape_string($_POST['treatment']);
    $input[3] = $mysqli->escape_string($_POST['type']);
    $input[4] = $mysqli->escape_string($_POST['tabs']);
    $input[5] = $mysqli->escape_string($_POST['times_day']);
    $input[6] = $mysqli->escape_string($_POST['date']);
    $input[7] = $mysqli->escape_string($_POST['served_by']);    
    $input[8] = "NOT PAID";
    $input[9] = "Waiting for Accounts";
    $input[10] = $mysqli->escape_string($_POST['number_day']);
 
    $query ="INSERT INTO treatment (PID,Names,Treatment,Type,Tabs,Times_per_day,Served_by,dates,status,Doctors_comment,Number_o_days) 
   values('$input[1]','$input[0]','$input[2]','$input[3]','$input[4]','$input[5]','$input[7]','$input[6]','$input[8]','','$input[10]')";
   $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

   //reducing stock
   $quantity = $input[4] * $input[5];
   $sql2="UPDATE medicines SET Total_number_o_units = Total_number_o_units - $quantity WHERE medicine_name = '$input[2]'";
   $update_row =$mysqli->query($sql2) or die ($mysqli->error.__LINE__);
     if(($insert_row > 1)){
       $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
       <p>Item has been added</p>
                  </div>";
         
     }else{
      // header( "refresh:6;url=http://127.0.0.1/App/staff/modules/Testreuslt_waiting.php" );
       $query="UPDATE patient SET status = '$input[9]' 
    WHERE PID = '$input[1]'";
    $updater_patient=$mysqli->query($query) or die ($mysqli->error.__LINE__);


       $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
       <p>Item has been removed.</p>
                  </div>";
               } 


}

if(isset($_POST['add_comment'])){
  $input = array();
  $input[0] = $mysqli->escape_string($_POST['comment']);
  $input[2] = $mysqli->escape_string($_POST['reviewdate']);

  $query="UPDATE treatment SET Doctors_comment = '$input[0]' 
    WHERE PID = '{$_SESSION['patient_id']}' AND status = 'NOT PAID'";
    $updater_patient=$mysqli->query($query) or die ($mysqli->error.__LINE__);

    //set diagonisis 
    
    //seting review date
    $query="UPDATE medical_history SET Review_date = '$input[2]' 
    WHERE PID = '{$_SESSION['patient_id']}'";
    $updater_patient=$mysqli->query($query) or die ($mysqli->error.__LINE__);

    $query="UPDATE patient SET status = 'Waiting for Accounts' 
    WHERE PID = '{$_SESSION['patient_id']}'";
    $updater_patient=$mysqli->query($query) or die ($mysqli->error.__LINE__);

     Diagonosis_prescription($_SESSION['patient_id']);
     header( "refresh:3;url=http://192.168.0.11/HMS/staff/modules/departments" );
    
    $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
    <p>Payment made. <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#general_receipt\">
    Print General Reciept
  </button>
              </p>
              </div>";
            } 





    //paharmacy sending to accounts
    if (isset($_POST['send_to_accounts'])){   
        //Get Post variables and placing them in an array
        $input = array();
        $input[0] = $mysqli->escape_string($_POST['patient_id']);
        $input[1] = $mysqli->escape_string($_POST['served_by']);
        $input[2] = $mysqli->escape_string($_POST['date']);
        if($_SESSION['balance']!=0){
          $input[3] = "Cleared";
        }else{
          $input[3] = "Deposted";
        }
        
       
        
         $query="UPDATE patient SET served_by = '$input[1]',date = '$input[2]',status = '$input[3]'
         WHERE PID = '$input[0]'";
         $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
         
         //notify use
         if($insert_row > 1){
           $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
                              <p>Patient's data has been updated, Please send Him to accounts.</p>
                      </div>";
             
         }else{
            $query="UPDATE patient SET served_by = '$input[1]',date = '$input[2]',status = '$input[3]'
            WHERE PID = '$input[0]'";
            $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
            
           //header( "refresh:6;url=http://127.0.0.1/App/staff/modules/pharmarcy_waiting.php" );
   
             $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" id = \"msg\">
                       
             <p>Patient's data has been updated, Please send to accounts.</p>
         
         
                      </div>";
                     }  
   
       
             }
             
       //making payments
    if (isset($_POST['Make_payments'])){   
        //Get Post variables and placing them in an array
        $input = array();
        $input[0] = $mysqli->escape_string($_POST['patient_id']);
      //$input[1] = $mysqli->escape_string($_POST['names']);
        $input[2] = $mysqli->escape_string($_POST['cost']);
        $input[3] = $mysqli->escape_string($_POST['cash']);
        $input[4] = $mysqli->escape_string($_POST['balance']);
        $input[5] = $mysqli->escape_string($_POST['served_by']);
        $input[6] = $mysqli->escape_string($_POST['date']);

        //set payment session
        $_SESSION['amountbilled'] = $input[2];;
         
           //UPDATE PATIENT STATUS
           $query="UPDATE treatment SET status = 'PAID'
           WHERE PID = '$input[0]'";
           $update_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
 
           if($input[2]-$input[3] != 0){
           $query="UPDATE patient SET status = 'Deposted',Dept = 'Pharmacy'
           WHERE PID = '$input[0]'";
           $update_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
          }else{
            $query="UPDATE patient SET status = 'Cleared',Dept = 'Pharmacy'
            WHERE PID = '$input[0]'";
            $update_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
          }
           
        $query ="INSERT INTO records (patient_id,total_cost,blance,served_by,date) 
        values('$input[0]','$input[2]','$input[4]','$input[5]','$input[6]')";
        $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

        $checkpatient ="SELECT patient_id FROM records WHERE patient_id = '$input[0]'";
        $check = $mysqli->query($checkpatient) or die ($mysqli->error.__LINE__);
        if($check){
            $checkquery = "UPDATE records SET total_cost = '$input[2]', blance = '$input[4]',served_by = '$input[5]',date = '$input[6]' WHERE patient_id = '$input[0]'"; 
            $check_row = $mysqli->query($checkquery) or die ($mysqli->error.__LINE__);
            if(($check_row)){
                $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
                <p>Payment made. <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#general_receipt\">
                Print General Reciept
              </button>
                          </p>
                          </div>
                          ";
                  
              }
        }else{

     

        
     
          if(($insert_row > 1)){
            $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
            <p>Payment Saved.</p>
                       </div>";
              
          }else{
            $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
            <p>No payment has been recorded.</p>
                       </div>";
          }
        }
       
        }
        
        //clearing dabt
    if (isset($_POST['clear_dabt'])){   
        //Get Post variables and placing them in an array
        $input = array();
        $input[0] = $mysqli->escape_string($_POST['amount_blance']);
        $dabtidpatient = $_SESSION['dbtid'];

        $query="UPDATE records SET blance = blance - '$input[0]'
         WHERE patient_id = '$dabtidpatient'";
         $update_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

         
        
     
          if(($update_row)){
            $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
            <p>$input[0] has been paid.</p>
                       </div>";
              
          }else{
            $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
            <p>No payment has been recorded.</p>
                       </div>";
          }
       
        }

        //add new service
    if (isset($_POST['add_service'])){   
      //Get Post variables and placing them in an array
      $input = array();
      $input[0] = $mysqli->escape_string($_POST['servicename']);
      $input[1] = $mysqli->escape_string($_POST['servicefee']);
      $input[2] = "S/".mt_rand(0,10000);
      $input[3] = $mysqli->escape_string($_POST['dept']);
     
      $query ="INSERT INTO services (SID,Servicename,Servicfee ,PID,Dept) 
        values('$input[2]','$input[0]','$input[1]','','$input[3]')";
       $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
      
   
        if(($insert_row)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>New service has been add.</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Some thing went wrong. Service not added</p>
                     </div>";
        }
     
      }

              //Delete Service
    if (isset($_POST['delete_service'])){   
      $input = array();
      $input[0] = $mysqli->escape_string($_POST['service']);
      
      $query ="DELETE FROM services WHERE SID = '$input[0]'";
       $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
      
   
        if(($insert_row)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p> service has been DELETED.</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Some thing went wrong. Service not added</p>
                     </div>";
        }
     
      }

        //Delete medicine
    if(isset($_GET['delete_service'])){   
      $input = array();
      $input[0] = $mysqli->escape_string($_GET['delete_service']);
      $input[1] = $mysqli->escape_string($_GET['total_medical']);
      
      $query ="DELETE FROM treatment WHERE Treatment = '$input[0]' AND PID = '{$_SESSION['patient_id']}'";
      $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);

      //update medicine
      $sql2="UPDATE medicines SET Total_number_o_units = Total_number_o_units + $input[1]  WHERE medicine_name = '$input[0]'";
      $update_row =$mysqli->query($sql2) or die ($mysqli->error.__LINE__);
    
    }   
       
    //Update Service
    if (isset($_POST['update_service'])){   
      $input = array();
      $input[0] = $mysqli->escape_string($_POST['serviceid']);
      $input[1] = $mysqli->escape_string($_POST['servicename']);
      $input[2] = $mysqli->escape_string($_POST['servicefee']);
      
      $query ="UPDATE services SET Servicename = '$input[1]', Servicfee = '$input[2]' WHERE SID = '$input[0]'";
       $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
      
   
        if(($insert_row)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p> service has been Updated.</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Some thing went wrong. Service not added</p>
                     </div>";
        }
     
      }

      //Update Users
    if (isset($_POST['update_users'])){   
      $input = array();
      $input[0] = $mysqli->escape_string($_POST['email']);
      $input[1] = $mysqli->escape_string($_POST['role']);
      
      $query ="UPDATE accounts SET status = '$input[1]' WHERE email = '$input[0]'";
       $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
      
   
        if(($insert_row)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p> User role has been Updated.</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Some thing went wrong. user  not updated</p>
                     </div>";
        }
     
      }

      //Delete Users
    if (isset($_POST['delete_user'])){   
      $input = array();
      $input[0] = $mysqli->escape_string($_POST['email']);
      
      $query ="DELETE FROM accounts WHERE email = '$input[0]'";
       $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
      
   
        if(($insert_row)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p> account has been deleted has been DELETED.</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Some thing went wrong. Account not deleted</p>
                     </div>";
        }
     
      }

              //add new service
    if (isset($_POST['add_user'])){   
      //Get Post variables and placing them in an array
      $input = array();
      $input[0] = $mysqli->escape_string($_POST['first_name']);
      $input[1] = $mysqli->escape_string($_POST['last_name']);
      $input[2] = $mysqli->escape_string($_POST['email']);
      $input[3] = $mysqli->escape_string($_POST['password']);
      $input[4] = $mysqli->escape_string($_POST['role']);
     
      $query ="INSERT INTO accounts (firstname,lastname,telphone,password,email,status,hash) 
        values('$input[0]','$input[1]','','$input[3]','$input[2]','$input[4]','')";
       $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
      
   
        if(($insert_row)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>New user  has been added. Please share the password with the user</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Some thing went wrong. user not added</p>
                     </div>";
        }
     
      }

      //for adding  new stolk
    if (isset($_POST['add_Stock'])){   
      //Get Post variables and placing them in an array
      $input = array();
      $input[0] = $mysqli->escape_string($_POST['medicinename']);
      $input[1] = $mysqli->escape_string($_POST['mfgdt']);
      $input[2] = "M/".mt_rand(0,10000);
      $input[3] = $mysqli->escape_string($_POST['expdt']);
      $input[4] = $mysqli->escape_string($_POST['nob']);
      $input[5] = $mysqli->escape_string($_POST['nop']);
      $input[6] = $mysqli->escape_string($_POST['number_tabs']);
      $input[7] = $mysqli->escape_string($_POST['form']);
      $input[8] = $mysqli->escape_string($_POST['buying_price']);
      $input[9] = $mysqli->escape_string($_POST['selling_price']);
      $input[10] = $mysqli->escape_string($_POST['unitcost']);
      $input[11] = $input[4] * $input[5] * $input[6];
      
     
      $query ="INSERT INTO medicines (MID,medicine_name ,man_date,exp_date,nob,nop,number_tabs,medicine_type,buying_price,selling_price,unit_cost,Total_number_o_units) 
        values('$input[2]','$input[0]','$input[1]','$input[3]','$input[4]','$input[5]','$input[6]','$input[7]','$input[8]','$input[9]','$input[10]','$input[11]')";
       $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
      
   
        if(($insert_row)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>New service has been add.</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Some thing went wrong. Service not added</p>
                     </div>";
        }
     
      }

              //Delete Service
    if (isset($_POST['delete_medicine'])){   
      $input = array();
      $input[0] = $mysqli->escape_string($_POST['service']);
      
      $query ="DELETE FROM medicines WHERE MID = '$input[0]'";
       $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
      
   
        if(($insert_row)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p> service has been DELETED.</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Some thing went wrong. Service not added</p>
                     </div>";
        }
     
      }
       
    //Update Service
    if (isset($_POST['update_medicine'])){   
      $input = array();
      $input[12] = $mysqli->escape_string($_POST['medicinename']);
      $input[1] = $mysqli->escape_string($_POST['mfgdt']);
      $input[0] = $mysqli->escape_string($_POST['serviceid']);
      $input[3] = $mysqli->escape_string($_POST['expdt']);
      $input[4] = $mysqli->escape_string($_POST['nob']);
      $input[5] = $mysqli->escape_string($_POST['nop']);
      $input[6] = $mysqli->escape_string($_POST['number_tabs']);
      $input[7] = $mysqli->escape_string($_POST['form']);
      $input[8] = $mysqli->escape_string($_POST['buying_price']);
      $input[9] = $mysqli->escape_string($_POST['selling_price']);
      $input[10] = $mysqli->escape_string($_POST['unitcost']);
      $input[11] = $input[4] * $input[5] * $input[6];
      
      $query ="UPDATE medicines SET medicine_name = '$input[12]', man_date  = '$input[2]',man_date = '$input[1]',	exp_date = '$input[3]',	nob = '$input[4]',	nop = '$input[5]',	number_tabs = '$input[6]',medicine_type = '$input[7]',	buying_price = '$input[8]',	selling_price = '$input[9]',	unit_cost = '$input[10]',Total_number_o_units='$input[11]' WHERE MID = '$input[0]'";
       $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
      
   
        if(($insert_row)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p> service has been Updated.</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Some thing went wrong. Service not added</p>
                     </div>";
        }
     
      }

      //buying from pharma(OPD)
      //making payments
    if (isset($_POST['perchase'])){   
      //Get Post variables and placing them in an array
      $input = array();
      $input[0] = "M/".mt_rand(0,10000);
      $input[1] = $mysqli->escape_string($_POST['total']);
      $input[2] = $mysqli->escape_string($_POST['served_by']);
      $input[3] = "OPD pharmacy";
      $input[4] = $mysqli->escape_string($_POST['date']);
      $input[5] = $mysqli->escape_string($_POST['cash']);
      $input[6] = $mysqli->escape_string($_POST['debt']);
      $input[7] = $mysqli->escape_string($_POST['balance']);
      $_SESSION['sales_id'] = $input[0];


      if($input[5] !== '' && is_numeric($input[5])){  

      for($i=0;$i<count($_POST['slno']);$i++){
        $title = $mysqli->escape_string($_POST['title'][$i]);
        $unitprice = $mysqli->escape_string($_POST['unitprice'][$i]);
        $quantity = $mysqli->escape_string($_POST['quantity'][$i]);
        $price = $quantity *  $unitprice;
      
        $sql="INSERT INTO items_sold(SID,Item,Unit_price,Quantity,Price)
        VALUES('$input[0]','$title','$unitprice','$quantity','$price')";
        $insert_row =$mysqli->query($sql) or die ($mysqli->error.__LINE__);

        //reducing stock
        $sql2="UPDATE medicines SET Total_number_o_units = Total_number_o_units - $quantity WHERE medicine_name = '$title'";
        $update_row =$mysqli->query($sql2) or die ($mysqli->error.__LINE__);

    }//end loop

    $msg = " <div class=\"btn btn-danger pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
        <p>Please Enter the Amount given</p>
                   </div>"; 

  }else{
    
    // echo '<div class="alert alert-danger" role="alert">Error Submitting in Data</div>';
   }

      $query ="INSERT INTO sales (SID,Amount,made_by,Date,Dept,cash,Debt,Balance) 
      values('$input[0]','$input[1]','$input[2]','$input[4]','$input[3]','$input[5]','$input[6]','$input[7]')";
      $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
   
        if(($insert_row < 1)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Payment Saved.</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Payment has been recorded. You may  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
          Click here to Print
        </button></p>
                     </div>";
        }
      }

      //Adding Lab Parameters
      //add new service
    if (isset($_POST['add_paraters'])){   
      //Get Post variables and placing them in an array
      $input = array();
      $input[0] = $mysqli->escape_string($_POST['profile']);
      $input[1] = $mysqli->escape_string($_POST['units']);
      $input[2] = $mysqli->escape_string($_POST['serviceid']);
      $input[3] = $mysqli->escape_string($_POST['lower_limit']);
      $input[4] = $mysqli->escape_string($_POST['upper_limit']);
      $input[5] = $mysqli->escape_string($_POST['servicename']);
     
      $query ="INSERT INTO parameters (SID,Profile,Units,Lower_Limit,Upper_Limit,servicename) 
        values('$input[2]','$input[0]','$input[1]','$input[3]','$input[4]','$input[5]')";
       $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
   
        if(($insert_row)){
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>New Parameter has been set.</p>
                     </div>";
            
        }else{
          $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
          <p>Some thing went wrong. Parameter not set</p>
                     </div>";
        }
     
      }

      //functions(calcuting age)
      function Agecalc($dateOfBirth){
        if(($dateOfBirth=='Adult') OR ($dateOfBirth=='Young')){
          return $dateOfBirth;
        }else{
          $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
          return $diff->format('%y');
        }

    }


    
      //functions(calcuting daily income)
      function dailyIncome($datetoDay){
        require "../configs/database.php";
        $sumAmount ="SELECT SUM(cash) AS DailySales FROM sales WHERE Date LIKE '$datetoDay'";
        $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
        $row = mysqli_fetch_assoc($result); 
        $sum = $row['DailySales'];
        return  $sum;
        
      }
    
            //functions(calcuting daily income)
            function dailyOPD($datetoDay){
              require "../configs/database.php";
              $sumAmount ="SELECT SUM(cash) AS DailySales FROM sales WHERE Date LIKE '$datetoDay' AND Dept = 'OPD pharmacy'";
              $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
              $row = mysqli_fetch_assoc($result); 
              $sum = $row['DailySales'];
              return  $sum;
              
            }

            //functions(calcuting daily income fon inpatients)
            function dailyINPATIENTS($datetoDay){
              require "../configs/database.php";
              $sumAmount ="SELECT SUM(total_cost) AS DailySales FROM records WHERE Date LIKE '$datetoDay'";
              $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
              $row = mysqli_fetch_assoc($result); 
              $sum = $row['DailySales'];
              return  $sum;
              
            }

                        //functions(calcuting daily number of patients)
                        function dailypatients($datetoDay){
                          require "../configs/database.php";
                          $sumAmount ="SELECT COUNT(*) AS DailyPatients FROM patient WHERE Date LIKE '$datetoDay'";
                          $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
                          $row = mysqli_fetch_assoc($result); 
                          $sum = $row['DailyPatients'];
                          return  $sum;
                          
                        }

                        //functions(calcuting daily expenditures)
                        function dailyExpenditure($datetoDay){
                          require "../configs/database.php";
                          $sumAmount ="SELECT SUM(Amount) AS DailyExpences FROM expenses WHERE man_date LIKE '$datetoDay'";
                          $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
                          $row = mysqli_fetch_assoc($result); 
                          $sum = $row['DailyExpences'];
                          if(!empty($sum)){
                          return  $sum;
                        }else{
                          return  0;
                        }
                          
                      }

                        //functions(calcuting daily expenditures)
                        function dailyUtilities($datetoDay){
                          require "../configs/database.php";
                          $sumAmount ="SELECT SUM(Amount) AS DailyExpences FROM expenses WHERE man_date LIKE '$datetoDay' AND type = 'Utilities'";
                          $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
                          $row = mysqli_fetch_assoc($result); 
                          $sum = $row['DailyExpences'];
                          if(!empty($sum)){
                          return  $sum;
                        }else{
                          return  0;
                        }
                          
                      }

                       //functions(calcuting daily other expenditures)
                       function dailyOther($datetoDay){
                        require "../configs/database.php";
                        $sumAmount ="SELECT SUM(Amount) AS DailyExpences FROM expenses WHERE man_date LIKE '$datetoDay' AND type = 'Other'";
                        $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
                        $row = mysqli_fetch_assoc($result); 
                        $sum = $row['DailyExpences'];
                        if(!empty($sum)){
                        return  $sum;
                      }else{
                        return  0;
                      }
                        
                    }

                     //functions(calcuting daily Assets expenditures)
                     function dailyAsset($datetoDay){
                      require "../configs/database.php";
                      $sumAmount ="SELECT SUM(Amount) AS DailyExpences FROM expenses WHERE man_date LIKE '$datetoDay' AND type = 'Assert'";
                      $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
                      $row = mysqli_fetch_assoc($result); 
                      $sum = $row['DailyExpences'];
                      if(!empty($sum)){
                      return  $sum;
                    }else{
                      return  0;
                    }
                      
                  }
     
                  //functions(calcuting daily Assets expenditures)
                  function dailyRent($datetoDay){
                    require "../configs/database.php";
                    $sumAmount ="SELECT SUM(Amount) AS DailyExpences FROM expenses WHERE man_date LIKE '$datetoDay' AND type = 'Rent'";
                    $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['DailyExpences'];
                    if(!empty($sum)){
                    return  $sum;
                  }else{
                    return  0;
                  }
                    
                }

                //Function to calculate balsnce
                      //functions(calcuting daily income)
      function balanceIncome($PatientID){
        require "../configs/database.php";
        $n=1;
        $sql = "SELECT sum(blance) blance,total_cost,date from records where patient_id = '$PatientID' AND blance != total_cost";
        $result = $mysqli->query($sql);
        if($result->num_rows > 0){
        while($row2 = $result->fetch_array()){
            ?>
<p><b>Total Debt:</b> <span
        id="tostalfees"></span><?php $_SESSION['debt']=abs($row2['blance']); echo(abs($row2['blance']));?>/=</p>
<p><b>Last visit:</b> <span id="tostalfees"></span><?php echo $row2['date']?></p>

<?php $n++; }}
               
      }


      //function print receipt
      function printReciept($PatientID){
        require "../configs/database.php";      
       
        $n=1;
        $sql = "SELECT blance,total_cost,date from records where patient_id = '$PatientID' ORDER BY date DESC LIMIT 1";
        $result = $mysqli->query($sql);
        if($result->num_rows > 0){
        while($row2 = $result->fetch_array()){
                        ?><P><b>Receved from</b>:<?php echo $_SESSION['print_name']; ?> &emsp;<b>Patient
                        Id</b>:<?php echo $_SESSION['print_id']; ?>&emsp;<b>Date</b>:<?php echo date('d/m/Y');?>
                        <P hidden><?php include('pound.php');?></P>
                </P><br>
                <p><b>Amount
                        Billed</b>:<?php $_SESSION['amountbilled'] = $row2['total_cost']; echo $_SESSION['amountbilled'];?>
                </p>
                <p><b>Amount Billed in words</b>:<?php echo ucfirst($obj->words);?></p>
                <p><b>Amount
                        Paid</b>:<?php echo $_SESSION['amountbilled']-$_SESSION['debt'];?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>Balance</b>:<?php echo ($_SESSION['debt']);?>
                </p>";

            <?php $n++; }}
      }

//function for Requesting services by doctor to various deptment
function Doctor_request($PID){
  require "../configs/database.php";
   //Get Post variables and placing them in an array
   for($i=0;$i<count($_POST['slno']);$i++){
     $servicename = $mysqli->escape_string($_POST['title'][$i]);
     $unitprice = $mysqli->escape_string($_POST['unitprice'][$i]);
     $datetaken = $mysqli->escape_string(date('d/M/Y')." ".date("h:i:sa"));
     $patient_Id = $mysqli->escape_string($PID);
     

     $sql="INSERT INTO tests (Servicename,cost,PID,Type,date_rec,test_status,Completion_date) 
     values('$servicename','$unitprice','$patient_Id','Labtest','$datetaken','Pending','')";    
     $mysqli->query($sql) or die ($mysqli->error.__LINE__);

 }//end loop
}    

/*

Adding doctors priscription

*/
  function Doctor_prescribe($PID){
    require "../configs/database.php";
    //Get Post variables and placing them in an array
    $input = array();
    $input[0] = $mysqli->escape_string($PID);
    $input[1] = $mysqli->escape_string($_POST['physExam']);
    $input[2] = $mysqli->escape_string($_POST['Invesitigation']);
    $input[3] = $mysqli->escape_string($_POST['provisitiona_Diagonosis']);
    $input[4] = $mysqli->escape_string(''); 
    $input[5] = $mysqli->escape_string('');
    $input[6] = $mysqli->escape_string(date('d/M/Y')." ".date("h:i:sa"));
    $input[7] = $mysqli->escape_string($_POST['served_by']);
    $input[8] = $mysqli->escape_string($_POST['complaint']);
   
    $query ="INSERT INTO medicalexamination (PID,PhysicalExamin,Invesitigation,provisitiona_Diagonosis,Diagonosis,P_complaint,Prescription,served_by,date_rec) 
      values('$input[0]','$input[1]','$input[2]','$input[3]','','$input[8]','','$input[7]','$input[6]')";
     $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
  }

  //adding next of kin
  function Next_kin($PID){
    require "../configs/database.php";
    //Get Post variables and placing them in an array
    $input = array();
    $input[0] = $mysqli->escape_string($PID);
    $input[1] = $mysqli->escape_string($_POST['nextName']);
    $input[2] = $mysqli->escape_string($_POST['Relationship']);
    $input[3] = $mysqli->escape_string($_POST['Nextcontact']);
    $input[4] = $mysqli->escape_string(date('d/M/Y')." ".date("h:i:sa"));
   
    $query ="INSERT INTO next_of_kin(PID,Names,Relationship,contact,date_rec) 
      values('$input[0]','$input[1]','$input[2]','$input[3]','$input[4]')";
     $mysqli->query($query) or die ($mysqli->error.__LINE__);
  }

    //udate next of kin
    function Upadatekin($PID){
      require "../configs/database.php";
      //Get Post variables and placing them in an array
      $input = array();
      $input[0] = $mysqli->escape_string($PID);
      $input[1] = $mysqli->escape_string($_POST['nextName']);
      $input[2] = $mysqli->escape_string($_POST['Relationship']);
      $input[3] = $mysqli->escape_string($_POST['Nextcontact']);
      $input[4] = $mysqli->escape_string(date('d/M/Y')." ".date("h:i:sa"));
     
      $query ="UPDATE next_of_kin SET Names = '$input[1]',Relationship = '$input[2]',contact = '$input[3]',date_rec = '$input[4]' WHERE pid = '$input[0]'";
       $mysqli->query($query) or die ($mysqli->error.__LINE__);
    }

  //adding next of kin
  function Diagonosis_prescription($PID){
    require "../configs/database.php";
    //Get Post variables and placing them in an array
    $input = array();
    $input[0] = $mysqli->escape_string($PID);
    $input[1] = $mysqli->escape_string($_POST['Diagonisis']);
    $input[2] = $mysqli->escape_string($_POST['Mprescription']);
    $input[3] = $mysqli->escape_string(date('d/M/Y'));
   
    $query ="UPDATE medicalexamination SET Diagonosis = '$input[1]',Prescription = '$input[2]' WHERE PID = '$input[0]' AND date_rec LIKE '$input[3]%'";
    $mysqli->query($query) or die ($mysqli->error.__LINE__);
  }

  //fectching next of kin data
  //functions(calcuting daily Assets expenditures)
  function getNextkin($PID){
    require "../configs/database.php";
    $sumAmount ="SELECT * FROM next_of_kin WHERE PID = '$PID'";
    $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
    $row = mysqli_fetch_assoc($result); 
   return $row['Names'];
    
}


//functions(calcuting daily Assets expenditures)
function viewingDoctorsPrescriptio($PID){
  require "../configs/database.php";
  $sumAmount ="SELECT * FROM medicalexamination WHERE PID = '$PID'";
  $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
  $row = mysqli_fetch_assoc($result); 
 return $row['Prescription'];
  
}

function Update_Patient(){
  require "../configs/database.php";
  //Get Post variables and placing them in an array
  $input = array();
  $input[0] = $mysqli->escape_string($_POST['patient_id']);
  //$input[1] = $mysqli->escape_string($_POST['age']);
  $input[2] = $mysqli->escape_string($_POST['weight']);
  $input[3] = $mysqli->escape_string(ucfirst($_POST['fname']));
  $input[4] = $mysqli->escape_string(ucfirst($_POST['lname']));
  
          // Check if any option is selected 
        if(isset($_POST["deptment"]))  
        { 
          // Retrieving each selected option 
          foreach ($_POST['deptment'] as $subject)  
          $list[] = $subject;    
        }  

            $input[5] = implode( ", ", $list );
            
            //inserting the reques(tests)
            Doctor_request($input[0]);
            Doctor_prescribe($input[0]);
            Upadatekin($input[0]);

          //for patients history
              $input[7] = $mysqli->escape_string($_POST['date']);
        //  $input[8] = "Waiting for Lab Test";
          
          $query="UPDATE patient SET weight = '$input[2]',fname = '$input[3]',lname = '$input[4]' ,status = 'Pending',Dept  = '$input[5]'
          WHERE PID = '$input[0]'";
          $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

          if($insert_row>0){
            $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
            <p>Request has been submited successfully</p>
                      </div>";
          }else{
            $msg = "  <div class=\"btn btn-danger pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
              <p>Some thing went wrong. Request Not submited. Please try again</p>
                        </div>";
            }

   return $msg;
  
}


//workload for doctor
            //functions(calcuting daily income)
            function Doctors_workLoad(){
              require "../configs/database.php";
              $sumAmount ="SELECT COUNT(*) AS DoctorWorkLoad FROM patient WHERE Dept IN ('Doctor')";
              $result = $mysqli->query($sumAmount) or die ($mysqli->error.__LINE__);
              $row = mysqli_fetch_assoc($result); 
              $sum = $row['DoctorWorkLoad'];
              return  $sum;
              
            }


//adding an expense
if (isset($_POST['add_expense'])){   
  //Get Post variables and placing them in an array
  $input = array();
  $input[0] = $mysqli->escape_string($_POST['receiptNo']);
  $input[1] = $mysqli->escape_string($_POST['name']);
  $input[2] = $mysqli->escape_string($_POST['date']);
  $input[3] = $mysqli->escape_string($_POST['Description']);
  $input[4] = $mysqli->escape_string($_POST['type']);
  $input[5] = $mysqli->escape_string($_POST['amount']);
  
 
  $query ="INSERT INTO expenses (Receipt_No,name,man_date,Description,type,Amount) 
    values('$input[0]','$input[1]','$input[2]','$input[3]','$input[4]',$input[5])";
   $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
  

    if(($insert_row)){
      $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
      <p>New expense has been add.</p>
                 </div>";
        
    }else{
      $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
      <p>Some thing went wrong. expense not added</p>
                 </div>";
    }
 
  }

          //Delete Service
if (isset($_POST['delete_medicine'])){   
  $input = array();
  $input[0] = $mysqli->escape_string($_POST['service']);
  
  $query ="DELETE FROM medicines WHERE MID = '$input[0]'";
   $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);
  

    if(($insert_row)){
      $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
      <p> service has been DELETED.</p>
                 </div>";
        
    }else{
      $msg = "  <div class=\"btn btn-success pull-center m-l-20 hidden-xs hidden-sm waves-effect waves-light\" style = \"width:50%;\" id = \"msg\">
      <p>Some thing went wrong. Service not added</p>
                 </div>";
    }
 
  }
                         
  ?>
<?php if(empty($_SESSION['fname'])){
    header('Location:../../index');
    }

    ?>