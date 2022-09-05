<?php  

$errors = array();
$success = array();
$code = "";
$coursename = $courseunit = $dept = $coursedesc = "";
include 'connect.php';

if (isset($_POST['btn_Save'])) {
	
    $coursename = filter_input(INPUT_POST,"txtcoursename");
    $courseunit = filter_input(INPUT_POST,"txtcourseunit");
    $dept= filter_input(INPUT_POST, "txtdept");
    $coursedesc = filter_input(INPUT_POST, "txtdesc");

    $str1 = "1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
    $user1 = str_shuffle($str1);
    $fnal1 = substr($user1, 57);

    $str2 = "1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
    $user2 = str_shuffle($str2);
    $fnal2 = substr($user2, 57);

    $generated_id_1 = strtoupper($fnal1);
    $generated_id_2 = strtoupper($fnal2);
    $gen_final = $generated_id_1."-".$generated_id_2;

    if (!empty($coursename)) {
    	# code...
    	if (!empty($coursedesc)) {
    		# code...
    		if (!empty($courseunit)) {
    			# code...
    			if (!empty($dept)) {
    				# code...

    				try {
    				$qry  = $conn->prepare("Insert into tbl_course(Code,Course_name,description,Units,Dept)values(:generated,:coursename,:desc,:courseunit,:dept)");
    				$qry->bindParam(":generated",$gen_final);
    				$qry->bindParam(":coursename",$coursename);
    				$qry->bindParam(":desc",$coursedesc);
    				$qry->bindParam(":courseunit",$courseunit);
    				$qry->bindParam(":dept",$dept);
    				$qry->execute();
    				$conn = null;

    				array_push($success, "Course has been succesfully registered!");
    					
    				} catch (Exception $e) {
    					
    					array_push($errors, "Oops!, Something went wrong!<br>Try to clear the fields first!<br>We are avoiding duplicates of entry for coursename!");	
    				}

    			}
    			else
    			{
    				array_push($errors, "Please include the department!");
    			}
    		}
    		else
    		{
    			array_push($errors, "Please include course unit!");
    		}
    	}
    	else
    	{
    		array_push($errors, "Please include course description!");
    	}
    }
    else
    {
    	array_push($errors, "Please include course name!");
    }
 }
?>