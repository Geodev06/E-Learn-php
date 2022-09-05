<?php 
session_start();
if (!isset($_SESSION['username'])) {
    print"<script>window.location.href='login.php';</script>";
  }
include 'get_target_person.php';
include 'load_tables/set_sched_process.php';
include 'errors.php';
include 'success.php';
$errors = array();
$success = array();

$get_course = $_SESSION['get_course'];
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
        <input type="button" name="" class="btn btn-sm btn-success" value="Manage rooms" data-toggle="modal" data-target="#myModalAddroom">
        <input type="button" name="" class="btn btn-sm btn-success" value="Pick Course and Instructor" data-toggle="modal" data-target="#myModalPick">
        <hr>
        <form method="post">
           <!-- Modal -->
        <div class="modal fade" id="myModalAddroom" role="dialog">
          <div class="modal-dialog" id="M_dialog">
            <!-- Modal content-->
             <div class="modal-content unfold" id="M_dialogc">
                <div class="modal-body border-0">
                  <div class="custom-control-inline">
                    <img src="../img/qry.png" style="max-height: 50px;">
                     <h3 class="text-white prmH">| Prompt?</h5>
                     </div>
                      <div class="text-right">
                       <div class="row">
                        
                         <div class="col-lg-12">
                          <input type="text" name="txtroom" class="inputs" placeholder="Room name or Room no.">
                         </div>
                          <div class="custom-control-inline">
                            
                              <div class="text-left pr-5">
                                <p id="ls" class="text-white pl-5">Add this one?</p>
                              </div>
                              <button type="submit" name="btn_reg_room"  class="mybtnD" id="yes">Yes</button>
                              <div class="pl-3"></div>
                              <button type="button" class="mybtnD" data-dismiss="modal" id="mybtnDN">No</button>
                                                     </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <!-- Modal -->
        <div class="modal fade" id="myModalPick" role="dialog">
          <div class="modal-dialog" id="M_dialog">
            <!-- Modal content-->
             <div class="modal-content unfold" id="M_dialogc">
                <div class="modal-body border-0">
                  <div class="custom-control-inline">
                    <img src="../img/qry.png" style="max-height: 50px;">
                     <h3 class="text-white prmH">|Set Schedule</h5>
                     </div>
                      <div class="text-right">
                       <div class="row">
                        
                         <div class="col-lg-12">

                           <?php 
                              $qry = "SELECT user,fname,mname,lname from tbl_accounts where type = 'Staff' AND has_sched = 'no'";
                               $stmt = $conn->prepare($qry);
                               $stmt->execute();
                               $Names = $stmt->fetchAll();
                             ?>
                             <?php 
                               $qry2 = "SELECT Course_name from tbl_subjects";
                               $stmt2 = $conn->prepare($qry2);
                               $stmt2->execute();
                               $Courses1 = $stmt2->fetchAll();  
                              ?>

                             <select class="cbStaff" id="sel1" name="cb1">
                              <option>--Staff list--</option>
                                <?php foreach ($Names as $name): ?>
                                  <option value="<?= $name['user']; ?>"><?= $name['user']; ?></option>
                                <?php endforeach; ?>
                             </select>

                             <select class="cbStaff" id="sel1" name="cb2">
                              <option>--Set course--</option>
                                <?php foreach ($Courses1 as $course1): ?>
                                  <option value="<?= $course1['Course_name']; ?>"><?= $course1['Course_name']; ?></option>
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
        <h6 id="ls"><i class="fas fa-user-tie fa-2x "></i>  <i class="glyphicon glyphicon-calendar"></i> <i class="glyphicon glyphicon-time"></i>Manage Schedule Staff</h6>
        <h6 id = "hx">Instructor's name : <span class="text-white"> <?php echo $get_name ?></span></h6>
        <h6 id = "hx">Course name : <span class="text-white"> <?php echo $get_course ?></span></h6>
                <h6 id = "hx">Legend : <span class="nnn" style="background-color: white; color: black"> Room</span>
                  <span class="nnn" style="background-color: #4d4dff; color: white"> Subjects</span></h6>
      </div>
    </div>
    <div class="col-lg-12">
              <?php 
                $qry = "SELECT subjects from tbl_sub_set1 where fullcourse = '$get_course'";
                 $stmt = $conn->prepare($qry);
                 $stmt->execute();
                 $Courses = $stmt->fetchAll();

                 $qryx = "SELECT room from tbl_rooms where availability = 'available'";
                 $stmtx = $conn->prepare($qryx);
                 $stmtx->execute();
                 $rooms = $stmtx->fetchAll(); 

               ?>
    <form method="post">
          <table class="tbl">
          <thead>
            <tr>
              <th>Time</th>
              <th>Monday</th>
              <th>Tuesday</th>
              <th>Wednesday</th>
              <th>Thursday</th>
              <th>Friday</th>
              <th>Saturday</th>
              <th>Sunday</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>7:00-8:00am</td>
                <td>
                  <select class="c" id="sel1" name="cbmon7">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrmon7">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbtue7">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrtue7">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbwed7">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrwed7">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbthur7">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrthur7">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbfri7">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrfri7">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsat7">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsat7">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsun7">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsun7">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
            </tr>
            <tr>
              <td>8:00-9:00am</td>
              <td>
                  <select class="c" id="sel1" name="cbmon8">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrmon8">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbtue8">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrtue8">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbwed8">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrwed8">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbthur8">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrthur8">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbfri8">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrfri8">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsat8">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsat8">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsun8">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsun8">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
            </tr>
            <tr>
              <td>9:00-10:00am</td>
              <td>
                  <select class="c" id="sel1" name="cbmon9">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrmon9">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbtue9">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrtue9">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbwed9">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrwed9">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbthur9">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrthur9">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbfri9">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrfri9">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsat9">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsat9">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsun9">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsun9">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
            </tr>
            <tr>
              <td>10:00-11:00am</td>
              <td>
                  <select class="c" id="sel1" name="cbmon10">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrmon10">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbtue10">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrtue10">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbwed10">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrwed10">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbthur10">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrthur10">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbfri10">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrfri10">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsat10">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsat10">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsun10">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsun10">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
            </tr>
            <tr>
              <td>11:00-12:00am</td>
              <td>
                  <select class="c" id="sel1" name="cbmon11">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrmon11">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbtue11">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrtue11">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbwed11">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrwed11">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbthur11">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrthur11">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbfri11">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrfri11">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsat11">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsat11">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsun11">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsun11">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
            </tr>
            <tr>
              <td>12:00-1:00pm</td>
         <td>
                  <select class="c" id="sel1" name="cbmon12">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrmon12">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbtue12">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrtue12">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbwed12">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrwed12">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbthur12">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrthur12">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbfri12">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrfri12">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsat12">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsat12">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsun12">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsun12">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
            </tr>
            <tr>
              <td>1:00-2:00pm</td>
              <td>
                  <select class="c" id="sel1" name="cbmon1">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrmon1">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbtue1">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrtue1">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbwed1">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrwed1">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbthur1">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrthur1">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbfri1">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrfri1">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsat1">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsat1">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsun1">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsun1">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
            </tr>
            <tr>
              <td>2:00-3:00pm</td>
              
                  <td>
                  <select class="c" id="sel1" name="cbmon2">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrmon2">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbtue2">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrtue2">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbwed2">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrwed2">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbthur2">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrthur2">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbfri2">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrfri2">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsat2">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsat2">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsun2">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsun2">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
            </tr>
            <tr>
              <td>3:00-4:00pm</td>
              <td>
                  <select class="c" id="sel1" name="cbmon3">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrmon3">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbtue3">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrtue3">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbwed3">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrwed3">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbthur3">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrthur3">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbfri3">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrfri3">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsat3">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsat3">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsun3">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsun3">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
            </tr>
            <tr>
              <td>4:00-5:00pm</td>
              <td>
                  <select class="c" id="sel1" name="cbmon4">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrmon4">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbtue4">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrtue4">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbwed4">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrwed4">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbthur4">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrthur4">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbfri4">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrfri4">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
               <td>
                  <select class="c" id="sel1" name="cbsat4">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsat4">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>
               </td>
               <td>
                  <select class="c" id="sel1" name="cbsun4">
                  <option>--</option>
                    <?php foreach ($Courses as $course): ?>
                      <option value="<?= $course['subjects']; ?>"><?= $course['subjects']; ?></option>
                    <?php endforeach; ?>
                 </select>

                 <select class="c2" id="sel1" name="cbrsun4">
                  <option>--</option>
                    <?php foreach ($rooms as $room): ?>
                      <option value="<?= $room['room']; ?>"><?= $room['room']; ?></option>
                    <?php endforeach; ?>
                 </select>

               </td>
            </tr>
          </tbody>
         </table>
         <br>
         <input type="submit" name="btnset" value="Set Schedule" class="btn btn-sm btn-success">
  </form>
    </div>
  </div>
</div>
<div class="footer p-5"></div>

</body>
</html>