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

function NoAccount(){
$server ='127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'elearn';
$db = mysqli_connect($server, $user, $pass, $dbname);
$query = "SELECT * FROM tbl_accounts";
$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results) == 0) {
		print"<script>window.location.href='account_registration.php';</script>";
	}
}
?>