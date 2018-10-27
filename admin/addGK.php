<?php 
    $filepath = realpath(dirname(__FILE__));
      include_once ("../lib/Session.php");
  Session::checkAdminSession();
    include_once ("../lib/Database.php");
    include_once ("../helpers/Format.php");
  $db  = new Database();
  $fm  = new Format();
  
?>
<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		include_once ($filepath.'/../classes/gkquestest.php');
	$gqt = new gkquestest();
?>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$addQue = $gqt->addQuestions($_POST);
	}
	//Get Total Raw...................
	$total = $gqt->getTotalRows();
	$next = $total+1;
?>
<!DOCTYPE html>
<html>
<head>
<title>
AddGkQuestions
</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"</script>
<style>
footer {
    padding: 10px ;
    margin-top: 200px;
  background-color: black;
    color:white;
    bottom: 0;
    width: 100%;
}

header{
  background-color: #5880dc;
  color: white;
  height: 50px;
  margin-top: 0px;
  margin-left: 0px;
}
.button {
  display: inline-block;
  padding: 15px 35px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 5px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.tblone{width:100%;border:1px solid #fff;margin:20px 0}
.tblone td {
  font-size: 15px;
  padding: 5px 10px;
}
table.tblone th {
  background-color: #d0d0d0;
  border: 1px solid #999;
}
 table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
 table.tblone tr:nth-child(2n){background:#f1f1f1;height:30px;}
.tblone td a{color:#3399FF;}
.main {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #999;
  margin-top: 10px;
  min-height: 368px;
  padding: 15px;
  width: 828px;
}
.main h1 {
  border-bottom: 1px solid #ddd;
  text-align: center;
  color: #766063;
  margin: 0 0 5px;
  padding-bottom: 5px;
  
}
.maincontent {
  font-size: 18px;
  min-height: 430px;
  padding: 20px;
}
.adminpanel{width:480px;color:#999;margin:20px auto 0;padding:10px;border:1px solid #ddd;}
td,tr
{
margin-bottom:10px;
}

</style>

</head>
<body>
<?php
    if(isset($_GET['action']) && $_GET['action'] == 'logout'){
      Session::destroy();
      header("Location:Login.php");
      exit();
    }
  ?>
<div>
<center>
<img src="img/header.jpg" width="1300px">

<header>
<nav>
	<ul id="nav1">
	<li><a class="homegreen" href="index.php">HOME</a></li>
	
	<li><a class="homegreen" href="?action=logout">LOGOUT</a></li>
	  		
  	</ul>	
 </nav>
 </header>            
 </center>
 </div>
    

<center>
<section class="maincontent">
<div class="main">
<h1>Admin Panel - Add Question</h1>
<?php 
	if(isset($addQue)){
		echo $addQue;
	}
?>
	<div class = "adminpanel">
		<form action = "" method = "post">
		<table> 
			<tr>
				<td>Question No</td>
				<td>:</td>
				<td><input type = "number" value="<?php 
						if(isset($next)){
							echo $next;
						}
					?>" name ="quesNo" /></td>
			</tr>
			
			<tr>
				<td>Question</td>
				<td>:</td>
				<td><input type = "text" name ="ques" placeholder = "Enter Question...." required/></td>
			</tr>
			
			<tr>
				<td>Choice One</td>
				<td>:</td>
				<td><input type = "text" name ="ans1" placeholder = "Enter Choice One...." required/></td>
			</tr>
			
			<tr>
				<td>Choice Two</td>
				<td>:</td>
				<td><input type = "text" name ="ans2" placeholder = "Enter Choice Two...." required/></td>
			</tr>
			<tr>
				<td>Choice Three</td>
				<td>:</td>
				<td><input type = "text" name ="ans3" placeholder = "Enter Choice Three...." required/></td>
			</tr>
			<tr>
				<td>Choice Four</td>
				<td>:</td>
				<td><input type = "text" name ="ans4" placeholder = "Enter Choice Four...." required/></td>
			</tr>
			
			<tr>
				<td>Correct No.</td>
				<td>:</td>
				<td><input type = "number" name ="rightAns" required/></td>
			</tr>
			
			<tr>
				<td colspan = "3" align = "center" >
					<input type = "submit" name="submit" value = "Add A Question"/>
			   </td>
			</tr>
		</table>
		</form>
	</div>
</div>
</section>
</center>
<footer>
        <center>
     <p> <a href="http://copyright.html" target="_blank">Copyright</a> &amp; copy QuizBuzz   . All Rights Reserved | <a href="http://aboutUs.html" target="_blank">About Us | Contact :919800000000</a></p>
            </center>

</footer>
</body>
</html>