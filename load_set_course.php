<?php
	$server ='127.0.0.1';
	$user = 'root';
	$pass = '';
	$dbname = 'elearn';
	$db = mysqli_connect($server, $user, $pass, $dbname);
    $errors = array();
    $success = array();

    $_SESSION['fullcourse'] = "";
    $_SESSION['sub1'] = "";
    $_SESSION['sub2'] = "";
    $_SESSION['sub3'] = "";
    $_SESSION['sub4'] = "";
    $_SESSION['sub5'] = "";
    $_SESSION['sub6'] = "";
    $_SESSION['sub7'] = "";
    $_SESSION['sub8'] = "";
    $sub1 = $sub2 = $sub3 = $sub4 = $sub5 = $sub6 = $sub7 = $sub8 = "";
    $fullcourse = "";
    if (isset($_POST['btn_load'])) {
        $fullcourse = filter_input(INPUT_POST, "cbfull");

        if ($fullcourse!="--Choose one--") {
        
        $qry = "SELECT * from tbl_subjects where Course_name = '$fullcourse'";
                $result  = mysqli_query($db, $qry);

                if (mysqli_num_rows($result) == 1) {

                    session_regenerate_id();
                    $member = mysqli_fetch_assoc($result);
                    $sub1 = $member['sub1'];
                    $sub2 = $member['sub2'];
                    $sub3 = $member['sub3'];
                    $sub4 = $member['sub4'];
                    $sub5 = $member['sub5'];
                    $sub6 = $member['sub6'];
                    $sub7 = $member['sub7'];
                    $sub8 = $member['sub8'];
                    $fullcourse = $member['Course_name'];

                    $_SESSION['fullcourse'] = $fullcourse;
                    $_SESSION['sub1'] = $sub1;
                    $_SESSION['sub2'] = $sub2;
                    $_SESSION['sub3'] = $sub3;
                    $_SESSION['sub4'] = $sub4;
                    $_SESSION['sub5'] = $sub5;
                    $_SESSION['sub6'] = $sub6;
                    $_SESSION['sub7'] = $sub7;
                    $_SESSION['sub8'] = $sub8;

                    array_push($success, "Record has been successfully loaded<br> you can now convert it to PDF file just click the button \"PRINT\" below!<br>
                        <i class='fas fa-thumbs-up pt-3 fa-3x text-white'></i>");
                    

                }
                else
                {
                    array_push($errors, "Please choose a saved record you want to view!");
                }
    }
    else
    {
        array_push($errors, "Please choose a saved record you want to view!");
    }
        
      
    }
?>