<?php  
include 'connect.php';
$errors = array();
$success = array();

		$getname = filter_input(INPUT_POST, "cb1");
		$get_course = filter_input(INPUT_POST, "cb2");
		$roomname = filter_input(INPUT_POST, "txtroom");
		$staff_user = filter_input(INPUT_POST, "user");
	if (isset($_POST['btn_submit'])) {

		if ($getname != '--Staff list--') {
			# code...
			if ($get_course != '--Set course--') {
				# code...
				$_SESSION['get_course'] = $get_course;
				$_SESSION['get_name'] = $getname;
				$_SESSION['staff_user'] = $staff_user;

			}
			else
			{
				array_push($errors, "Pick course first!");
			}
		}
		else
		{
			array_push($errors, "Pick intructor first!");
		}
	
	}

	if (isset($_POST['btn_reg_room'])) {
		# code...
		if (!empty($roomname)) {
			# code...
			try {
				$availability = "available";
			    $ins = "INSERT into tbl_rooms(room,availability)values(:room,:availability)";
			    $stmt = $conn->prepare($ins);
			    $stmt->bindParam(":room",$roomname);
			    $stmt->bindParam(":availability",$availability);
			    $stmt->execute();
			array_push($success, "Room has been added!");
			} catch (Exception $e) {
					array_push($errors, "Oops!, Something went wrong please try again!");
			}
		}
		else
		{
			array_push($errors, "Please put name of the room or room no.");
		}
	}

?>