<?php 
require('layout.php');
loginCheck();
?>
<?php
if(isset($_POST['submit']))
{
   $form_no=$_POST['form_no'];

   $sponser_id=$_POST['sponser_id'];
  $regi_amount=$_POST["payable"];
   $sponser_exist=$_POST['sponser_exist'];
   $branch_code=$_POST["branch_code"];
   $f_name=$_POST['f_name'];
   $m_name=$_POST['m_name'];
   $l_name=$_POST['l_name'];
   $father_name=$_POST['father_name'];
   $mob_no=$_POST['mob_no'];
   $gender=$_POST['gender'];
	$pan_no=$_POST['pan_no'];
   $dob=$_POST['dob'];
   $dob = date('Y/m/d',strtotime($dob));

   $m=mt_rand(1000, 9999);
	$user_id="Trd".$m;
		//$user_id=$_POST['user_id'];
   
   $email=$_POST['email'];
   $nationality=$_POST['nationality'];
   $address=$_POST['address'];
   $state_id=$_POST['state_id'];
   $city_id=$_POST['city_id'];
   $pin_code=$_POST['pin_code'];
  
   
   $bank_name=$_POST['bank_name'];
   $bank_account_no=$_POST['bank_account_no'];
   $bank_ifsc_code=$_POST['bank_ifsc_code'];
   $bank_branch=$_POST['bank_branch'];
   $bank_state_id=$_POST['bank_state_id'];
   if(isset($_POST['bank_city_id']))
   {
   $bank_city_id=$_POST['bank_city_id'];
   }
   else
   {
      $bank_city_id="";
   }
  
   $nominee_name=$_POST['nominee_name'];
   $nominee_relation=$_POST['nominee_relation'];
   $nominee_mob_no=$_POST['nominee_mob_no'];
   $nominee_address=$_POST['nominee_address'];
   $nominee_state_id=$_POST['nominee_state_id'];
   $nominee_city_id=$_POST['nominee_city_id'];
   $nominee_pin_code=$_POST['nominee_pin_code'];
   
   

   if($sponser_exist == 0)
   {
      echo "<script>alert('Sponser Id is not Correct');window.location='ajentJoining_add.php?join=not_match'; </script>";
   }
   if($sponser_exist == 1)
   {
   
		 
		  $pass_id=4;
		  $p_id=rand(pow(10, $pass_id-1), pow(10, $pass_id)-1);
		  $pass_id=$p_id;
		//$pass_id=$_POST['password'];
      $sql_insert="insert into ajent_joining (form_no,sponser_id,branch_code,f_name,m_name,l_name,father_name,mob_no,gender,dob,email,nationality,pan_no,user_id,password,address,state_id,city_id,pin_code,	bank_name,bank_account_no,bank_ifsc_code,bank_branch,bank_state_id,bank_city_id,nominee_name,nominee_relation,nominee_mob_no,nominee_address,nominee_state_id,nominee_city_id,nominee_pin_code,regi_amount,entry_time) values ('".$form_no."','".$sponser_id."','".$branch_code."','".$f_name."','".$m_name."','".$l_name."','".$father_name."','".$mob_no."','".$gender."','".$dob."','".$email."','".$nationality."','".$pan_no."','".$user_id."','".$pass_id."','".$address."','".$state_id."','".$city_id."','".$pin_code."','".$bank_name."','".$bank_account_no."','".$bank_ifsc_code."','".$bank_branch."','".$bank_state_id."','".$bank_city_id."','".$nominee_name."','".$nominee_relation."','".$nominee_mob_no."','".$nominee_address."','".$nominee_state_id."','".$nominee_city_id."','".$nominee_pin_code."','".$regi_amount."',now()) ";
           $query_staff=mysql_query($sql_insert) or die("error in joining insertion".mysql_error());
		   $sqllevel="select level from ajent_joining where sponser_id='".$sponser_id."'";
		   $queryLevel=mysql_query($sqllevel);
		   $countLevel=mysql_num_rows($queryLevel);
		   if($countLevel > 0){
		  
		   $sqlUp="update ajent_joining set level='".$countLevel."' where user_id='".$sponser_id."'";
		   $qUp=mysql_query($sqlUp);
		   
		    $sqllevel1="select level from ajent_joining where user_id='".$sponser_id."'";
		   $queryLevel1=mysql_query($sqllevel1);
		   $dataLevel=mysql_fetch_assoc($queryLevel1);
		   $level=$dataLevel["level"];
		   $levelCheck="update commission set commission_type='Payable' where user_id='".$sponser_id."' and level <='".$level."'";    
		   $queryLevelC=mysql_query($levelCheck);
		   
		   }
		   
		/*$sqlCmp="insert into company_creditor (credit,purpose,remark,discount,tax,tax_type,entry_time)values('".$regi_amount."','Associates Login Fee','joining time','0','NA','NA',now())";
		mysql_query($sqlCmp) or die("error in joining creditor".mysql_error());*/
		
	 // sms code here starts...!
           
	  $ID="triard";
    $senderid="TRIARD";
  // $name=$_POST['agent_name'];
	//$mobile=$_REQUEST['phone_no'];
	$msg = "Welcome Mr.".$f_name."\n";
		        $msg .= "Your Associate ID ".$user_id;
		        $msg .= " and Password ".$pass_id;
				$msg .= "and Sponser ID ".$sponser_id;
				$msg .= "Thanks being a part of Tri Agro and Realestate Development";
				$message=$msg;
				$message=urlencode($message);	 

   
$url="http://psms.onistech.com/submitsms.jsp?user=$ID&key=48e47c435cXX&mobile=$mob_no&senderid=$senderid&accusage=1&message=$message";

   

    //Use this code to Hide the response
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);
	// sms code eends here...!	

       echo "<script>window.location='ajentJoining_add.php?join=added&userid=$user_id'</script>";
	}
     else
          {
          echo "<script>window.location='ajentJoining_add.php?join=failed'</script>"; 
          }
    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ajent Joining Form</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <?php top_script()?>
 
  </head>
  <body class="skin-blue sidebar-mini">
  <div class="wrapper">
        <?php top_header();?>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
    
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php left_navigation();?>
      </section>
          <!-- /.sidebar -->
       </aside>
       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Ajent Joining Form 
         
          </h1>
          <ol class="breadcrumb">
            <li><a href="AdminPanel.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
             <li class="active">Ajent Joining Form </li>
          </ol>
        </section>
        <?php if((isset($_GET['join']))&&($_GET['join']=="added")){ 
		$user_id=$_GET["userid"];?>
      <div class="alert alert-success alert-dismissable">
        <h4>  <i class="icon fa fa-check"></i> Congratulation!</h4>
         Ajent (<?php echo $user_id;?>) Joining Done Successfully.
      </div>
      <?php }?> 
      <?php if((isset($_GET['join']))&&($_GET['join']=="duplicate")){ ?>
      <div class="alert alert-danger alert-dismissable">
        <h4>  <i class="icon fa fa-check"></i> Oops!</h4>
          Ajent Code already exist
      </div>
      <?php }?> 
       <?php if((isset($_GET['join']))&&($_GET['join']=="failed")){ ?>
      <div class="alert alert-danger alert-dismissable">
        <h4>  <i class="icon fa fa-check"></i> Oops!</h4>
         Action Failed
      </div>
      <?php }?> 
      <?php if((isset($_GET['join']))&&($_GET['join']=="not_match")){ ?>
      <div class="alert alert-danger alert-dismissable">
        <h4>  <i class="icon fa fa-check"></i> Oops!</h4>
         Sponser Id is Not Correct
      </div>
      <?php }?> 
       <?php
	     $sqlL1="select max(ajent_joining_id) as max from ajent_joining";
		  $q=mysql_query($sqlL1);
		  $rowid=mysql_fetch_assoc($q);
		  $form_no=$rowid["max"]+1;
	   ?>  


 <form method="POST"  action="" name="joining" onSubmit="return validate();">


        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-xs-6">
              <div class="box">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                 <div class="form-group">
                              <label>Amount have to Pay<span class="span_required">*</span></label>
                              <input type="text" class="form-control" id="payable" name="payable" value="0" readonly/> 
                           </div>

                           <div class="form-group">
                              <label> Sr. No. <span class="span_required">*</span></label>
                              <input type="text" class="form-control" id="form_no" name="form_no" value="<?php echo $form_no;?>" readonly/> 
                           </div>
							    <div class="form-group">
                                <label>Branch Name <span class="span_required">*</span></label>
                        <select class="form-control" name="branch_code" id="branch_code" onChange="getData('fetch_sponser_detail.php?&branch_code='+this.value,'sponser_detail_div');">
                        	<option value="0">Select Branch</option>
						  <?php 
									$sql1="select * from branch_registration";
									$query1=mysql_query($sql1);
									while($data1=mysql_fetch_array($query1)){
									$branch_code=$data1['branch_code'];
									$city_id=$data1['city'];
									$sql_city="select * from districts where district_id  ='".$city_id."'";
				  $query_city=mysql_query($sql_city);
				  $data_city=mysql_fetch_assoc($query_city);
				  $city=$data_city['districts'];
									?>
                           
                           <option value="<?php echo $branch_code;?>"><?php echo $branch_code."   ".$city;?></option>
									<?php }	?>
                          </select>
                      </div>
                           <div id="sponser_detail_div"></div>
                       
                     
