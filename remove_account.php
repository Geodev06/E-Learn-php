<?php 

$server ='127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'elearn';
$db = mysqli_connect($server, $user, $pass, $dbname);

$errors = array();
$success = array();
$user = "";

	if (isset($_POST['btn_del'])) {
		
		$user = filter_input(INPUT_POST,"idel");
		if (!empty($user)) {
			# code...
			try {

			$del = "DELETE from tbl_accounts where user = '$user'";
			$del = mysqli_query($db, $del);

			array_push($success, "Succesfully deleted!");

		} catch (Exception $e) {
			array_push($errors, "Oops!, Something went wrong! motherfuckass!");
		}
		}
		else
		{

		}

	}
?>