<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>IEHR Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 <div class="iehr">
 <img src="logo.png" align="left" >
  <h1>Interoperability of Electronic Health Record</h1>
 </div>
<div class="iehr">

<a href="index_i.php" style="text-decoration:none; color: white; font-size: 25px;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="insurance_html.php" style="text-decoration:none; color: white; font-size: 25px;">Create Policyholder</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="patient_policy_search.php" style="text-decoration:none; color: white; font-size: 25px;">View Data</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index_i.php?logout='1'" style="text-decoration:none; color: red; float: right; font-size: 20px; " >Logout</a>

</h4>

</div>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		
    	<p>  </p>
    <?php endif ?>
</div>
</br>
</br>
</br>
<div class="about">
From the perspective of Indian Medical care system, patients visit several doctors, throughout
their life time right from visiting a primary health center to community health. Health records
get generated with every clinical meet during the inpatient or emergency visits. However, as it
is paper based most of the health records are either lost by the patients or remain in the 
supervision of health care providers and gets destroyed. As per the maintenance period of
medical records generally followed by hospitals is 5 years for out-patient records and 10
years for in patient records. Medical records are however retained permanently. We do have
the concepts of EMR/EHR in India. But there are certain barriers to it. The idea behind any 
technology or a invention is to make things simpleandeasyforeveryone.
 
To Store the health record of patients to digital system and accessing the record whenever required.
So simple that even peoples in rural area can run it and to achieve interoperability of that record 
without affecting the security and privacy of the user.


</div>		
				 <footer class="footer-basic-centered">

			<p class="footer-company-motto">&copy 2018 - Made with <span><i class="fas fa-heart"> </i></span> at VESIT

</p>
		
        </footer>
</body>
</html>