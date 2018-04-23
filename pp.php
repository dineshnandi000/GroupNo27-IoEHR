<?php 
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$id = $_POST['id'];
$idtype = $_POST['idtype'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$bt = $_POST['bt'];
$sugar = $_POST['sugar'];
$bp = $_POST['bp'];
$phone = $_POST['number'];

$msg ="";

$target = "images/".basename($_FILES['image']['name']);
$con = mysqli_connect("localhost", "root", "");
if(!$con){
	die('Could not connect:'.mysqli_error());
	}


mysqli_select_db($con, "patient");
$image = $_FILES['image']['name'];
$query = "INSERT INTO patientdata( first_name, middle_name, last_name, id, id_type,DOB, number,age,gender, address, blood_group, sugar_level, blood_pressure, image) VALUES('$firstname','$middlename','$lastname', '$id', '$idtype','$dob','$phone','$age',
 '$gender','$address', '$bt', '$sugar', '$bp', '$image')";
if(isset($_POST['upload'])){
	
	
	
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		$msg = "image uploaded";
				
		}
		else{
			$msg = "problem uploading image";
		}

}
 if(!mysqli_query($con,$query))
{
	die('Error in inserting records '.mysqli_error($con));
	}else{
		if(!is_dir('uploads/'.$id)){
		mkdir('uploads/'.$id,0777,true);}
		
	echo "Data inserted";
	//header("Refresh: 2; url=index.php");
}
?>