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
  include 'remove_account.php';
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
        <li><a href="manage_course.php"><input type="button" name="" value="Manage Course" class="btns" id="btnMc"></a></li>
         <li><a href="manage_staff.php"><input type="button" name="" value="Manage Staff" class="btns" id="btnMs"></a></li>
        <li><a href="manage_account.php"><input type="button" name="" value="Manage Accounts" class="btns active" id="btnMa"></a></li>
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
    <h4 id="ls">Managing Accounts<p style="font-size: 16px;">Lits of accounts</p></h4>
    <hr>
    <a href="manage_account.php"><i class="fas fa-undo text-primary"><span style="font-size: 12px; font-family: 'calibri';cursor: pointer;"> Back</span></i></a>
    <table class="table border-0 table-striped table-hover"  style="background-color: white; margin-top: 3px;" id="tablecourse">
          <?php include('load_accounts.php') ?>
            <thead style="font-family: 'Calibri">
              <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Email address</th>
                <th>Course</th>
                <th>Account type</th>
                <th>status</th>
                <th>operation</th>
              </tr>
            </thead>
            <tbody style="font-size: 12px;">
            </tbody>
          </table>
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

    <div class="modal fade" id="myModalDelete" role="dialog">
      <div class="modal-dialog" id="M_dialog">
        <!-- Modal content--DELETEACCOUNTS-->
         <div class="modal-content unfold" id="M_dialogc">
            <div class="modal-body border-0">
              <div class="custom-control-inline">
                <img src="../img/qry.png" style="max-height: 50px;">
                 <h5 class="text-white prmH">|Delete this account?</h5>
                 </div>
                  <div class="text-right">
                   <div class="row">
                     <div class="col-lg-12">
                      <div class="custom-control-inline">
                        <div class="text-left pr-5"><p class=" pr-5 prmText">Are you sure about this?</p></div>
                        <form method="post">
                        <input type="text" name="idel" id="idel" hidden="yes">
                          <button type="submit" name="btn_del"  class="mybtnD" id="yes">Yes</button>
                        </form>
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