<?php

$server ='127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'elearn';
$db = mysqli_connect($server, $user, $pass, $dbname);

$sub1 = $sub2 = $sub3 = $sub4 = $sub5 = $sub6 = $sub7 = $sub8 = "";
$fullcourse = "--Choose one--";
$errors = array();
$success = array();
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
			    }
			    else
			    {
			    	array_push($errors, "Please choose a saved record you want to edit!");
			    }
	}
	else
	{
		array_push($errors, "Please choose a saved record you want to edit!");
	}
}
if (isset($_POST['btnSave_sub'])) {
	
	$fullcourse = filter_input(INPUT_POST, "cbfull");
	if ($fullcourse!="--Choose one--") {
		
		$sub1 = filter_input(INPUT_POST, "sub1");
		$sub2 = filter_input(INPUT_POST, "sub2");
		$sub3 = filter_input(INPUT_POST, "sub3");
		$sub4 = filter_input(INPUT_POST, "sub4");
		$sub5 = filter_input(INPUT_POST, "sub5");
		$sub6 = filter_input(INPUT_POST, "sub6");
		$sub7 = filter_input(INPUT_POST, "sub7");
		$sub8 = filter_input(INPUT_POST, "sub8");

			$qry = "UPDATE tbl_subjects set sub1 = '$sub1',sub2 = '$sub2',sub3 = '$sub3',sub4 = '$sub4',sub5 = '$sub5',sub6 = '$sub6',sub7 = '$sub7',sub8 = '$sub8'where Course_name = '$fullcourse'";
			    $result  = mysqli_query($db, $qry);
			    $sub1 = $sub2 = $sub3 = $sub4 = $sub5 = $sub6 = $sub7 = $sub8 = "";
				$fullcourse = "--Choose one--";
			    array_push($success, "Record has been successfully updated!");
	}
	else
	{
		array_push($errors, "Please choose record to update!");
	}
}
?>