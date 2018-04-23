<html>
<head>
<script>
function validateForm() {
    var x = document.forms["pp"]["firstname"].value;
	var y = document.forms["pp"]["middlename"].value;
	var z = document.forms["pp"]["lastname"].value;
    if (x == "" || y == "" || z == "") {
        alert("Name must be filled out");
        return false;
    }
	}
</script>
<title>IEHR create</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="iehr">
 <img src="logo.png" align="left" >
  <h1><center>Interoperability of Electronic Health Record</center></h1>
  </div>
  <div class="iehr">

<a href="index.php" style="text-decoration:none; color: white; font-size: 25px;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="patient_search_html.php" style="text-decoration:none; color: white; font-size: 25px;">Search Patient</a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="pp_html.php"  style="text-decoration:none; color: white; font-size: 25px;">Create Patient</a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="index1.php" style="text-decoration:none; color: white; font-size: 25px;">Upload</a>&nbsp;&nbsp;&nbsp;&nbsp;


<a href="index.php?logout='1'" style="text-decoration:none; color: red; float: right; font-size: 20px; " >Logout</a>

</h4>

</div>
  <div class="header">
  	<h2>Create Patient</h2>
  </div>
<form name="pp" enctype="multipart/form-data"  onsubmit="return validateForm()" action="pp.php" method="post" >
<div class="input-group">
<label>First Name:</label>
<input type="text" name="firstname"  value="">
	</div>
<div class="input-group">
<label>Middle Name:</label>
<input type="text" name="middlename"  value="">
	</div>
<div class="input-group">
<label>Last Name:</label>
<input type="text" name="lastname"  value="">
	</div>
	<div class="input-group">

<label>DOB:</label>
<input type="date" name="dob"  value="">
	</div>
	<br>
	<div>
	<label>Phone No:<label>
	  <input type="tel" name="number" value="">
	</div>
	<br>
	<div >
	
<label>Id Type:</label>
<br>

<input type="radio" name="idtype" value="Old Identification Number"> Old Identification Number
<br>
<br>
<input type="radio" name="idtype" value="OpenMRS Identification Number" >Aadhar Number


	</div>
<div class="input-group">
<label>Identifier:</label>
<input type="text" name="id"  value="">
	</div>

	

<div class="input-group">
<label>Age:</label>
<input type="text" name="age"  value="">
	</div>

	<div  >
	<label>Gender</label>
	<br>
<input type="radio" name="gender" value="male" checked> Male
<input type="radio" name="gender" value="female" > Female
<input type="radio" name="gender" value="other" > Other
<div class="input-group" >
<label>Address:</label>
<input type="text" name="address" value="">
	</div>
<div>
<label>Blood group</label>
<select name="bt">
	<option value="selec">please select</option>
<option value="A+ve">A+ve</option>
  <option value="A-ve">A-ve</option>
  <option value="AB+ve">AB+ve</option>
  <option value="AB-ve">AB-ve</option>
  <option value="B+ve">B+ve</option>
  <option value="B-ve">B-ve</option>
  <option value="O+ve">O+ve</option>
  <option value="O-ve">O-ve</option>
</select>
</div>
<br>
<div>
<label>Sugar level</label>
<select name="sugar">
	<option value="selecc">please select</option>
	<option value="Low">Low</option>
	<option value="Normal">Normal</option>
	<option value="High">High</option>
	
</select>
</div>
<br>
<div>
<label>Blood Pressure</label>
<select name="bp">
	<option value="selecc">please select</option>
	<option value="Low">Low</option>
	<option value="Normal">Normal</option>
	<option value="High">High</option>
</select>
</div>
<br>
<input type="hidden" name="size" value="10">
<input type="file" name="image">
<input type="submit" name="upload" value="Upload Photo">
<br><br>
  	  <input type="hidden" onClick="location.href='pp.html'" class="btn" name="reg_user">Register</button>
	  <div class="input-group">




</form>

</div>
</body>
</html>