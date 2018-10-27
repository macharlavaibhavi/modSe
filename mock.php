
<?php
	 $filepath = realpath(dirname(__FILE__));
	include('lib/Session.php');
	Session::init();
	include ('lib/Database.php');
	include ('helpers/Format.php');
	
	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});
	 $db  = new Database();
  $fm  = new Format(); 
  $usr = new User();
  $gqt = new gkquestest();
   $mqt = new mockquestest();
    $lqt = new logquestest();
     $tqt = new Tecquestest();
      $Tpro = new TecProcess();
     $Lpro = new logProcess();
  $Gpro = new gkProcess();
  $Mpro = new mockProcess();
  
	
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<?php 
	Session::checkSession();
	
	$question = $mqt->getQuestion();
	$total       = $mqt->getTotalRows();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
	INSTRUCTIONS
</title>
<link rel="stylesheet" href="css/style.css">
</head>

<header>
	  <nav>
	  	<h1>QUIZZBUZZ</h1>
	  	<ul id="nav1">
	  		<li><a class="homegreen" href="#">HOME</a></li>
	  		<li><a class="homegreen" href="logout_script.php">Logout</a></li>
	  	</ul>
	  </nav>
    </header>
    <div class="divider"></div>

<body>

<div class="container">
	 <img src="images/gk.jpg">
	 <img src="images/gk.jpg">
	 <img src="images/gk.jpg">
	 <img src="images/gk.jpg">
</div>

<div style="margin-left: 700px;margin-top: 0px;padding-top: 0px">
	<p id="rcorners1">
	<b style="font-size: 20px">INSTRUCTIONS:</b><br>
        1. Number of questions: 20<br>2. Time alloted for each question: 30sec<br>3. Each question carries 1 mark;For each correct answer 1 mark will be awardedand for wrong answer 0.25 mark will be deducted<br>4. DO NOT refresh the page<br>5. You can stop test by clicking on "END TEST" button anytime after start of test<br>
     </p>
      	   <p style="font-size: 20px; padding-left: 100px;padding-top: 30px"><b><a href="mocktest.php?q=<?php echo $question['quesNo']; ?>" style="color:dodgerblue">CLICK HERE</a> to start quiz.</b></p>
      	   <p style="font-size: 20px; padding-left: 130px;padding-top: 30px; color: rgba(0,0,0,0.4)"><b>---ALL THE BEST---</b></p>
</div>

</body>
<footer>
        <center>
     <p> <a href="http://copyright.html" target="_blank">Copyright</a> &amp; copy QuizBuzz   . All Rights Reserved | <a href="http://aboutUs.html" target="_blank">About Us | Contact :919800000000</a></p>
            </center>

</footer>
</html>