<script>
$(#f_name).on('change',function() {

var value=$('#sponser_exist').val();
alert(value);
if(value==0){
alert("Sponser Id is not exist");
return false;
  }else{return};
});

</script>

<br>
                           <h4 class="box-title" style="text-align:center;"> Personal Detail</h4><br>

                           <div class="form-group">
                              <label for="exampleInputEmail1">Enter Name <span class="span_required">*</span></label><br>
                              <div class="col-xs-4">
                                
                                <input type="text" name="f_name" class="form-control" id="f_name" placeholder="First Name" required onKeyPress="return alphabetsonly();">
                              </div>
                              <div class="col-xs-4">
                               
                                <input type="text" name="m_name" class="form-control" id="m_name" placeholder="Middle Name" onKeyPress="return alphabetsonly();">
                              </div>
                              <div class="col-xs-4">
                                
                                <input type="text" name="l_name" class="form-control" id="l_name" placeholder="Last Name" onKeyPress="return alphabetsonly();">
                              </div>
                          </div><br><br>

                          <div class="form-group">
                              <label>Father/Mother/Husband Name<span class="span_required">*</span></label>
                              <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter Father Name" required onKeyPress="return alphabetsonly();"/> 
                           </div>

                           <div class="form-group">
                              <label> Mobile No <span class="span_required">*</span></label>
                              <input type="text" class="form-control" id="mob_no" name="mob_no" maxlength="10" placeholder="Enter Mobile No" pattern="[0-9]{10}" required onKeyPress="return phonenumbersonly();"/> 
                           </div>

                            <div class="form-group">
                              <label>Gender <span class="span_required">*</span></label><br>
                              <input type="radio" name="gender" value="male" checked> Male 
                              <input type="radio" name="gender" value="female"> Female
                           </div>

                          <div class="form-group">
                              <label> DOB <span class="span_required">*</span></label>
                              <div class="input-daterange" id="datepicker" >
                                <input type="text" class="form-control" id="dob" name="dob" placeholder="dd-mm-yyyy" required /> 
                              </div>
                          </div>

                          <div class="form-group">
                              <label> Email</label>
                              <input type="text" class="form-control" id="email" name="email" placeholder="Enter User Email"  pattern="[A-Za-z0-9_$.]{1,50}[@]{1}[A-Za-z]{1,30}[.]{1}[A-Za-z]{1,20}"/> 
                          </div>
                          <div class="form-group">
                              <label>Nationality</label>
                     <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter Pancard Number"  /> 
                           </div>
                          <div class="form-group">
                              <label> PANCARD No.</label>
                     <input type="text" class="form-control" id="pan_no" name="pan_no" placeholder="Enter Pancard Number"  /> 
                           </div>

                          <div class="form-group">
                              <label> User Id </label>
                              <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Automatically User ID" readonly/> 
                           </div>

                           <div class="form-group">
                              <label> Password </label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Automatically Password" readonly/> 
                           </div>

                           <div class="form-group">
                              <label> Address <span class="span_required">*</span></label>
                              <textarea name="address" class="form-control" required rows="5" ></textarea>
                           </div>

                           <div class="form-group">
                            <div class="col-xs-4">
                             <strong>State <span class="span_required">*</span></strong>
                              <select name="state_id" id="state_id" required class="form-control" onChange="getData('fetch_city.php?state_id='+this.value,'city_div');">
                                    <option value="">Select State</option>
                                    <?php
                                      $sql = "select * from states";
                                      $run = mysql_query($sql) or die("error in state fetch".mysql_error());
                                      while($data = mysql_fetch_array($run))
                                      {
                                        $state_id = $data['state_id'];
                                        $state_name = $data['state'];
                                    ?>
                                    <option value="<?php echo $state_id; ?>"><?php echo $state_name; ?></option>
                                <?php } ?>
                                </select>
                              </div>

                              <div class="col-xs-4">
                                <strong>City <span class="span_required">*</span></strong>
                                <div id = "city_div">
                                    <select name="city_id" id="city_id" class="form-control">
                                      <option value="">Select City</option>
                                    </select>
                                </div>
                              </div>

                              <div class="col-xs-4">
                                <strong>Pin Code </strong>
                                <input type="text" class="form-control" id="pin_code" name="pin_code" placeholder="Enter Pin Code" onKeyPress="return phonenumbersonly();" /> 
                              </div>
                            </div><br><br><br><br>                
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->

			<div class="col-xs-6" id="emi_detail_main">
              <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Bank Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                          <div class="form-group">
                              <label> Bank Name </label>
                              <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Enter Bank Name" onKeyPress="return alphabetsonly();" /> 
                           </div>

                           <div class="form-group">
                              <label> Account No </label>
                              <input type="text" class="form-control" id="bank_account_no" name="bank_account_no" placeholder="Enter Account No"  /> 
                           </div>

                           <div class="form-group">
                              <label> IFSC Code </label>
                              <input type="text" class="form-control" id="bank_ifsc_code" name="bank_ifsc_code" placeholder="Enter IFSC Code"  /> 
                           </div>

                           <div class="form-group">
                              <label> Branch </label>
                              <input type="text" class="form-control" id="bank_branch" name="bank_branch" placeholder="Enter Branch Name"  /> 
                           </div>

                           <div class="form-group">
                            <div class="col-xs-6">
                             <strong>State </strong>
                              <select name="bank_state_id" id="bank_state_id" class="form-control" onChange="getData('fetch_bank_city.php?state_id='+this.value,'bank_city_div');">
                                    <option value="">Select State</option>
                                    <?php
                                      $sql = "select * from states";
                                      $run = mysql_query($sql) or die("error in state fetch".mysql_error());
                                      while($data = mysql_fetch_array($run))
                                      {
                                         $state_id = $data['state_id'];
                                        $state_name = $data['state'];
                                    ?>
                                    <option value="<?php echo $state_id; ?>"><?php echo $state_name; ?></option>
                                <?php } ?>
                                </select>
                              </div>

                              <div class="col-xs-6">
                                <strong>City </strong>
                                <div id = "bank_city_div">
                                    <select name="bank_city" id="bank_city" class="form-control">
                                      <option value="">Select City</option>
                                    </select>
                                </div>
                              </div>

                              
                            </div><br><br><br><br>                
                </div><!-- /.box-body -->
              </div>


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Nominee Detail</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                          <div class="form-group">
                              <label> Nominee Name </label>
                              <input type="text" class="form-control" id="nominee_name" name="nominee_name" placeholder="Enter Nominee Name" onKeyPress="return alphabetsonly();" /> 
                           </div>

                           <div class="form-group">
                              <label> Relation </label>
                              <input type="text" class="form-control" id="nominee_relation" name="nominee_relation" placeholder="Enter Nominee Relation" onKeyPress="return alphabetsonly();" /> 
                           </div>

                           <div class="form-group">
                              <label> Mobile No </label>
                              <input type="text" class="form-control" id="nominee_mob_no" name="nominee_mob_no" maxlength="10" placeholder="Enter Nominee Mobile No" onKeyPress="return phonenumbersonly();"  /> 
                           </div>

                            <div class="form-group">
                              <label> Address </label>
                              <textarea name="nominee_address" class="form-control" rows="5"></textarea>
                           </div>

                           <div class="form-group">
                            <div class="col-xs-4">
                             <strong>State </strong>
                              <select name="nominee_state_id" id="nominee_state_id" class="form-control" onChange="getData('fetch_nominee_city.php?state_id='+this.value,'nominee_city_div');">
                                    <option value="">Select State</option>
                                    <?php
                                      $sql = "select * from states";
                                      $run = mysql_query($sql) or die("error in state fetch".mysql_error());
                                      while($data = mysql_fetch_array($run))
                                      {
                                        $state_id = $data['state_id'];
                                        $state_name = $data['state'];
                                    ?>
                                    <option value="<?php echo $state_id; ?>"><?php echo $state_name; ?></option>
                                <?php } ?>
                                </select>
                              </div>

                              <div class="col-xs-4">
                                <strong>City </strong>
                                <div id = "nominee_city_div">
                                    <select name="nominee_city_id" id="nominee_city_id" class="form-control">
                                      <option value="">Select City</option>
                                    </select>
                                </div>
                              </div>

                              <div class="col-xs-4">
                                <strong>Pin Code</strong>
                                <input type="text" class="form-control" id="nominee_pin_code" name="nominee_pin_code" placeholder="Enter Pin Code" onKeyPress="return phonenumbersonly();"  /> 
                              </div>
                            </div><br><br><br><br>   

                             <div class="box-footer">
                                  <input type="submit" name="submit" id="Create" class="btn btn-primary pull-right" value="Submit" onClick="javascript : return confirm('Do You want to Create Joining?');"/>
                             </div>             
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        
        </section>

</form>
        <!-- right col -->
          </div><!-- /.content-wrapper -->
          
            <script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
        
        $('.input-daterange').datepicker({
            orientation: "top left",
            autoclose: true,
            todayHighlight: true
        });
    
    });
</script>

     <?php footer();?>

      <!-- Control Sidebar -->
      <?php theme_controller();?>
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>

    </div><!-- ./wrapper -->

  <?php footer_script();?>
 


  <style type="text/css">
 ::-webkit-file-upload-button {
    background:#B14709;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
}
::-ms-browse {
     background:#B14709;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
}
  </style>
  </body>
</html>
