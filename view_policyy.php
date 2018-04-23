<html>
<head>
<title>OTP</title>
<link rel="stylesheet" href="style.css" type="text/css" >
</head>
<body>
 <div class="iehr">
 <img src="logo.png" align="left" >
  <center><h1>Interoperability of Electronic Health Record</h1></center>
 </div>
<div class="iehr">


</h4>

</div>



	
	<?php
session_start(); 
if (isset($_SESSION['username'])) : 
    	echo $_SESSION['username']; 
		
   endif;


$con = mysqli_connect("localhost", "root", "");
if(!$con){
	die('Could not connect:'.mysqli_error());
}
	
mysqli_select_db($con, "insurance");
if(isset($_GET["submit"])){
	$code= $_GET['Proposer_Code'];
	
if($query = "SELECT * FROM insurancedata WHERE  insurance='{$_SESSION["username"]}' AND Proposer_Code='{$code}'"){
//$query = "SELECT * FROM insurancedata WHERE  insurance='bajaj' AND Proposer_Code='{$code}'";
				$result = mysqli_query($con, $query);
				
				//print_r($result);
				
				if (!$result) {
					printf("Error: %s\n", mysqli_error($con));
					exit();
				}
				
				
				$rows = mysqli_fetch_array($result);
				
				//print_r($rows);
				if(!$rows){
					echo"<br>";
										echo"<center>";
					echo"<h1>Data not available</h1>";
					echo"<a href ='insurance_detail.php' style='text-decoration:none'>";
					echo"Make request</a>";
					echo"</center>";
					}
				
				elseif($rows){
					echo"<br>";
echo"<center>";
				echo "<table border=5>";
				echo"<tr>";
				echo"<td>ID</td>";
				echo"<td>Name</td>";
				echo"<td>Phone_Number</td>";
				echo"<td>Insurance</td>";
				echo"<td>Proposer_Code</td>";
				echo"<td>Policy_Previous</td>";
				echo"<td>Policy_Current</td>";
				
				echo"<td>Start_date</td>";
				echo"<td>end_date</td>";
				echo"<td>Sector</td>";
				echo"<td>Any Medical Condition</td>";
				
				echo"</tr>";
				echo  "<tr>";
						
						echo  "<td>";
						echo $rows['id'];
						echo  "</td>";
						
						echo  "<td>";
						echo $rows['name'];
						echo  "</td>";
						
						echo  "<td>";
						echo $rows['number'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['insurance'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['Proposer_Code'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['Policy_Previous'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['Policy_Current'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['start_date'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['End_date'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['sector'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['med'];
						echo "</td>";
						
						echo  "</tr>";
						
						
					
echo "</table>";
echo"</center>";}}}




				 ?>
				 <footer class="footer-basic-centered">

			<p class="footer-company-motto">&copy 2018 - Made with <span><i class="fas fa-heart"> </i></span> at VESIT

</p>
		
        </footer>
</body>
</html>