
<?php
session_start();
//$number1 = $_SESSION['number'];
//$number1 = $_GET['number'];
$number = isset($_GET['number']);
$con = mysqli_connect("localhost", "root", "");
if(!$con){
	die('Could not connect:'.mysqli_error());
	}

mysqli_select_db($con, "patient");
if($number){
$query = "SELECT * FROM patientdata WHERE phone_number='$number'";
$result = mysqli_query($con, $query);

echo "<table border=5>";
echo"<tr>";
echo"<td>First Name</td>";
echo"<td>Last Name</td>";
echo"<td>Age</td>";
echo"<td>id</td>";
echo"<td>DOB</td>";


echo"</tr>";

	
      while ($rows = mysqli_fetch_array($result))
      {
		
		echo  "<tr>";
		
		echo  "<td>";
        echo $rows['first_name'];
		echo  "</td>";
		
		echo  "<td>";
		echo $rows['last_name'];
		echo  "</td>";
		
		echo  "<td>";
		echo $rows['age'];
		echo "</td>";
		
		echo "<td>";
		echo $rows['id'];
		echo "</td>";
		
		echo  "<td>";
		echo $rows['DOB'];
		echo  "</td>";
		echo  "<tr>";
		
		
	
} echo "</table>";} 
    
	else {
        echo "Nothing found!!!";
           
    }

	
   
	
?>
