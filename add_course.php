<?php
session_start();
  if (!isset($_SESSION['username'])) {
    print"<script>window.location.href='login.php';</script>";
  }
  $name = $_SESSION['Lastname'];
  $TYPE = $_SESSION['Typo'];
  $fr = "";
  $sex = $_SESSION['gen'];
  if($sex =="Male")
  {
    $fr = "Mr. ";
  }
  else {
    $fr = "Ms. ";
  }
  $fullN = $fr." ".$name;
  include 'add_course_process.php';
  include 'errors.php';
  include 'success.php';
  $errors = array();
  $success = array();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/icons.css">
	<link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/index_admin.css">
  <link rel="stylesheet" type="text/css" href="css/modal.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/admin_dash.js"></script>
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
<body onload="Datetime()">
	<div class="container">
		<div id="sidenav">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="profile_pic" class="text-center pt-5">
							<img src="<?php echo $_SESSION['picture']; ?>" style="max-height: 100px; max-width: 100px" class="rounded-circle shadow-lg" id="profile">
							<h6 id="name"><?php echo $fullN?></h6>
							<p id="lbad"><?php echo $TYPE ?></p>
							
						</div>
					</div>
				</div>
			</div>
			<ul id="ull">
			  <li><a href="index.php"><input type="button" name="" value="Dashboard" class="btns " id="btndash"></a></li>
			  <li><a href="manage_course.php"><input type="button" name="" value="Manage Course" class="btns active" id="btnMc"></a></li>
			   <li><a href="manage_staff.php"><input type="button" name="" value="Manage Staff" class="btns" id="btnMs"></a></li>
			  <li><a href="manage_account.php"><input type="button" name="" value="Manage Accounts" class="btns" id="btnMa"></a></li>
			  <li><a href="account_setting.php"><input type="button" name="" value="Account Settings" class="btns" id="btnAcc"></a></li>
			  <li><input type="button" name="" value="About developer" class="btns" id="btnAd"></li>
			  <li><input type="button" name="" value="Logout" class="btns" id="btnlogout" data-toggle="modal" data-target="#myModal"></li>
			</ul>
			<div class="text-center">
				<i class="glyphicon glyphicon-chevron-left" id="pnlc"></i>
				<i class="glyphicon glyphicon-chevron-right" id="pnlcS"></i>
			</div>
		</div>
	</div>
	<div id="top" >
		
    <div class="text-right p-2 pr-3" style="cursor: pointer;">
                <i class="glyphicon glyphicon-envelope text-white icc"><span class="badge badge-success">10</span></i>
                <i class="glyphicon glyphicon-bell text-white icc "><span class="badge badge-primary">9</span></i>
                <i class="glyphicon glyphicon-list  text-white icc"><span class="badge badge-danger">20</span></i>
                <h6 class="text-right text-white pt-2 pr-3" id="logo">E-Learning System</h6>
    </div>

	</div>
	<div id="main" class="p-5">
		<h2 id="ls">Laguna State Polytechnic University</h2>
		<p id="ls">San Pablo City Campus</p>
		<img src="img/128px/calendar.png" style="max-height: 60px;"><p style="display: inline;" id="lbdate"></p>
		<hr>

    <div class="row">
      <div class="col-lg-12">
        <div class="p-3">
          <a href="manage_course.php"><input type="button" name="" value="Back" id="bb" class="btSAdd"></a>
        </div>
        <form class="" method="post">
          <input type="text" name="txtcoursename" autocomplete="off" class="inputs" placeholder="Course name" value="<?php echo $coursename ?>">
          <input type="text" name="txtdesc" class="inputs" autocomplete="off" placeholder="Course description" value="<?php echo $coursedesc ?>">
          <input type="number" name="txtcourseunit" class="inputs" autocomplete="off" placeholder="No. of units" value="<?php echo $courseunit ?>">
          <input type="text" name="txtdept" class="inputs" autocomplete="off" placeholder="College" value="<?php echo $dept ?>">
          <hr>
          <div class="text-right">
            <input type="button" name="" class="btSave" value="Save" data-toggle="modal" data-target="#myModal">
          </div>
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
        <button type="submit" name="btn_Save"  class="mybtnD" id="yes">Yes</button>
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

<!-- Modal -->
   
</body>
</html>