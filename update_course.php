<?php

$server ='127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'elearn';
$db = mysqli_connect($server, $user, $pass, $dbname);

$errors = array();
$success = array();
$coursename = $courseDesc = $courseUnits = $courseDept = "";
if (isset($_POST['btn_update'])) {
	

	$coursename = filter_input(INPUT_POST, "txtcoursename");
	$courseDesc = filter_input(INPUT_POST, "txtcourseDesc");
	$courseUnits = filter_input(INPUT_POST, "txtUnits");
	$courseDept= filter_input(INPUT_POST, "txtDept");
	$code = filter_input(INPUT_POST, "id");

	if (!empty($coursename)) {
		# code...
		if (!empty($courseDesc)) {
			# code...
			if (!empty($courseUnits)) {
				# code...
				if (!empty($courseDept)) {
					if ($courseUnits != "0") {
						# code...
						$update = "UPDATE tbl_course set Course_name = '$coursename', description = '$courseDesc', Units = '$courseUnits', Dept = '$courseDept' where Code = '$code'";
              			$suc = mysqli_query($db, $update);

						array_push($success, "Course has been successfully updated!");
					}
					else
					{
						array_push($errors, "Course Units cannot be zero");
					}
				}
				else
				{
					array_push($errors, "Course department cannot be null!");
				}
			}
			else
			{
				array_push($errors, "Course Units cannot be null!");
			}
		}
		else
		{
			array_push($errors, "Course description cannot be null!");
		}
	}
	else
	{
		array_push($errors, "coursename cannot be null!");
	}
}

if (isset($_POST['btn_delete'])) {
	$code = filter_input(INPUT_POST, "idtd");

	try {

		$del = "DELETE from tbl_course where Code = '$code'";
  		$suc = mysqli_query($db, $del);
		array_push($success, "Course has been successfully removed!");
		
	} catch (Exception $e) {
		
		array_push($errors, "Oops!, Something went wrong! please try again!");	
	}
}

?>