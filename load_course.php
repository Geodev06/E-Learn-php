<style type="text/css">
	td {
		font-size: 13px;
		font-family: 'Arial';
		border-bottom : 1px solid seagreen;
	}
	tr{
		font-size: 12px;
		transition: background-color .5s;
	}
	i{
		transform: scale(1);
		cursor: pointer;
	}
	i:hover {
		transition: transform .1s;
		transform: scale(1.1);
	}
	tr:nth-child(even) {
    background-color: gainsboro;
	}
	tr:hover {
    background-color: rgb(66,66,66);
    color: white;
    border-bottom: 2px solid cyan;
	}
	thead {
		background-color: rgb(66,66,66);
		color: white;
	}
</style>
<?php  
	$server ='127.0.0.1';
	$user = 'root';
	$pass = '';
	$dbname = 'elearn';
	$db = mysqli_connect($server, $user, $pass, $dbname);
	$qry ="SELECT Code, Course_name,description,Units, Dept from tbl_course";
	$result = mysqli_query($db, $qry);
	if ($result) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr id='row'>
        <td>". $row["Code"]. "</td>
        <td>". $row["Course_name"]. "</td>
        <td>" . $row["description"]. "</td>
        <td> " . $row["Units"]. "</td>
        <td>" . $row["Dept"]. "</td>
        <td>" ."<i class = 'fas fa-edit text-primary edit' data-toggle='modal' data-target='#myModalUpdate'  data-id = '{$row["Code"]}'></i>"." | "."<i class = 'fas fa-trash text-danger del' data-toggle='modal' data-target='#myModalDelete' data-id = '{$row["Code"]}'></i>"."</td>
        </tr>";
    }
	} else {
    echo "No Records found!";
	}
?>
<script type="text/javascript">

	$(document).ready(function(){
		
		$(document).on("click",".edit",function(){
			var row = $(this);
			var id = $(this).attr("data-id");

			var Course_name = row.closest("tr").find("td:eq(1)").text();
			$("#txtcoursename").val(Course_name);

			var Course_desc = row.closest("tr").find("td:eq(2)").text();
			$("#txtcourseDesc").val(Course_desc);

			var Units = row.closest("tr").find("td:eq(3)").text();
			$("#txtUnits").val(Units);

			var dept = row.closest("tr").find("td:eq(4)").text();
			$("#txtDept").val(dept);

			$("#id").val(id); 
		});

		$(document).on("click",".del",function(){
			var row = $(this);
			var id = $(this).attr("data-id");
			var idtd = $(this).attr("data-id");

			var cname = row.closest("tr").find("td:eq(1)").text();

			$("#txtc").text("Course name : "+ cname);

			$("#idd").text("Course code : "+id);
			$("#idtd").val(idtd);
		});
	});

</script>