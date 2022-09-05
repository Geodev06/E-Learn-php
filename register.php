<?php  
include 'connect.php';
$errors = array();
$success = array();
$fname = $mname = $lname = $email = $cor = "";
$bdate = "";
if (isset($_POST['btn_reg']))
{
    $fname = filter_input(INPUT_POST,"txtfn");
    $mname = filter_input(INPUT_POST,"txtmn");
    $lname = filter_input(INPUT_POST,"txtln");
    $sex = filter_input(INPUT_POST, "sex");
    $bdate =filter_input(INPUT_POST, "bdate");
    $email = filter_input(INPUT_POST, "txtemail");
    $cbCourse = filter_input(INPUT_POST, "cbCourse");
    $cbType = filter_input(INPUT_POST, "cbType");
    $cor = filter_input(INPUT_POST, "txtcor");

    $str1 = "1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
    $user1 = str_shuffle($str1);
    $fnal1 = substr($user1, 57);

    $str2 = "1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
    $user2 = str_shuffle($str2);
    $fnal2 = substr($user2, 57);

    $generated_id_1 = strtoupper($fnal1);
    $generated_id_2 = strtoupper($fnal2);
    $gen_final = $generated_id_1."-".$generated_id_2;

    $username = $gen_final;
    $password = $gen_final;

    $picture = "img/default.jpg";
    $status = "unactive";
    $has_sched = "no";
    if (!empty($fname))
    {
        if(!empty($mname))
        {
            if (!empty($lname))
            {
                if (!empty($email))
                {
                    if (!empty($bdate))
                    {
                        if ($cbCourse!="--Choose one--")
                        {
                        if ($cbType!="--Choose one--")
                        {
                           if (!empty($cor))
                           {
                               try
                               {
                                $crypt = md5($gen_final);
                                $qry = $conn->prepare("Insert into tbl_accounts (user,pass,fname,mname,lname,sex,bday,email,course,type,cor_no,status,picture,has_sched)
                                values(:username,:password,:fname,:mname,:lname,:sex,:bdate,:email,:cbCourse,:cbType,:cor,:status,:pic,:has_sched)");
                                $qry->bindParam(":username",$username);
                                $qry->bindParam(":password",$crypt);
                                $qry->bindParam(":fname",$fname);
                                $qry->bindParam(":mname",$mname);
                                $qry->bindParam(":lname",$lname);
                                $qry->bindParam(":sex",$sex);
                                $qry->bindParam(":bdate",$bdate);
                                $qry->bindParam(":email",$email);
                                $qry->bindParam(":cbCourse",$cbCourse);
                                $qry->bindParam(":cbType",$cbType);
                                $qry->bindParam(":cor",$cor);
                                $qry->bindParam(":status",$status);
                                $qry->bindParam(":pic",$picture);
                                $qry->bindParam(":has_sched", $has_sched);
                                $qry->execute();
                                array_push($success, "Account created!<br><hr>"."Username : ".$gen_final."<br>"."Password : ".$gen_final);

                               }
                               catch (Exception $e)
                               {
                                    array_push($errors, "Oops!, Something went wrong please try again!");    
                               }
                           }
                           else
                           {
                            array_push($errors, "Please enter certificate of registration no.");
                           }
                        }
                        else
                        {
                            array_push($errors, "Please choose type of account!");
                        }
                    }
                    else
                    {
                        array_push($errors, "Please choose course!, if you don't have please choose N/A.");
                    }
                    }
                    else
                    {
                        array_push($errors, "Please pick your birthdate!");
                    }
                }
                else
                {
                    array_push($errors, "Please provide email address!");
                }
            }
            else
            {
                array_push($errors, "Please put your last name!");
            }
        }
        else
        {
            array_push($errors,"Please put your middle name!");
        }
    }
    else
    {
        array_push($errors, "Please put your first name!");
    }

}
?>