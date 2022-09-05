<?php
$server ='127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'elearn';
$db = mysqli_connect($server, $user, $pass, $dbname);

$_SESSION['get_name'] = "";
$_SESSION['get_course'] = "";
$_SESSION['staff_user'] = "";
$_SESSION['get_instructor'] = "";

$errors = array();
$success = array();
if (isset($_POST['btn_log'])) {
	
	$user = filter_input(INPUT_POST,"txtuser");
    $pass = filter_input(INPUT_POST,"txtpass");
    $active = "active";

    if (!empty($user)) {
    	if (!empty($pass)) {

    		$password = md5($pass);

	    		$qry = "SELECT * from tbl_accounts where user = '$user' AND pass = '$password' AND status = '$active'";
			    $result  = mysqli_query($db, $qry);

			    if (mysqli_num_rows($result) == 1) {

			    	session_regenerate_id();
					$member = mysqli_fetch_assoc($result);
					$_SESSION['ID'] = $member['id'];
					$_SESSION['Firstname'] = $member['fname'];
					$_SESSION['Lastname'] = $member['lname'];
					$_SESSION['Middlename'] = $member['mname'];
					$_SESSION['Typo'] = $member['type'];
					$_SESSION['pass'] = $member['pass'];
					$_SESSION['gen'] = $member['sex'];
					$_SESSION['email'] = $member['email'];
					$_SESSION['user'] = $member['user'];
			    	$_SESSION['picture'] = $member['picture'];
			    	$_SESSION['username'] = $_SESSION['user'];

			    	header('location: index.php');
			    }
			    else
			    {
			    	array_push($errors, "Inccorect Username or password!");
			    }
    	}
    	else
    	{
    		array_push($errors, "Please include your password");
    	}
    }
    else
    {
    	array_push($errors, "Please include your username!");
    }
}

if (isset($_POST['btn_activate']))
{
	$user = filter_input(INPUT_POST,"txtAct");
    $course = filter_input(INPUT_POST,"txtCourse");
    $unactive = "unactive";

	if (!empty($user)){
		if (!empty($course)) {
			$query = "SELECT * FROM tbl_accounts where user = '$user' AND course = '$course' AND status = '$unactive'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				
				$qry = "UPDATE tbl_accounts set status = 'active' where user = '$user'";
				$exec = mysqli_query($db , $qry);
				$db = null;

				array_push($success, "Your account has been successfully activated!.<br> Try to log in it now your username is also your default password!");	
			}
			else
			{
				array_push($errors, "Make sure that you are putting correct credentials<br> or make sure that the account is not activated yet!");
			}
		}
		else
		{
			array_push($errors, "Please include your course!");
		}
	}
	else
	{
		array_push($errors, "Please include your username!");
	}

}
?>