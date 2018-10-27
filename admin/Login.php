<?php 
    $filepath = realpath(dirname(__FILE__));

include_once("../lib/Session.php");


header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

	include_once ($filepath.'/../classes/Admin.php');
	$ad = new Admin();
?>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$adminData = $ad->getAdminData($_POST);
	}
?>
<!doctype html>
<html>
<head>
	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="phpcoding">
	<section class="headeroption"></section>
		<section class="maincontent">


<!DOCTYPE html>
<html>
<head>

<title>
	Admin Login 
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
</head>
<body>
<h1 align="center"style="color:blue;"> Admin Login</h1></br></br>
<center>
<table>
<tr>
<td>
<img src="img/admin.jpg">
</td>
</tr>
</table>
<form  action="" method="post">
<field set>
<div class="form-group">
<h4>Username:
<input type="text" name= "adminUser" placeholder="Username" align="center"  required/></h4>
</div>
<div class="form-group">
<h4>Password:
<input type="password" name="adminPass" placeholder="Password" align="center" required/></h4>
</div>
<div class="form-group">
<button type="submit" name="login" class="btn btn-primary" >Login</button>
</div>
</field set>
<?php
				if(isset($adminData)){
					echo $adminData;
				}
				?>
</form> 
</center>
</body>
<footer>
        <center>
     <p> <a href="http://copyright.html" target="_blank">Copyright</a> &amp; copy QuizBuzz   . All Rights Reserved | <a href="http://aboutUs.html" target="_blank">About Us | Contact :919800000000</a></p>
            </center>

</footer>
</html>
