<?php 
$id = $_POST['id'];
$Policy_Previous = $_POST['Policy_Previous'];
$Policy_Current = $_POST['Policy_Current'];
$name = $_POST['name'];
$insurance = $_POST['insurance'];
$start_date = $_POST['start_date'];
$End_date = $_POST['End_date'];
$sector = $_POST['sector'];
$med = $_POST['med'];
$number = $_POST['number'];
$Proposer_Code = $_POST['Proposer_Code'];
$con = mysqli_connect("localhost", "root", "");
if(!$con){
	die('Could not connect:'.mysqli_error());
	}


mysqli_select_db($con, "insurance");
$query = "INSERT INTO insurancedata( id, name, number,insurance,Proposer_Code,Policy_Previous,Policy_Current,start_date,End_date, sector, med) VALUES('$id','$name',
'$number','$insurance','$Proposer_Code','$Policy_Previous','$Policy_Current','$start_date','$End_date','$sector','$med')";
$result = mysqli_query($con, $query);
 if(!$result)
{
	die('Error in inserting records '.mysqli_error($con));
	}else{
	echo "Data inserted";
	//header("Refresh: 2; url=index.php");
}
?>