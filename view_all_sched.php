<?php 
session_start();
include 'connect.php';
if (!isset($_SESSION['username'])) {
    print"<script>window.location.href='login.php';</script>";
  }
$errors = array();
$success = array();
$get_name = $_SESSION['get_name'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Manage Schedule</title>
</head>
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
        $('#btnback').click(function(){
            window.close();
        });
    });
</script>
<body style="background-color: #292F33; color: white;">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="p-4">
        <h6 id="ls" style="margin: 0"><u>E-Learn Scheduler</u></h6>
        <p id="ls">Laguna state polytechnic university</p>
        <input type="button" name="" class="btn btn-sm btn-success" value="back to dashboard" id="btnback">
        <input type="button"  class="btn btn-sm btn-success" value="Pick Instructor's name" data-toggle="modal" data-target="#myModalPick">
        <form method="post" action="">
         <!-- Modal -->
        <div class="modal fade" id="myModalPick" role="dialog">
          <div class="modal-dialog" id="M_dialog">
            <!-- Modal content-->
             <div class="modal-content unfold" id="M_dialogc">
                <div class="modal-body border-0">
                  <div class="custom-control-inline">
                    <img src="../img/qry.png" style="max-height: 50px;">
                     <h3 class="text-white prmH">|View Schedule</h5>
                     </div>
                      <div class="text-right">
                       <div class="row">
                         <div class="col-lg-12">
                           <?php
                              $qry = "SELECT user,fname,mname,lname from tbl_accounts where type = 'Staff' AND has_sched = 'yes'";
                               $stmt = $conn->prepare($qry);
                               $stmt->execute();
                               $Names = $stmt->fetchAll();

                               foreach ($Names as $name) {
                                 $_SESSION['staff_user'] = $name['user'];
                               }
                             ?>
                             <select class="cbStaff" id="sel1" name="cb1">
                              <option>--Staff list--</option>
                                <?php foreach ($Names as $name): ?>
                                  <option value="<?= $name['user']; ?> - <?= $name['fname']; ?>  <?= $name['mname']; ?>  <?= $name['lname']; ?>"><?= $name['user']; ?> - <?= $name['fname']; ?> <?= $name['mname']; ?> <?= $name['lname']; ?></option>
                                <?php endforeach; ?>
                             </select>
                          <div class="custom-control-inline">
                              <div class="text-left pr-5"></div>
                              <button type="submit" name="btn_submit"  class="mybtnD" id="yes">Yes</button>
                              <div class="pl-3"></div>
                              <button type="button" class="mybtnD" data-dismiss="modal" id="mybtnDN">No</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
        </form>
        <hr class="bg-white">
        <h6 id="ls"><i class="fas fa-user-tie fa-2x "></i>  <i class="glyphicon glyphicon-calendar"></i> <i class="glyphicon glyphicon-time"></i> Viewing Staff Schedule</h6>
        <h6 id = "hx">Instructor's name : <span class="text-white"> <?php echo $get_name ?></span></h6>

        <table class="table border-0 table-striped table-hover"  style="background-color: white; margin-top: 3px;" id="tablecourse">
          <?php include('load_tables/load_table_7.php') ?>
            <thead style="font-family: 'Calibri">
              <tr>
                <th>Time</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
                <th><i class="fas fa-cog"></i></th>
              </tr>
            </thead>
            <tbody style="font-size: 12px;">
            </tbody>
          </table>
    </div>
<div class="footer p-5"></div>
</body>
</html>