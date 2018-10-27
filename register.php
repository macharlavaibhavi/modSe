
<?php
  $filepath = realpath(dirname(__FILE__));
  include('lib/Session.php');
  Session::init();
  include('lib/Database.php');
  include('helpers/Format.php');
  include('classes/User.php');
  
     $db  = new Database();
  $fm  = new Format(); 
    $usr = new User();
    ?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome|QuizBuzz</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="style.css" rel="stylesheet">
    <script type = "text/javascript" src="jvascript/jquery.js"></script>
   <script type = "text/javascript" src="jvascript/main.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        <a class="navbar-brand" href="index.php"><i>QuizBuzz</i></a>
      </div>
      <div>
         <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php ">home</a></li>
      </ul>
    </div>
    </div>
  </div>
  </nav>
<div  id="content">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form action="" method="post" >
  	
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="name"  id="name">
    </div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input  name="username" type="text"  id="username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input name="email" type="text"  id="email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password"  name="password"  id = "password">
  	</div>
  	
  	<div class="input-group">
  	  <input type="submit"  id = "regsubmit" value="Register">
  	</div>
  	<p>
  		Already a member? <a href="login.php">Login</a>
  	</p>
  </form>
     <span id = "state"></span>
</div>
<br>
<br>
<br><br>
  <br>
<br>
<br><br>
  <?php
      include 'includes/footer.php';
?> 
</body>
</html>