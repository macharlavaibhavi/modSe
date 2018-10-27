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
	include_once ($filepath.'/../classes/Tecquestest.php');
	$tqt = new Tecquestest();
?>
<?php 
	if(isset($_GET['delque'])){
		$quesNo = (int)$_GET['delque'];
		 $delQue = $tqt->delQuestion($quesNo);
	}
?>
 <!DOCTYPE html>
<head>
	<link rel="stylesheet" href="style1.css">
<style>
	.main h1{
		
		font-family: "Times New Roman", Georgia, Serif;
		font-size: 30px;
		color:#5e0c17;
	}
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
.manageuser
     {
     	font-family:"Times New Roman", Times,serif;
     	font-size: 20px;
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
<div class="main">
	<h1>Admin Panel - Technical Question List</h1>
	<?php 
		if(isset($delQue)){
			echo $delQue;
		}
	?>
		<div class = "quelist">
			<table class = "tblone">
			<tr>
				<th width = "10%">No</th>
				<th width = " 70%">Questions</th>
				<th width = "20%">Action</th>
			</tr>
	<?php 
	
	$getData = $tqt->getQueByOrder();
	 
	if($getData){
		$i = 0;
		while($result = $getData->fetch_assoc()){
			$i++;
	?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $result['que']; ?></td>
				<td>
					<a onclick = "return confirm('Are you sure to Remove')" href = "?delque=<?php echo $result['quesNo']; ?>">Remove</a>
				</td>
			</tr>
	<?php } } ?>
			</table>
		<div/>
</div>
</div></div></center>
			<footer>
        <center>
     <p> <a href="http://copyright.html" target="_blank">Copyright</a> &amp; copy QuizBuzz   . All Rights Reserved | <a href="http://aboutUs.html" target="_blank">About Us | Contact :919800000000</a></p>
            </center>

</footer>
</body>
</html>