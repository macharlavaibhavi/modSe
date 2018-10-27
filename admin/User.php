<?php
$filepath= realpath(dirname(__FILE__));
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
include_once($filepath.'/../classes/User.php');
$usr= new User();

?>

<?php
   
   if(isset($_GET['dis']))
   	{
   		$dblib= (int)$_GET['dis'];
   		$dblUser=$usr->disableUser($dblib);
   	}

   	if(isset($_GET['ena']))
   	{
   		$eblid = (int)$_GET['ena'];
   		$eblUser = $usr->enableUser($eblid);
   	}

   	if(isset($_GET['del']))
   	{
   		$delid = (int)$_GET['del'];
   		$deluser = $usr->deleteUser($delid);
   	}
   	?>
   <!DOCTYPE html>
   <head>
   	<link rel="stylesheet" href="style1.css">
   <style>
   .main {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #999;
  margin-top: 10px;
  min-height: 368px;
  padding: 15px;
  width: 828px;
}
   .main h1
   {
   	font-family: "Times New Roman", Georgia, Serif;
   	font-size : 30px;
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
	<h1>Admin Panel - Manage User </h1>
	<?php
	if(isset($dblUser))
	{
		echo $dblUser;
	}
     if(isset($eblUser))
     {
     	echo $eblUser;
     }
     if(isset($delUser))
     {
     	echo $delUser;
     }
     ?>
<div class= "manageuser">
	<table class="tblone">
		<tr>
			<th>Number</th>
			<th>Username</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php
		$userData= $usr->getAllUser();

		if($userData)
		{
			$i=0;
			while($result=$userData->fetch_assoc()){
				$i++;
				?>
			<tr>
				<td>
					<?php
					if($result['status']=='1')
					{
						echo " <span class = 'error'>".$i."</span> " ;
					}
					else
					{
						echo $i;
					}
		?>
	</td>
	<td>
		
					<?php
					if($result['status']=='1')
					{
						echo " <span class = 'error'>".$result['username']. "</span> " ;
					}
					else
					{
						echo $result['username'];
					}
					?>
				</td>
				<td>
					<?php
					if($result['status']=='1')
					{
						 echo "<span class = 'error'>".$result['email']."</span>";

					}
					else
					{
						echo $result['email'];
					}
					?>
				</td>
				<td>
					<?php if($result['status']=='0')
					{
						?>
						<a onclick = "return confirm('    Are you sure to Disable')" href ="?dis=<?php echo $result['id']; ?> " >Disable </a>
						<?php } 
						else{?>
							<a onclick="return confirm('Are you sure to Enable')" href = "?ena=<?php echo $result['id']; ?>">Enable</a> <?php } ?>
							|<a onclick=" return confirm('Are you sure to Remove ')" href= "?del=<?php echo $result['id']; ?>" >Remove</a>
						</td>
						</tr>
					<?php } } ?>
				</table>
			</div>

				</div>
			</center>
				<footer>
        <center>
     <p> <a href="http://copyright.html" target="_blank">Copyright</a> &amp; copy QuizBuzz   . All Rights Reserved | <a href="http://aboutUs.html" target="_blank">About Us | Contact :919800000000</a></p>
            </center>

</footer>
</body>
</html>