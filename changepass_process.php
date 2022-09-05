<?php  
include 'connect.php';
$errors = array();
$success = array();
	
	$getpass = $_SESSION['pass'];
	$oldpass = md5($getpass);

	$txtold = $txtNpass = $txtCpass = "";

	$picture = $_SESSION['picture'];
	$user = $_SESSION['user'];

$server ='127.0.0.1';
$userdb = 'root';
$pass = '';
$dbname = 'elearn';

$db = mysqli_connect($server, $userdb, $pass, $dbname);
$txtold = $txtNpass = $txtCpass = "";
if (isset($_POST['btn_save'])) {
	
	$txtold = filter_input(INPUT_POST, "txtoldpass");
	$txtNpass = filter_input(INPUT_POST, "txtNpass");
	$txtCpass = filter_input(INPUT_POST, "txtCpass");
	$filebox = filter_input(INPUT_POST, "image");
	if (!empty($txtold)) {
			# code...
			if (!empty($txtNpass)) {
				# code...
				if (!empty($txtCpass)) {
					# code...
					if ($txtNpass == $txtCpass) {
						# code...

								$finalpass = md5($txtCpass);
								$passwordhash = md5($txtold);

								

					    		$qry = "SELECT * from tbl_accounts where user = '$user' AND pass = '$passwordhash'";
							    $result  = mysqli_query($db, $qry);

							    if (mysqli_num_rows($result) == 1) {

							    	$update = "UPDATE tbl_accounts set pass = '$finalpass' where user = '$user'";
							    	$res = mysqli_query($db, $update);
							    	array_push($success, "Changes in account setting has been successfully changed!");
							    	
							   
								}
								 else
							    {
							    	array_push($errors, "Incorrect oldpassword!");
							    }
					}
					else
					{
						array_push($errors, "Two password does not match!");
					}	
				}
				else
				{
					array_push($errors, "Please confirm! your password!");
				}
			}
			else
			{
				array_push($errors, "Please type New password!");
			}
		}
		else
		{
			array_push($errors, "Please type Oldpassword!");
		}

}

if (isset($_POST['btn_change_p'])) {
	
								$fileinfo=PATHINFO($_FILES["image"]["name"]);
								$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
								move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $newFilename);
								$location="uploads/" . $newFilename;

								$imageFileType = strtolower(pathinfo($newFilename,PATHINFO_EXTENSION));

								if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
								&& $imageFileType != "gif" ) {
								  
									array_push($errors, "Invalid Image file type!");
								}
								else
								{
									if (!empty($location)) {
										$update = "UPDATE tbl_accounts set picture = '$location' where user = '$user'";
								    	$res = mysqli_query($db, $update);

								    	$reload = "SELECT * from tbl_accounts where user = '$user' AND pass = '$getpass'";
								    	$ress = mysqli_query($db,$reload);

								    	 if (mysqli_num_rows($ress) == 1)
								    	 {

										    	session_regenerate_id();
												$member = mysqli_fetch_assoc($ress);
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
										    	header('location: account_setting.php');
										  }
									}
									else
									{
										array_push($errors, "Oops! something went wrong!");
									}
								}

}
?>