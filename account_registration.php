<?php 
include ('register.php'); 
include ('errors.php');
include ('success.php');
$errors = array();	
$success = array();	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Registration</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/icons.css">
	<link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/myjs.js"></script>
	<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#mybtnclose').click(function(){
            $('#Cntm').toggleClass("unfoldOut");
            $('#Cnt').slideUp(2300);
        });
        $('#mybtncloseS').click(function(){
            $('#CntmS').toggleClass("unfoldOut");
            $('#CntS').slideUp(2300);
        });
    });
</script>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="">
					<div class="pt-3">
						<div class="container">
							<div class="row">
								<div class="col-lg-3 col-md-3">	
								</div>
								<div class="col-lg-6 col-md-6">
									<form method="post" action ="">
											
											<br>
											<h6 class="text-center ">Account Registration</h6>
											<p id="pp">Note : The permission to create or to register new accounts is only given to administrators. once the account is created the default username and password of it is same to Student no.</p>
											<br>
											<p id="pp" class="text-success text-center">Personal Information</p>
											<input type="button" value="Clear fields" id="btnclear" class="btn btn-sm btn-success">
											<hr>
										  		<div class="row">
										  			<div class="col-lg-12">
										  				<div class="custom-control-inline">
										  				<input type="text" name="txtfn" class="inp" id="txtuserR1" autocomplete="off" placeholder="Firstname" value="<?php echo $fname ?>">
										  				<br>
										  				<input type="text" name="txtln" class="inp" id="txtuserR11" placeholder="Lastname" autocomplete="off" value="<?php echo $mname ?>">
										  				<br>
										  				<input type="text" name="txtmn" class="inp" id="txtuserR111" placeholder="Middlename" autocomplete="off" value="<?php echo $lname ?>">
										  				</div>
										  			</div>
										  		</div>
										  	  <div class="text-center">
										  	  	<br>
										  	  	<div class="custom-control custom-radio custom-control-inline">
                                                 <input type="radio" class="custom-control-input" id="customRadio" name="sex" value="Male" checked="">
                                                 <label class="custom-control-label lblr text-dark" for="customRadio">Male</label>
                                               </div>
                                               <div class="custom-control custom-radio custom-control-inline">
                                                  <input type="radio" class="custom-control-input" id="customRadio2" name="sex" value="Female">
                                                  <label class="custom-control-label lblr text-dark" for="customRadio2">Female</label>
                                               </div>  
										  	  </div>
										  	  <p id="pp" class="pl-3"> Birthdate</p>
										  	  <input type="date" name="bdate" class="inp" id="txtuserR2" value="<?php echo $bdate ?>">
										  	  <br>
										  	  <input type="email" name="txtemail" class="inp" id="txtuserRE" placeholder="Email address" autocomplete="off" value="<?php echo $email ?>">
										  	  	<br>
										  	<div class="">
											  <label for="sel1" id="lbl">Select Course:</label>
											   <?php 
									                $qry = "SELECT Course_name from tbl_course";
									                 $stmt = $conn->prepare($qry);
									                 $stmt->execute();
									                 $Courses = $stmt->fetchAll(); 
								               	?>
								               <select class="cb" id="txtuserRC" name="cbCourse">
								                <option>--Choose one--</option>
								                  <?php foreach ($Courses as $course): ?>
								                    <option value="<?= $course['Course_name']; ?>"><?= $course['Course_name']; ?></option>
								                  <?php endforeach; ?>
								                  <option>N/A</option>
								               </select>
											</div>
												<div class="">
											  <label for="sel1" id="lbl">Account type:</label>
											  <select class="cb" id="txtuserRT" name="cbType">
											  	<option>--Choose one--</option>
											    <option>Administrator</option>
											    <option>Staff</option>
											    <option>Student</option>
											  </select>
											</div>
										  	<hr>
										  	<div class="text-center">
										  		<div class="row">
										  			<div class="col-md-4"></div>
										  			<div class="col-md-4">
										  				<input type="number" maxlength="5" name="txtcor" class="inp" id="txtuserREC" autocomplete="off" placeholder="COR no." value="<?php echo $cor ?>">
										  			</div>
										  		</div>
										  		<br>
										  		<input type="button" class="mybtnA" value="Finish" data-toggle="modal" data-target="#myModal"><br><br>
										  	</div>
										  	 <!-- Modal -->
											  <div class="modal fade" id="myModal" role="dialog">
											    <div class="modal-dialog" id="M_dialog">
											      <!-- Modal content-->
											      <div class="modal-content unfold" id="M_dialogc">
											        <div class="modal-body border-0">
											        		<div class="custom-control-inline">
											        			<img src="../img/qry.png" style="max-height: 50px;">
											        			<h3 class="text-white prmH">|Prompt?</h5>
											        		</div>
											          <div class="text-right">
											          	<div class="row">
											          		<div class="col-lg-12">
											          			<div class="custom-control-inline">
											          				<div class="text-left pr-5"><p class=" pr-5 prmText">Are you sure about this?</p></div>
											          			<button type="submit" name="btn_reg"  class="mybtnD" id="yes">Yes</button>
											          			<div class="pl-3"></div>
											          			<button type="button" class="mybtnD" data-dismiss="modal" id="mybtnDN">No</button>
											          			</div>
											          		</div>
											          	</div>
											          </div>
											        </div>
											      </div>
											    </div>
											  </div>
										</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="footer text-center text-white">
					<p id="reserved">All rights reserved &copy; 2019 Ageo agnote</p>
				</div>
			</div>
		</div>
	</div>			 
</body>
</html>