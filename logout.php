 <?php
 session_start();
 $_SESSION ["username"]="";
 $_SESSION['get_name'] = "";
$_SESSION['get_course'] = "";
$_SESSION['staff_user'] = "";
$_SESSION['get_instructor'] = "";
 session_destroy();
 header("location: login.php");
 ?>