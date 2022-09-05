<style type="text/css">
	td {
		font-size: 16px;
		font-family: 'Calibri light';
		border-bottom : 2px solid seagreen;
	}
	tr{
		font-size: 12px;
	}
	i{
		transform: scale(1);
		cursor: pointer;
	}
	i:hover {
		transition: transform .1s;
		transform: scale(1.1);
	}
</style>
<?php  
	$server ='127.0.0.1';
	$user = 'root';
	$pass = '';
	$dbname = 'elearn';
	$db = mysqli_connect($server, $user, $pass, $dbname);
	$qry ="SELECT user,pass,email,sex, type, status,picture from tbl_accounts";
	$result = mysqli_query($db, $qry);
	if ($result) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr id='row'>
        <td>" ."<img src='".$row["picture"]."' height='40px'; width ='40px'>"."  ".$row["user"]. "</td>
        <td>". $row["pass"]. "</td>
        <td>" . $row["email"]. "</td>
        <td>" . $row["sex"]. "</td>
        <td>" . $row["type"]. "</td>
        <td>" . $row["status"]. "</td>
        <td class='pl-4'>" ."<i class = 'fas fa-trash text-danger del' data-toggle='modal' data-target='#myModalDelete' data-id = '{$row["user"]}'></i>".
        "</td>
        </tr>";
    }
	} else {
    echo "No Records found!";
	}
?>
<script type="text/javascript">

	$(document).ready(function(){

		$(document).on("click",".del",function(){
			var row = $(this);
			var id = $(this).attr("data-id");
			$("#idel").val(id);
		});
	});

</script>