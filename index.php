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
			  <li><a href="index.php"><input type="button" name="" value="Dashboard" class="btns active" id="btndash"></a></li>
			  <li><a href="manage_course.php"><input type="button" name="" value="Manage Course" class="btns" id="btnMc"></a></li>
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
	<div id="main" class="p-5 unfold">
		<h2 id="ls">Laguna State Polytechnic University</h2>
		<p id="ls">San Pablo City Campus</p>
		<img src="img/128px/calendar.png" style="max-height: 60px;"><p style="display: inline;" id="lbdate"></p>
		<hr>
		<div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 py-2" id="c1">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="mb-1"><p class="lbN1">Number of Enrolled Students</p></div>
                      <div class="h5 mb-0 text-white">300
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate fa-2x text-white"></i>
                    </div>

                  </div>
                </div>
                <div class="text-right pr-3">
                	<input type="button" name="" value="view" class="btnI">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 py-2"id="c2">
                <div class="card-body" >
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-white mb-1"><p class="lbN1">Total number of Staffs</p></div>
                      <div class="h5 mb-0 text-white">30</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-friends fa-2x text-white"></i>
                    </div>
                  </div>
                </div>
                <div class="text-right pr-3">
                	<input type="button" name="" value="view" class="btnI">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 py-2" id="c3">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="mb-1 text-white"><p class="lbN1">Pending Requests</p></div>
                      <div class="h5 mb-0 text-white">18
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-white"></i>
                    </div>
                  </div>
                </div>
                <div class="text-right pr-3">
                	<input type="button" name="" value="view" class="btnI">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 py-2" id="c4">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class=" text-white mb-1"><p class="lbN1">Deactivated accounts</p></div>
                      <div class="h5 mb-0 text-white">200</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-lock fa-2x text-white"></i>
                    </div>
                  </div>
                </div>
                <div class="text-right pr-3">
                	<input type="button" name="" value="view" class="btnI">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 py-2" id="c5">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class=" text-white mb-1"><p class="lbN1">My Announcements</p></div>
                      <div class="h5 mb-0 text-white">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-volume-up fa-2x text-white"></i>
                    </div>
                  </div>
                </div>
                <div class="text-right pr-3">
                	<input type="button" name="" value="view" class="btnI">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4"></div>
            <div class="col-xl-3 col-md-6 mb-4"></div>
            <div class="col-xl-3 col-md-6 mb-4">
            	<div class="pt-5"></div>
            	<input type="button" name="" class="btnb " id="new_A" value="Create new announcements">
            	<div class="pt-1"></div>
            	<div class="text-right"><input type="button" name="" class="btnb " id="lg" value="Log history"></div>
            </div>
        </div>
    </div>
    <div id="main2" class="p-5 unfold">
		<h2 id="ls">Laguna State Polytechnic University</h2>
		<p id="ls">San Pablo City Campus</p>
		<img src="img/128px/calendar.png" style="max-height: 60px;"><p style="display: inline;" id="lbdate"></p>
		<hr>
		<div class="row">
			<div class="col-md-12 ">
				
			  <h2>Account history</h2>
			  <p class="text-dark text-xs">You are viewing history of accounts</p>            
				  <table class="table table-success table-hover border-0" style="border-radius: 25px;">
				    <thead style="font-size: 12px;">
				      <tr>
				        <th>Firstname</th>
				        <th>Lastname</th>
				        <th>Username</th>
				        <th>Account type</th>
				        <th>Date</th>
				        <th>Account type</th>
				        <th>Date</th>
				        <th>Account type</th>
				      </tr>
				    </thead>
				    <tbody>
				     
				    </tbody>
				  </table>
				</div>
            <div class="col-xl-3 col-md-6 mb-4"><input type="button" name="" class="btnb1 " id="clslog" value="Close"></div>
            <div class="col-xl-3 col-md-6 mb-4"><input type="button" name="" class="btnb1 " id="dellog" value="Clear history"></div>
            <div class="col-xl-3 col-md-6 mb-4"></div>
        </div>
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
        <a href="logout.php"><button type="button" name="btn_reg"  class="mybtnD" id="yes">Yes</button></a>
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
</body>
</html>