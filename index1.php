<?php
include_once 'dbconfig.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>IEHR upload</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="iehr">
 <img src="logo.png" align="left" >
<label><h1><center>Interoperability of Electronic Health Record</center></h1></label>
</div>
<div class="iehr">

<a href="index.php" style="text-decoration:none; color: white; font-size: 25px;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="patient_search_html.php" style="text-decoration:none; color: white; font-size: 25px;">Search Patient</a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="pp_html.php"  style="text-decoration:none; color: white; font-size: 25px;">Create Patient</a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="index1.php" style="text-decoration:none; color: white; font-size: 25px;">Upload</a>
&nbsp;&nbsp;&nbsp;&nbsp;


<a href="index.php?logout='1'" style="text-decoration:none; color: red; float: right; font-size: 20px; " >Logout</a>

</h4>

</div>
<div class="header">
  	<h2>Upload File</h2>
</div>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<label><b>Please enter ID:</b></label>
	<div class="input-group">
	<input type="text"  name="id" /></div>
	<input type="file" class="btn" name="report" /></br></br>
	<button type="submit" class="btn" name="btn-upload">upload</button>

	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
		<!--<center><label>File Uploaded Successfully...  <a href="view.php>">click here to view file.</a></label></center>-->
        <center><label>File Uploaded Successfully...</label></center>
		
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label></label>
        <?php
	}
	?>
 <footer class="footer-basic-centered">

			<p class="footer-company-motto">&copy 2018 - Made with <span><i class="fas fa-heart"> </i></span> at VESIT

</p>
		
        </footer>
</body>
</html>