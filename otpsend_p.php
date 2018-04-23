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

if(isset($_GET['number'])){
	
	$number = $_GET['number'];
	$_SESSION['number']= $number;
}
$_SESSION["API_KEY"] = "04916fd8-a79e-11e7-94da-0200cd936042";
// this is it's actual use to check number is set or not
function sendSMS($number){
	
	$AUTO_GEN ="/AUTOGEN";
	$curl = curl_init();
	
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://2factor.in/API/V1/" .$_SESSION["API_KEY"] . "/SMS/+91" . $number . $AUTO_GEN, 
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST"
	  //CURLOPT_POSTFIELDS => " {\"From\": \  " {0Se2n2derId}\",\"To\": \"{CommaSeparatedContacts}\", \"Msg\": \"{MessageBody}\", \"SendAt\": \"{OptionScheduleTime}\"}",
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  return 158;// error code for sms  sending error
	} else {
	  return $response;
	}
}

function verifyOTP($otp){
	
	$VERIFY ="/VERIFY/";
	$curl = curl_init();
	
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://2factor.in/API/V1/" . $_SESSION["API_KEY"] . "/SMS" . $VERIFY . $_SESSION["details"] . "/" . $otp, 
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST"
	  //CURLOPT_POSTFIELDS => " {\"From\": \  " {0Se2n2derId}\",\"To\": \"{CommaSeparatedContacts}\", \"Msg\": \"{MessageBody}\", \"SendAt\": \"{OptionScheduleTime}\"}",
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  return 258;// error code for sms verification
	} else {
	  return $response;
	}
}


function IsUserRegistered($number,$con){
	if($number=="" || empty($number)){
		//invalid data
		return 503;
	}else{
		//query for checking existance of user
		$query = "SELECT id from patientdata where number=$number";
		$res = mysqli_query($con,$query);
		$res = mysqli_fetch_array($res);
		if(empty($res)){
			return false;
		}else{
			return true; 
		}
	}
}
$con = mysqli_connect("localhost", "root", "");
if(!$con){
	die('Could not connect:'.mysqli_error());
}
	
mysqli_select_db($con, "patient");
	
if(isset($_GET["submit"])){
	if(isset($_GET["number"])){
		//IsUserRegistered($_GET["number"],$con);
		if(IsUserRegistered($_GET["number"],$con)){
			//user is registered
			$server_return = sendSMS($_GET["number"]);
			if($server_return == 158){
				echo "Internal error <br> Error: Sending failed";
			}else{
				$json_string = json_decode($server_return,true);
				//print_r($json_string);
				//echo $json_string["Status"];
				if($json_string["Status"]=== "Success"){
					//message sent succssfully 
					//save the session details for verification
					$_SESSION["details"] = $json_string["Details"];
					echo $_SESSION["details"];
					//$_SESSION["flag"] =true;
				}
			}
			echo "user is registered";
		}else{
			//new user redirect to registration page
			//echo "new user";
			//echo '</br>';
			//echo '<a href = "pp.html">Click here to register</a>';
			header("Location:pp.html");
		}
	}else{
		//csenatch the otp for user verfification
		$verification_Response = verifyOTP($_GET["otp"]);
		if($verification_Response == 258){
			echo "Error: <br> OTP Authentication failed , either wrong OTP is entered or connection time out occured. try again";
		}else{
			$json_string = json_decode($verification_Response,true);
			//print_r($json_string);
			//echo $json_string["Status"];
			
			if($json_string["Status"]=== "Success" && !($json_string["Status"] === "Error")){
				//user verification successful
				// redirect user to main page now
				//echo "success";
				//$string = $number; 
				
				//query main issue hai idhar zero row return ho raha hai
				$query = 'SELECT * FROM patientdata WHERE number=\'' . $_SESSION['number'] . '\'';
				$result = mysqli_query($con, $query);
				
				//print_r($result);
				
				if (!$result) {
					printf("Error: %s\n", mysqli_error($con));
					exit();
				}
				
				
				
				$rows = mysqli_fetch_array($result);
				//print_r($rows);
				
				
				echo"<br>";
				echo"<center>";
				echo "<table border=5>";
				echo"<tr>";
				echo"<td>First Name</td>";
				echo"<td>Last Name</td>";
				echo"<td>Age</td>";
				echo"<td>id</td>";
				echo"<td>id type</td>";
				echo"<td>DOB</td>";
				echo"<td>number</td>";
				echo"<td>gender</td>";
				echo"<td>address</td>";
				echo"<td>blood_group</td>";
				echo"<td>sugar_level</td>";
				echo"<td>blood_pressure</td>";
				echo"<td>image</td>";
				

				echo"</tr>";
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
						 $id=$rows['id'];
						echo $id;
						echo "</td>";
						
						echo "<td>";
						echo $rows['id_type'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['DOB'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['number'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['gender'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['address'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['blood_group'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['sugar_level'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['blood_pressure'];
						echo "</td>";
						
						echo "<td>";
						$img= $rows['image'];
						//echo"<a href='download.?dow=$target'>Download</a><br>";
						echo"<a href='images/$img' target='_blank'>view file</a>";
						
						echo "</td>";
						echo  "</tr>";
						
						
					
				 echo "</table>";
				 echo "<br/>";
				 echo "<table border=5>";
				echo"<tr>";
				echo"<td>Reports</td>";
						echo "<td>";
						//$doc= $rows['report'];
						//echo"<a href='download.?dow=$target'>Download</a><br>";
						//echo"<a href='uploads/$id/' target='_blank'>view file</a>";
						//echo dirname("uploads/$id/", 1);
						//echo "Here are our files";
$path = "uploads/$id/";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
   if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
       echo "<a href='$path/$file'>$file</a><br />";
     $i++;
   }
}
closedir($dh);
						echo "</td>";
						echo  "</tr>";
						
						
					
				 echo "</table>";
				 echo"</center>";
			}else{
				echo "error";
			}
			
		}
	}
}else{
	echo "Please enter valid 10 digit number";
}

if(isset($_GET["number"])){
	//take user input for otp he received
	$html = '
	<form action="./otpsend_p.php" method = "get">
		<label>Received OTP:<input type="text" name = "otp"/></label>
		<input type = "submit" name = "submit"/>
	</form>
	';
	
	echo $html;
}
?>
 <footer class="footer-basic-centered">

			<p class="footer-company-motto">&copy 2018 - Made with <span><i class="fas fa-heart"> </i></span> at VESIT

</p>
		
        </footer>
</body>
</html>


