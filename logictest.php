
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
	if(isset($_GET['q'])){
		$number = (int) $_GET['q'];
	}else{
		header("Location:test.php");
	}
	$total       = $lqt->getTotalRows(); 
	$question = $lqt->getQuesByNumber($number );
?>
<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$process = $Lpro->processData($_POST);
	}
?>
<html>
 <head>
  <title>Welcome|QuizBuzz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta http-equiv="Cache-Control" content="no-cache">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
     body
    {
background-color:#D6EAF8;
background-size:cover;
    }
   ul
{
  list-style: none;
    overflow: hidden;
}

ul li {
  float: left;
}
     .image
      {
             height:100px;
             width:500px;
      }
      .colmn
        {
             float:left;
             margin:5px;
             padding:5px;
          }
    .examnav
    {
           text-align:left;
           color:white;
           background-color:#808C94;
           padding:10px;
           margin:10px;
    }
    
p{margin:0}
input[type="text"], input[type="password"] {
  border: 1px solid #ddd;
  margin-bottom: 10px;
  padding: 5px;
  width: 238px;
}
input[type="submit"] {
  cursor: pointer;
  font-size: 15px;
  padding: 1px 10px;
}
.main {
  background: #fff none repeat scroll 0 0;

  border: 10px solid #999;
  margin-top: 10px;
  min-height: 368px;
  padding: 15px;
  width: 1000px;
}
#countdown
{
padding-left:30px;
}
.main h1 {
  background: #f4f4f4 none repeat scroll 0 0;
   font-family: "Times New Roman", Times, serif;
  box-shadow: 2px 2px 0 1px #999;
  color: #010002;
  margin: 10px auto 25px;
  padding: 4px;
  text-align: center;
  width: 800px;
}

 .test {
  border: 1px solid #f3f3f3;
  margin: 0 auto;
  max-width: 800px;
  padding: 20px;
}  
.test input[type="radio"] {
  margin-bottom: 10px;
  margin-right: 10px;
  cursor:pointer;
}
.test h3 {
  border-bottom: 1px solid #f3f3f3;
  font-size: 16px;
  margin-bottom: 10px;
  padding-bottom: 10px;
}
.alamgir{
  font-family: "Times New Roman", Georgia, Serif;
   color:#05020d;
   font-size: 20px;
}

</style>
</head>
<body>
	 <div class="image">
          <div class="colmn">
          <img src="images/img1.jpg" width="150" height="150">
          </div>
            <div class="colmn">
          <span style="color:black;text-align:center;font-size:30px">logic Test</span> 
           </div>
     </div>
     <div class="examnav">
             <a href="#" style="color:white">Home</a> » 
             <a href="#" style="color:white">Online Test</a> » 
             <a href="#" style="color:white">logic test</a> » 
               Mock test-random
              
            <a href="logicfinal.php"><span style="float:right;color:white">End test</span></div></a>
        </div>
<ul>
  <li><h4>TImeLeft:</h4></li>
  <li>
<div id="countdown"></div>
<div id="notifier"></div>

<script type="text/javascript">
(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  }
 
  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + (x=x%60 < 10 ? 0 : x);
  }
 
  function setTimer( remain, actions ) {
    var action;
    (function countdown() {

       display("countdown", toMinuteAndSecond(remain));
       if (action = actions[remain]) {
         action();
       }
       if (remain > 0) {
         remain -= 1;
         setTimeout(arguments.callee, 1000);
       }
    })(); // End countdown
  }
 
  setTimer(60, {
    10: function () { display("notifier", "Just 10 seconds to go"); },
     5: function () { display("notifier", "5 seconds left");        },
     0: function () { display("notifier", "Time is up baby");       }
  });
})();
</script>

</li>
</ul>
		<div class="alamgir">
		<marquee>Your Quiz is Running</marquee>
		</div>
<center>
<div class="main">
<h1>Question <?php echo $question['quesNo']; ?> of <?php echo $total; ?></h1>
	<div class="test">
		<form method="post" action="">
		<table> 
			<tr>
				<td colspan="2">
				 <h3>Que <?php echo $question['quesNo']; ?>: <?php echo $question['que']; ?></h3>
				</td>
			</tr>
			<?php 
				$answer = $lqt->getAnswer($number);   
				if($answer){
					while($result = $answer->fetch_assoc()){
			?>
			<tr>
				<td>
				 <input type="radio" name="ans" value="<?php echo $result['id']; ?>"/><?php echo $result['ans']; ?>
				</td>
			</tr>
				<?php } } ?>
			<tr>
			  <td>
				<input type="submit" name="submit" value="Next Question"/>
					<?php
				if(($question['quesNo']+1)<=$total)
				  {
				?>
				<script>
				setTimeout(function() {
					window.location.href = "logictest.php?q=<?php echo $question['quesNo']+1; ?>";
					
					}, 60000);
				
				</script>	
				<?php
				  }
				?>
				<?php
				if(($question['quesNo'])==$total)
				  {
				?>
				<script>
				setTimeout(function() {
					window.location.href = "logicfinal.php";
					
					}, 60000);
				
				</script>	
				<?php
				  }
				?>
				<input type="hidden" name="number" value= "<?php echo $number; ?>"/>
			</td>
			</tr>
			
		</table>
		</form>
</div>
 </div>
</center>
<?php include 'includes/footer.php'; ?>
</body>
</html>