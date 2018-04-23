<?php
session_start();

include_once 'dbconfig.php';
$id = $_POST['id'];

if(isset($_POST['btn-upload'])) 
{    
//if(!is_dir('uploads/'.$id)){
//$folder=mkdir('uploads/'.$id,0777,true)
//}

   // if
	//{mkdir('uploads/'.$id,0777,true};
	$date=date("Y-m-d ");
	$file = $date."-".$_FILES['report']['name']; 
    $file_loc = $_FILES['report']['tmp_name'];
	$file_size = $_FILES['report']['size'];
	$file_type = $_FILES['report']['type'];
	$folder="uploads/".$id."/";
		
		// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		mysqli_query($con, "UPDATE patientdata SET report='$final_file' WHERE id='$id' "); 
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='index1.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='index1.php?fail';
        </script>
		<?php
	}
}
?>