<?php 
$server = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "elearn";
try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed" . $e->getMessage();
}

$sub1 = $sub2 = $sub3 = $sub4 = $sub5 = $sub6 = $sub7 = $sub8 = "";
$cbyear = $cbsem = $cbcourse = "--Choose one--";
$errors = array();
$success = array();
	if (isset($_POST["btnSave_sub"])) {
		
		$sub1 = filter_input(INPUT_POST, "sub1");
		$sub2 = filter_input(INPUT_POST, "sub2");
		$sub3 = filter_input(INPUT_POST, "sub3");
		$sub4 = filter_input(INPUT_POST, "sub4");
		$sub5 = filter_input(INPUT_POST, "sub5");
		$sub6 = filter_input(INPUT_POST, "sub6");
		$sub7 = filter_input(INPUT_POST, "sub7");
		$sub8 = filter_input(INPUT_POST, "sub8");
		$cbyear = filter_input(INPUT_POST, "cbyear");
		$cbsem = filter_input(INPUT_POST, "cbsem");
		$cbcourse = filter_input(INPUT_POST, "cbcourse");

		$full_course = $cbcourse."-".$cbyear."-".$cbsem;
		if ($cbyear!="--Choose one--") {
			# code...
			if ($cbsem!="--Choose one--") {
				# code...
				if ($cbcourse!="--Choose one--") {
					# code...

					try {

						$qry = $conn->prepare("INSERT into tbl_subjects(Course_name,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8)values(:Course_name,:sub1,:sub2,:sub3,:sub4,:sub5,:sub6,:sub7,:sub8)");
						$qry->bindParam(":Course_name",$full_course);
						$qry->bindParam(":sub1",$sub1);
						$qry->bindParam(":sub2",$sub2);
						$qry->bindParam(":sub3",$sub3);
						$qry->bindParam(":sub4",$sub4);
						$qry->bindParam(":sub5",$sub5);
						$qry->bindParam(":sub6",$sub6);
						$qry->bindParam(":sub7",$sub7);
						$qry->bindParam(":sub8",$sub8);
						$qry->execute();

						$qry1 = $conn->prepare("INSERT into tbl_sub_set1 (subjects,fullcourse)values(:sub,:fullcourse)");
						$qry1->bindParam(":sub",$sub1);
						$qry1->bindParam(":fullcourse",$full_course);
						$qry1->execute();

						$qry2 = $conn->prepare("INSERT into tbl_sub_set1 (subjects,fullcourse)values(:sub,:fullcourse)");
						$qry2->bindParam(":sub",$sub2);
						$qry2->bindParam(":fullcourse",$full_course);
						$qry2->execute();

						$qry3 = $conn->prepare("INSERT into tbl_sub_set1 (subjects,fullcourse)values(:sub,:fullcourse)");
						$qry3->bindParam(":sub",$sub3);
						$qry3->bindParam(":fullcourse",$full_course);
						$qry3->execute();

						$qry4 = $conn->prepare("INSERT into tbl_sub_set1 (subjects,fullcourse)values(:sub,:fullcourse)");
						$qry4->bindParam(":sub",$sub4);
						$qry4->bindParam(":fullcourse",$full_course);
						$qry4->execute();

						$qry5 = $conn->prepare("INSERT into tbl_sub_set1 (subjects,fullcourse)values(:sub,:fullcourse)");
						$qry5->bindParam(":sub",$sub5);
						$qry5->bindParam(":fullcourse",$full_course);
						$qry5->execute();

						$qry6 = $conn->prepare("INSERT into tbl_sub_set1 (subjects,fullcourse)values(:sub,:fullcourse)");
						$qry6->bindParam(":sub",$sub6);
						$qry6->bindParam(":fullcourse",$full_course);
						$qry6->execute();

						$qry7 = $conn->prepare("INSERT into tbl_sub_set1 (subjects,fullcourse)values(:sub,:fullcourse)");
						$qry7->bindParam(":sub",$sub7);
						$qry7->bindParam(":fullcourse",$full_course);
						$qry7->execute();

						$qry8 = $conn->prepare("INSERT into tbl_sub_set1 (subjects,fullcourse)values(:sub,:fullcourse)");
						$qry8->bindParam(":sub",$sub8);
						$qry8->bindParam(":fullcourse",$full_course);
						$qry8->execute();


						$cbyear = $cbsem = $cbcourse = "--Choose one--";
						$sub1 = $sub2 = $sub3 = $sub4 = $sub5 = $sub6 = $sub7 = $sub8 = "";
						$conn = null;

						array_push($success, "Successfully added!");

					} catch (Exception $e) {

						array_push($errors, "Oops!, Something went wrong!<br>Duplicated entry for setting subjects for this course and semester has been detected!");
					}
				}
				else
				{
					array_push($errors, "Please choose course!");
				}
			}
			else
			{
				array_push($errors, "Please choose semester!");
			}
		}
		else
		{
			array_push($errors, "Please choose year!");
		}

	}
?>