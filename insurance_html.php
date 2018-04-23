<?php 
 
  ?>
  <html>
<head>
<title>Insurance</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="iehr">
 <img src="logo.png" align="left" >
  <h1><center>Interoperability of Electronic Health Record</center></h1>
  </div>
  <div class="iehr">

<a href="index_i.php" style="text-decoration:none; color: white; font-size: 25px;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="insurance_html.php" style="text-decoration:none; color: white; font-size: 25px;">Create Policyholder</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="patient_policy_search.php" style="text-decoration:none; color: white; font-size: 25px;">View Data</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index_i.php?logout='1'" style="text-decoration:none; color: red; float: right; font-size: 20px; " >Logout</a>

</h4>

</div>
  <div class="header">
  	<h2>Policy Details</h2>
  </div>

<form name="pp" enctype="multipart/form-data"  onsubmit="return validateForm()" action="insurance.php" method="post" >
<div class="input-group">
<label>Patient ID:</label>
<input type="text" name="id"  value="" required>
	</div>
<div class="input-group">
<label>Patient Name:</label>
<input type="text" name="name"  value="">
	</div>
		<div class="input-group">
<label>Phone Number:</label>
<input type="text" name="number"  value="">
	</div>
	<div class="input-group">
<label>Insurance:</label>
<input type="text" name="insurance" value="">
</div>
<div class="input-group">
<label>Proposer Code:</label>
<input type="text" name="Proposer_Code"  value="">
	</div>
	<div class="input-group">
<label>Policy Number(Prev):</label>
<input type="text" name="Policy_Previous"  value="">
	</div>
	<div class="input-group">
<label>Policy Number:</label>
<input type="text" name="Policy_Current"  value="">
	</div>
<div>
<label>Start Date</label>
<input type="date" name="start_date" value="">
</div></br>
<div>
<label>End Date</label>
<input type="date" name="End_date" value="">
</div></br>
	<div>
<label>Sector</label>
<select name="sector">
<option value="ps">please select</option>
<option value="rural">Rural</option>
<option value="urban">Urban</option>
</select>
</div></br>
<div class="input-group">
<label>Any Medical Condition?</label>
<input type="text" name="med"  value=""></br>
	</div>
  	  <button type="submit" onClick="location.href='insurance.html'" class="btn" name="reg_user">Create</button>
	  <div class="input-group">
</form>
</div>
</body>
</html>