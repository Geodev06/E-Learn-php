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
  include 'load_set_course.php';
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
        <div class="p-2">
          <a href="manage_course.php"><input type="button" name="" value="Back" class="btSAdd1" id="bb"></a>
          <a href="manage_sub.php"><input type="button" name="" value="Manage Subjects" class="btSAdd1"></a>
          <a href="edit_sub.php"><input type="button" name="" value="Edit Subjects" class="btSAdd1e"></a>
          <a href="view_sub.php"><input type="button" name="" value="View sets" class="btSAdd1e"></a>
        </div>
      </div>
      <div class="col-lg-12">
        <form method="post">
             <?php 
              include 'connect.php';
                $qry = "SELECT Course_name from tbl_subjects";
                 $stmt = $conn->prepare($qry);
                 $stmt->execute();
                 $Courses = $stmt->fetchAll(); 
               ?>
               <select class="cb" id="sel1" name="cbfull">
                <option >--Choose one--</option>
                  <?php foreach ($Courses as $course): ?>
                    <option value="<?= $course['Course_name']; ?>"><?= $course['Course_name']; ?></option>
                  <?php endforeach; ?>
               </select>
          <div class="row">
            <div class="col-lg-12" id="dform">
              <hr>
              <table class="table border-0 "  style="background-color: white;" id="tablecourse">
                <thead style="font-family: 'Calibri';font-size: 12px">
                  <tr>
                    <th>Course name </th>
                    <th><?php echo $fullcourse ?> </th>
                  </tr>
                </thead>
                <tbody style="font-size: 12px;">
                  <tr>
                    <td>SUBJECT 1 : </td>
                    <td><?php echo $sub1 ?></td>
                  </tr>
                  <tr>
                    <td>SUBJECT 2 : </td>
                    <td><?php echo $sub2 ?></td>
                  </tr>
                  <tr>
                    <td>SUBJECT 3 : </td>
                    <td><?php echo $sub3 ?></td>
                  </tr>
                  <tr>
                    <td>SUBJECT 4 : </td>
                    <td><?php echo $sub4 ?></td>
                  </tr>
                  <tr>
                    <td>SUBJECT 5 : </td>
                    <td><?php echo $sub5 ?></td>
                  </tr>
                  <tr>
                    <td>SUBJECT 6 : </td>
                    <td><?php echo $sub6 ?></td>
                  </tr>
                  <tr>
                    <td>SUBJECT 7 : </td>
                    <td><?php echo $sub7 ?></td>
                  </tr>
                  <tr>
                    <td>SUBJECT 8 : </td>
                    <td><?php echo $sub8 ?></td>
                  </tr>
                   <tr>
                    <td>Made by : <?php echo $fullN ?></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
           </div>
           <hr>
           <div class="p-2">
            <input type="submit" name="btn_load" value="Load saved data" class="btSavel" id="bshow">
             <input type="button" name="btn_load" value="Print" class="btSavel" id="bshow" onclick="openWin()">
           </div>
          </div>
        </form>
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
<style type="text/css">
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}
tr:nth-child(even) {
    background-color: rgb(190,190,190);
}
</style>
<script type="text/javascript">
  function openWin()
  {
    window.open('print_sub.php');
  }
</script>
</html>