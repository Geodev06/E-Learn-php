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
	td:hover {
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
	$qry ="SELECT * from tbl_set_7 where Instructor = ''";
	$result = mysqli_query($db, $qry);
	if ($result) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr id='row'>
        <td>"."7:00-8:00am". "</td>
        <td>"."Subject :<b>". $row["Monday"]."</b><br> room : <b>".$row["Monday_r"]. "</td>
        <td>"."Subject :<b>". $row["Tuesday"]. "</b><br> room : <b>".$row["Tuesday_r"]."</td>
        <td>" . "Subject :<b>".$row["Wednesday"]. "</b><br> room : <b>".$row["Wednesday_r"]."</td>
        <td> " ."Subject :<b>". $row["Thursday"]. "</b><br> room : <b>".$row["Thursday_r"]."</td>
        <td>" . "Subject :<b>".$row["Friday"]. "</b><br> room : <b>".$row["Friday_r"]."</td>
        <td>" ."Subject :<b>". $row["Saturday"]."</b><br> room : <b>".$row["Saturday_r"]. "</td>
        <td>" . "Subject :<b>".$row["Sunday"]. "</b><br> room : <b>".$row["Sunday_r"]."</td>
        <td>" ."<i class = 'fas fa-edit text-primary edit' data-toggle='modal' data-target='#myModalUpdate'  data-id = '{$row["Instructor"]}'></i>"."</td>
        </tr>";
    }
	} else {
    echo "No Records found!";
	}
?>