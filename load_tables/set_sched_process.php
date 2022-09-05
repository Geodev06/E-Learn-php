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

	$db = mysqli_connect($server, $user, $pass, $dbname);

	$errors = array();
	$success = array();

	$staff_user = $_SESSION['staff_user'];
	$target_name = $_SESSION['get_name'];
	$target_course = $_SESSION['get_course'];
	#7
	$cbmon7 = filter_input(INPUT_POST, "cbmon7");
	$cbrmon7 = filter_input(INPUT_POST, "cbrmon7");

	$cbtue7 = filter_input(INPUT_POST, "cbtue7");
	$cbrtue7 = filter_input(INPUT_POST, "cbrtue7");

	$cbwed7 = filter_input(INPUT_POST, "cbwed7");
	$cbrwed7 = filter_input(INPUT_POST, "cbrwed7");

	$cbthur7 = filter_input(INPUT_POST, "cbthur7");
	$cbrthur7 = filter_input(INPUT_POST, "cbrthur7");

	$cbfri7 = filter_input(INPUT_POST, "cbfri7");
	$cbrfri7 = filter_input(INPUT_POST, "cbrfri7");

	$cbsat7 = filter_input(INPUT_POST, "cbsat7");
	$cbrsat7 = filter_input(INPUT_POST, "cbrsat7");

	$cbsun7 = filter_input(INPUT_POST, "cbsun7");
	$cbrsun7 = filter_input(INPUT_POST, "cbrsun7");

	#8
	$cbmon8 = filter_input(INPUT_POST, "cbmon8");
	$cbrmon8 = filter_input(INPUT_POST, "cbrmon8");

	$cbtue8 = filter_input(INPUT_POST, "cbtue8");
	$cbrtue8 = filter_input(INPUT_POST, "cbrtue8");

	$cbwed8 = filter_input(INPUT_POST, "cbwed8");
	$cbrwed8 = filter_input(INPUT_POST, "cbrwed8");

	$cbthur8 = filter_input(INPUT_POST, "cbthur8");
	$cbrthur8 = filter_input(INPUT_POST, "cbrthur8");

	$cbfri8 = filter_input(INPUT_POST, "cbfri8");
	$cbrfri8 = filter_input(INPUT_POST, "cbrfri8");

	$cbsat8 = filter_input(INPUT_POST, "cbsat8");
	$cbrsat8 = filter_input(INPUT_POST, "cbrsat8");

	$cbsun8 = filter_input(INPUT_POST, "cbsun8");
	$cbrsun8 = filter_input(INPUT_POST, "cbrsun8");

	#9
	$cbmon9 = filter_input(INPUT_POST, "cbmon9");
	$cbrmon9 = filter_input(INPUT_POST, "cbrmon9");

	$cbtue9 = filter_input(INPUT_POST, "cbtue9");
	$cbrtue9 = filter_input(INPUT_POST, "cbrtue9");

	$cbwed9 = filter_input(INPUT_POST, "cbwed9");
	$cbrwed9 = filter_input(INPUT_POST, "cbrwed9");

	$cbthur9 = filter_input(INPUT_POST, "cbthur9");
	$cbrthur9 = filter_input(INPUT_POST, "cbrthur9");

	$cbfri9 = filter_input(INPUT_POST, "cbfri9");
	$cbrfri9 = filter_input(INPUT_POST, "cbrfri9");

	$cbsat9 = filter_input(INPUT_POST, "cbsat9");
	$cbrsat9 = filter_input(INPUT_POST, "cbrsat9");

	$cbsun9 = filter_input(INPUT_POST, "cbsun9");
	$cbrsun9 = filter_input(INPUT_POST, "cbrsun9");

	#10
	$cbmon10 = filter_input(INPUT_POST, "cbmon10");
	$cbrmon10 = filter_input(INPUT_POST, "cbrmon10");

	$cbtue10 = filter_input(INPUT_POST, "cbtue10");
	$cbrtue10 = filter_input(INPUT_POST, "cbrtue10");

	$cbwed10 = filter_input(INPUT_POST, "cbwed10");
	$cbrwed10 = filter_input(INPUT_POST, "cbrwed10");

	$cbthur10 = filter_input(INPUT_POST, "cbthur10");
	$cbrthur10 = filter_input(INPUT_POST, "cbrthur10");

	$cbfri10 = filter_input(INPUT_POST, "cbfri10");
	$cbrfri10 = filter_input(INPUT_POST, "cbrfri10");

	$cbsat10 = filter_input(INPUT_POST, "cbsat10");
	$cbrsat10 = filter_input(INPUT_POST, "cbrsat10");

	$cbsun10 = filter_input(INPUT_POST, "cbsun10");
	$cbrsun10 = filter_input(INPUT_POST, "cbrsun10");

	#11
	$cbmon11 = filter_input(INPUT_POST, "cbmon11");
	$cbrmon11 = filter_input(INPUT_POST, "cbrmon11");

	$cbtue11 = filter_input(INPUT_POST, "cbtue11");
	$cbrtue11 = filter_input(INPUT_POST, "cbrtue11");

	$cbwed11 = filter_input(INPUT_POST, "cbwed11");
	$cbrwed11 = filter_input(INPUT_POST, "cbrwed11");

	$cbthur11 = filter_input(INPUT_POST, "cbthur11");
	$cbrthur11 = filter_input(INPUT_POST, "cbrthur11");

	$cbfri11 = filter_input(INPUT_POST, "cbfri11");
	$cbrfri11 = filter_input(INPUT_POST, "cbrfri11");

	$cbsat11 = filter_input(INPUT_POST, "cbsat11");
	$cbrsat11 = filter_input(INPUT_POST, "cbrsat11");

	$cbsun11 = filter_input(INPUT_POST, "cbsun11");
	$cbrsun11 = filter_input(INPUT_POST, "cbrsun11");

	#12
	$cbmon12 = filter_input(INPUT_POST, "cbmon12");
	$cbrmon12 = filter_input(INPUT_POST, "cbrmon12");

	$cbtue12 = filter_input(INPUT_POST, "cbtue12");
	$cbrtue12 = filter_input(INPUT_POST, "cbrtue12");

	$cbwed12 = filter_input(INPUT_POST, "cbwed12");
	$cbrwed12 = filter_input(INPUT_POST, "cbrwed12");

	$cbthur12 = filter_input(INPUT_POST, "cbthur12");
	$cbrthur12 = filter_input(INPUT_POST, "cbrthur12");

	$cbfri12 = filter_input(INPUT_POST, "cbfri12");
	$cbrfri12 = filter_input(INPUT_POST, "cbrfri12");

	$cbsat12 = filter_input(INPUT_POST, "cbsat12");
	$cbrsat12 = filter_input(INPUT_POST, "cbrsat12");

	$cbsun12 = filter_input(INPUT_POST, "cbsun12");
	$cbrsun12 = filter_input(INPUT_POST, "cbrsun12");

	#1
	$cbmon1 = filter_input(INPUT_POST, "cbmon1");
	$cbrmon1 = filter_input(INPUT_POST, "cbrmon1");

	$cbtue1 = filter_input(INPUT_POST, "cbtue1");
	$cbrtue1 = filter_input(INPUT_POST, "cbrtue1");

	$cbwed1 = filter_input(INPUT_POST, "cbwed1");
	$cbrwed1 = filter_input(INPUT_POST, "cbrwed1");

	$cbthur1 = filter_input(INPUT_POST, "cbthur1");
	$cbrthur1 = filter_input(INPUT_POST, "cbrthur1");

	$cbfri1 = filter_input(INPUT_POST, "cbfri1");
	$cbrfri1 = filter_input(INPUT_POST, "cbrfri1");

	$cbsat1 = filter_input(INPUT_POST, "cbsat1");
	$cbrsat1 = filter_input(INPUT_POST, "cbrsat1");

	$cbsun1 = filter_input(INPUT_POST, "cbsun1");
	$cbrsun1 = filter_input(INPUT_POST, "cbrsun1");

	#2
	$cbmon2 = filter_input(INPUT_POST, "cbmon2");
	$cbrmon2 = filter_input(INPUT_POST, "cbrmon2");

	$cbtue2 = filter_input(INPUT_POST, "cbtue2");
	$cbrtue2 = filter_input(INPUT_POST, "cbrtue2");

	$cbwed2 = filter_input(INPUT_POST, "cbwed2");
	$cbrwed2 = filter_input(INPUT_POST, "cbrwed2");

	$cbthur2 = filter_input(INPUT_POST, "cbthur2");
	$cbrthur2 = filter_input(INPUT_POST, "cbrthur2");

	$cbfri2 = filter_input(INPUT_POST, "cbfri2");
	$cbrfri2 = filter_input(INPUT_POST, "cbrfri2");

	$cbsat2 = filter_input(INPUT_POST, "cbsat2");
	$cbrsat2 = filter_input(INPUT_POST, "cbrsat2");

	$cbsun2 = filter_input(INPUT_POST, "cbsun2");
	$cbrsun2 = filter_input(INPUT_POST, "cbrsun2");

	#3
	$cbmon3 = filter_input(INPUT_POST, "cbmon3");
	$cbrmon3 = filter_input(INPUT_POST, "cbrmon3");

	$cbtue3 = filter_input(INPUT_POST, "cbtue3");
	$cbrtue3 = filter_input(INPUT_POST, "cbrtue3");

	$cbwed3 = filter_input(INPUT_POST, "cbwed3");
	$cbrwed3 = filter_input(INPUT_POST, "cbrwed3");

	$cbthur3 = filter_input(INPUT_POST, "cbthur3");
	$cbrthur3 = filter_input(INPUT_POST, "cbrthur3");

	$cbfri3 = filter_input(INPUT_POST, "cbfri3");
	$cbrfri3 = filter_input(INPUT_POST, "cbrfri3");

	$cbsat3 = filter_input(INPUT_POST, "cbsat3");
	$cbrsat3 = filter_input(INPUT_POST, "cbrsat3");

	$cbsun3 = filter_input(INPUT_POST, "cbsun3");
	$cbrsun3 = filter_input(INPUT_POST, "cbrsun3");

	#4
	$cbmon4 = filter_input(INPUT_POST, "cbmon4");
	$cbrmon4 = filter_input(INPUT_POST, "cbrmon4");

	$cbtue4 = filter_input(INPUT_POST, "cbtue4");
	$cbrtue4 = filter_input(INPUT_POST, "cbrtue4");

	$cbwed4 = filter_input(INPUT_POST, "cbwed4");
	$cbrwed4 = filter_input(INPUT_POST, "cbrwed4");

	$cbthur4 = filter_input(INPUT_POST, "cbthur4");
	$cbrthur4 = filter_input(INPUT_POST, "cbrthur4");

	$cbfri4 = filter_input(INPUT_POST, "cbfri4");
	$cbrfri4 = filter_input(INPUT_POST, "cbrfri4");

	$cbsat4 = filter_input(INPUT_POST, "cbsat4");
	$cbrsat4 = filter_input(INPUT_POST, "cbrsat4");

	$cbsun4 = filter_input(INPUT_POST, "cbsun4");
	$cbrsun4 = filter_input(INPUT_POST, "cbrsun4");

	if (isset($_POST['btnset'])) {

		if (!empty($target_name)) {
			# code...
			if (!empty($target_course)) {
				# code...

				try {

					$qry = "INSERT into tbl_set_7(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Monday_r,Tuesday_r,Wednesday_r,Thursday_r,Friday_r,Saturday_r,Sunday_r,Instructor)values(:Monday,:Tuesday,:Wednesday,:Thursday,:Friday,:Saturday,:Sunday,:Monday_r,:Tuesday_r,:Wednesday_r,:Thursday_r,:Friday_r,:Saturday_r,:Sunday_r,:Instructor)";
					$stmt = $conn->prepare($qry);
					#date
					$stmt->bindParam(":Monday", $cbmon7);
					$stmt->bindParam(":Tuesday", $cbtue7);
					$stmt->bindParam(":Wednesday", $cbwed7);
					$stmt->bindParam(":Thursday", $cbthur7);
					$stmt->bindParam(":Friday", $cbfri7);
					$stmt->bindParam(":Saturday", $cbsat7);
					$stmt->bindParam(":Sunday", $cbsun7);
					#room
					$stmt->bindParam(":Monday_r", $cbrmon7);
					$stmt->bindParam(":Tuesday_r",$cbrtue7 );
					$stmt->bindParam(":Wednesday_r", $cbrwed7);
					$stmt->bindParam(":Thursday_r",  $cbrthur7);
					$stmt->bindParam(":Friday_r", $cbrfri7);
					$stmt->bindParam(":Saturday_r", $cbrsat7);
					$stmt->bindParam(":Sunday_r", $cbrsun7);

					$stmt->bindParam(":Instructor", $target_name);
					$stmt->execute();

					#8am
					$qry1 = "INSERT into tbl_set_8(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Monday_r,Tuesday_r,Wednesday_r,Thursday_r,Friday_r,Saturday_r,Sunday_r,Instructor)values(:Monday,:Tuesday,:Wednesday,:Thursday,:Friday,:Saturday,:Sunday,:Monday_r,:Tuesday_r,:Wednesday_r,:Thursday_r,:Friday_r,:Saturday_r,:Sunday_r,:Instructor)";
					$stmt1 = $conn->prepare($qry1);
					#date
					$stmt1->bindParam(":Monday", $cbmon8);
					$stmt1->bindParam(":Tuesday", $cbtue8);
					$stmt1->bindParam(":Wednesday", $cbwed8);
					$stmt1->bindParam(":Thursday", $cbthur8);
					$stmt1->bindParam(":Friday", $cbfri8);
					$stmt1->bindParam(":Saturday", $cbsat8);
					$stmt1->bindParam(":Sunday", $cbsun8);
					#room
					$stmt1->bindParam(":Monday_r", $cbrmon8);
					$stmt1->bindParam(":Tuesday_r",$cbrtue8 );
					$stmt1->bindParam(":Wednesday_r", $cbrwed8);
					$stmt1->bindParam(":Thursday_r",  $cbrthur8);
					$stmt1->bindParam(":Friday_r", $cbrfri8);
					$stmt1->bindParam(":Saturday_r", $cbrsat8);
					$stmt1->bindParam(":Sunday_r", $cbrsun8);

					$stmt1->bindParam(":Instructor", $target_name);
					$stmt1->execute();

					#9am
					$qry2 = "INSERT into tbl_set_9(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Monday_r,Tuesday_r,Wednesday_r,Thursday_r,Friday_r,Saturday_r,Sunday_r,Instructor)values(:Monday,:Tuesday,:Wednesday,:Thursday,:Friday,:Saturday,:Sunday,:Monday_r,:Tuesday_r,:Wednesday_r,:Thursday_r,:Friday_r,:Saturday_r,:Sunday_r,:Instructor)";
					$stmt2 = $conn->prepare($qry2);
					#date
					$stmt2->bindParam(":Monday", $cbmon9);
					$stmt2->bindParam(":Tuesday", $cbtue9);
					$stmt2->bindParam(":Wednesday", $cbwed9);
					$stmt2->bindParam(":Thursday", $cbthur9);
					$stmt2->bindParam(":Friday", $cbfri9);
					$stmt2->bindParam(":Saturday", $cbsat9);
					$stmt2->bindParam(":Sunday", $cbsun9);
					#room
					$stmt2->bindParam(":Monday_r", $cbrmon9);
					$stmt2->bindParam(":Tuesday_r",$cbrtue9 );
					$stmt2->bindParam(":Wednesday_r", $cbrwed9);
					$stmt2->bindParam(":Thursday_r",  $cbrthur9);
					$stmt2->bindParam(":Friday_r", $cbrfri9);
					$stmt2->bindParam(":Saturday_r", $cbrsat9);
					$stmt2->bindParam(":Sunday_r", $cbrsun9);

					$stmt2->bindParam(":Instructor", $target_name);
					$stmt2->execute();

					#10am
					$qry3 = "INSERT into tbl_set_10(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Monday_r,Tuesday_r,Wednesday_r,Thursday_r,Friday_r,Saturday_r,Sunday_r,Instructor)values(:Monday,:Tuesday,:Wednesday,:Thursday,:Friday,:Saturday,:Sunday,:Monday_r,:Tuesday_r,:Wednesday_r,:Thursday_r,:Friday_r,:Saturday_r,:Sunday_r,:Instructor)";
					$stmt3 = $conn->prepare($qry3);
					#date
					$stmt3->bindParam(":Monday", $cbmon10);
					$stmt3->bindParam(":Tuesday", $cbtue10);
					$stmt3->bindParam(":Wednesday", $cbwed10);
					$stmt3->bindParam(":Thursday", $cbthur10);
					$stmt3->bindParam(":Friday", $cbfri10);
					$stmt3->bindParam(":Saturday", $cbsat10);
					$stmt3->bindParam(":Sunday", $cbsun10);
					#room
					$stmt3->bindParam(":Monday_r", $cbrmon10);
					$stmt3->bindParam(":Tuesday_r",$cbrtue10);
					$stmt3->bindParam(":Wednesday_r", $cbrwed10);
					$stmt3->bindParam(":Thursday_r",  $cbrthur10);
					$stmt3->bindParam(":Friday_r", $cbrfri10);
					$stmt3->bindParam(":Saturday_r", $cbrsat10);
					$stmt3->bindParam(":Sunday_r", $cbrsun10);

					$stmt3->bindParam(":Instructor", $target_name);
					$stmt3->execute();

					#11
					$qry4 = "INSERT into tbl_set_11(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Monday_r,Tuesday_r,Wednesday_r,Thursday_r,Friday_r,Saturday_r,Sunday_r,Instructor)values(:Monday,:Tuesday,:Wednesday,:Thursday,:Friday,:Saturday,:Sunday,:Monday_r,:Tuesday_r,:Wednesday_r,:Thursday_r,:Friday_r,:Saturday_r,:Sunday_r,:Instructor)";
					$stmt4 = $conn->prepare($qry4);
					#date
					$stmt4->bindParam(":Monday", $cbmon11);
					$stmt4->bindParam(":Tuesday", $cbtue11);
					$stmt4->bindParam(":Wednesday", $cbwed11);
					$stmt4->bindParam(":Thursday", $cbthur11);
					$stmt4->bindParam(":Friday", $cbfri11);
					$stmt4->bindParam(":Saturday", $cbsat11);
					$stmt4->bindParam(":Sunday", $cbsun11);
					#room
					$stmt4->bindParam(":Monday_r", $cbrmon11);
					$stmt4->bindParam(":Tuesday_r",$cbrtue11);
					$stmt4->bindParam(":Wednesday_r", $cbrwed11);
					$stmt4->bindParam(":Thursday_r",  $cbrthur11);
					$stmt4->bindParam(":Friday_r", $cbrfri11);
					$stmt4->bindParam(":Saturday_r", $cbrsat11);
					$stmt4->bindParam(":Sunday_r", $cbrsun11);

					$stmt4->bindParam(":Instructor", $target_name);
					$stmt4->execute();

					#12
					$qry5 = "INSERT into tbl_set_12(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Monday_r,Tuesday_r,Wednesday_r,Thursday_r,Friday_r,Saturday_r,Sunday_r,Instructor)values(:Monday,:Tuesday,:Wednesday,:Thursday,:Friday,:Saturday,:Sunday,:Monday_r,:Tuesday_r,:Wednesday_r,:Thursday_r,:Friday_r,:Saturday_r,:Sunday_r,:Instructor)";
					$stmt5 = $conn->prepare($qry5);
					#date
					$stmt5->bindParam(":Monday", $cbmon12);
					$stmt5->bindParam(":Tuesday", $cbtue12);
					$stmt5->bindParam(":Wednesday", $cbwed12);
					$stmt5->bindParam(":Thursday", $cbthur12);
					$stmt5->bindParam(":Friday", $cbfri12);
					$stmt5->bindParam(":Saturday", $cbsat12);
					$stmt5->bindParam(":Sunday", $cbsun12);
					#room
					$stmt5->bindParam(":Monday_r", $cbrmon12);
					$stmt5->bindParam(":Tuesday_r",$cbrtue12);
					$stmt5->bindParam(":Wednesday_r", $cbrwed12);
					$stmt5->bindParam(":Thursday_r",  $cbrthur12);
					$stmt5->bindParam(":Friday_r", $cbrfri12);
					$stmt5->bindParam(":Saturday_r", $cbrsat12);
					$stmt5->bindParam(":Sunday_r", $cbrsun12);

					$stmt5->bindParam(":Instructor", $target_name);
					$stmt5->execute();

					#1
					$qry6 = "INSERT into tbl_set_1(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Monday_r,Tuesday_r,Wednesday_r,Thursday_r,Friday_r,Saturday_r,Sunday_r,Instructor)values(:Monday,:Tuesday,:Wednesday,:Thursday,:Friday,:Saturday,:Sunday,:Monday_r,:Tuesday_r,:Wednesday_r,:Thursday_r,:Friday_r,:Saturday_r,:Sunday_r,:Instructor)";
					$stmt6 = $conn->prepare($qry6);
					#date
					$stmt6->bindParam(":Monday", $cbmon1);
					$stmt6->bindParam(":Tuesday", $cbtue1);
					$stmt6->bindParam(":Wednesday", $cbwed1);
					$stmt6->bindParam(":Thursday", $cbthur1);
					$stmt6->bindParam(":Friday", $cbfri1);
					$stmt6->bindParam(":Saturday", $cbsat1);
					$stmt6->bindParam(":Sunday", $cbsun1);
					#room
					$stmt6->bindParam(":Monday_r", $cbrmon1);
					$stmt6->bindParam(":Tuesday_r",$cbrtue1);
					$stmt6->bindParam(":Wednesday_r", $cbrwed1);
					$stmt6->bindParam(":Thursday_r",  $cbrthur1);
					$stmt6->bindParam(":Friday_r", $cbrfri1);
					$stmt6->bindParam(":Saturday_r", $cbrsat1);
					$stmt6->bindParam(":Sunday_r", $cbrsun1);

					$stmt6->bindParam(":Instructor", $target_name);
					$stmt6->execute();

					#2
					$qry7 = "INSERT into tbl_set_2(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Monday_r,Tuesday_r,Wednesday_r,Thursday_r,Friday_r,Saturday_r,Sunday_r,Instructor)values(:Monday,:Tuesday,:Wednesday,:Thursday,:Friday,:Saturday,:Sunday,:Monday_r,:Tuesday_r,:Wednesday_r,:Thursday_r,:Friday_r,:Saturday_r,:Sunday_r,:Instructor)";
					$stmt7 = $conn->prepare($qry7);
					#date
					$stmt7->bindParam(":Monday", $cbmon2);
					$stmt7->bindParam(":Tuesday", $cbtue2);
					$stmt7->bindParam(":Wednesday", $cbwed2);
					$stmt7->bindParam(":Thursday", $cbthur2);
					$stmt7->bindParam(":Friday", $cbfri2);
					$stmt7->bindParam(":Saturday", $cbsat2);
					$stmt7->bindParam(":Sunday", $cbsun2);
					#room
					$stmt7->bindParam(":Monday_r", $cbrmon2);
					$stmt7->bindParam(":Tuesday_r",$cbrtue2);
					$stmt7->bindParam(":Wednesday_r", $cbrwed2);
					$stmt7->bindParam(":Thursday_r",  $cbrthur2);
					$stmt7->bindParam(":Friday_r", $cbrfri2);
					$stmt7->bindParam(":Saturday_r", $cbrsat2);
					$stmt7->bindParam(":Sunday_r", $cbrsun2);

					$stmt7->bindParam(":Instructor", $target_name);
					$stmt7->execute();

					#3
					$qry8 = "INSERT into tbl_set_3(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Monday_r,Tuesday_r,Wednesday_r,Thursday_r,Friday_r,Saturday_r,Sunday_r,Instructor)values(:Monday,:Tuesday,:Wednesday,:Thursday,:Friday,:Saturday,:Sunday,:Monday_r,:Tuesday_r,:Wednesday_r,:Thursday_r,:Friday_r,:Saturday_r,:Sunday_r,:Instructor)";
					$stmt8 = $conn->prepare($qry8);
					#date
					$stmt8->bindParam(":Monday", $cbmon3);
					$stmt8->bindParam(":Tuesday", $cbtue3);
					$stmt8->bindParam(":Wednesday", $cbwed3);
					$stmt8->bindParam(":Thursday", $cbthur3);
					$stmt8->bindParam(":Friday", $cbfri3);
					$stmt8->bindParam(":Saturday", $cbsat3);
					$stmt8->bindParam(":Sunday", $cbsun3);
					#room
					$stmt8->bindParam(":Monday_r", $cbrmon3);
					$stmt8->bindParam(":Tuesday_r",$cbrtue3);
					$stmt8->bindParam(":Wednesday_r", $cbrwed3);
					$stmt8->bindParam(":Thursday_r",  $cbrthur3);
					$stmt8->bindParam(":Friday_r", $cbrfri3);
					$stmt8->bindParam(":Saturday_r", $cbrsat3);
					$stmt8->bindParam(":Sunday_r", $cbrsun3);

					$stmt8->bindParam(":Instructor", $target_name);
					$stmt8->execute();

					#4
					$qry9 = "INSERT into tbl_set_4(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Monday_r,Tuesday_r,Wednesday_r,Thursday_r,Friday_r,Saturday_r,Sunday_r,Instructor)values(:Monday,:Tuesday,:Wednesday,:Thursday,:Friday,:Saturday,:Sunday,:Monday_r,:Tuesday_r,:Wednesday_r,:Thursday_r,:Friday_r,:Saturday_r,:Sunday_r,:Instructor)";
					$stmt9 = $conn->prepare($qry9);
					#date
					$stmt9->bindParam(":Monday", $cbmon4);
					$stmt9->bindParam(":Tuesday", $cbtue4);
					$stmt9->bindParam(":Wednesday", $cbwed4);
					$stmt9->bindParam(":Thursday", $cbthur4);
					$stmt9->bindParam(":Friday", $cbfri4);
					$stmt9->bindParam(":Saturday", $cbsat4);
					$stmt9->bindParam(":Sunday", $cbsun4);
					#room
					$stmt9->bindParam(":Monday_r", $cbrmon4);
					$stmt9->bindParam(":Tuesday_r",$cbrtue4);
					$stmt9->bindParam(":Wednesday_r", $cbrwed4);
					$stmt9->bindParam(":Thursday_r",  $cbrthur4);
					$stmt9->bindParam(":Friday_r", $cbrfri4);
					$stmt9->bindParam(":Saturday_r", $cbrsat4);
					$stmt9->bindParam(":Sunday_r", $cbrsun4);

					$stmt9->bindParam(":Instructor", $target_name);
					$stmt9->execute();


					$update_accounts = "UPDATE tbl_accounts set has_sched = 'yes' where user = '$staff_user'";
					$result = $conn->prepare($update_accounts);
					$result->execute();




				

					if ($result) {
						# code...

					$_SESSION['get_name'] = "";
					$target_name = "";
					$_SESSION['get_course'] = "";
					$target_course = "";
					$_SESSION['staff_user'] = "";
					array_push($success, "Data Inserted successfully!");
					}
					else

					{

					}


					
				} catch (Exception $e) {
					array_push($errors, "Data not Inserted!");
				}


			}
			else
			{
				array_push($errors, "Please pick target course first!");
			}
		}
		else
		{
			array_push($errors, "Please pick instructor's name first!");
		}

	}
?>