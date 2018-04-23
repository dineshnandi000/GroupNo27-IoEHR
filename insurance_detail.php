<html>
<head>
<title>IEHR search</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="iehr">
 <img src="logo.png" align="left" >
  <h1>Interoperability of Electronic Health Record</h1>
  </div>
  <div class="iehr">

<a href="index_i.php" style="text-decoration:none; color: white; font-size: 25px;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;


<a href="index_i.php?logout='1'" style="text-decoration:none; color: red; float: right; font-size: 20px; " >Logout</a>

</h4>

</div>
  <div class="header">
  	<h2>Request Data</h2>
  </div>
<form name="pp"  action="otpsend_i.php" method="get" >
Phone number:
<input type="text" name="number"  value="">
<button type="submit" class="btn" name="submit">Request</button>

</form>
</div>
				 <footer class="footer-basic-centered">

			<p class="footer-company-motto">&copy 2018 - Made with <span><i class="fas fa-heart"> </i></span> at VESIT

</p>
		
        </footer>
</body>
</html>
<?php
session_start();
$number = isset($_GET['number']);
$_SESSION['number']= $number;
?>