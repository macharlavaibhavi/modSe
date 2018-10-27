<?php
  $filepath = realpath(dirname(__FILE__));
   include('lib/Session.php');
   Session::init();
 ?>
<?php 
  Session::checkSession();
?>
<!DOCTYPE html>
<html>

<head>
 <title>Welcome|QuizBuzz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
   <style>
   img
   {
    outline-style: solid;
    outline-color:black;
    margin-right: 5px;
   }
 </style>
</head>

<body style="background-color:#2C3E50">
	  <div>
	 <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom:0px">
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
        <li><a href="settings.php">profile</a></li>
        <li><a href="logout_script.php">Logout</a></li>
       
      </ul>
    </div>
    </div>
  </div>
  </nav>
       
  <div style="background-size:cover;">
  <font color="white"> <h1 align = "center"> <b><i><u>  <big> <big> <big> QUIZ </big> </big> </big> </u></i></b> </h1></font>
  <br>
   <br>i
        <br>
  <p > <font color="white"> <h2 align="center"> <i> choose the topic from below mentioned topics and Take Quiz. Happy Quizing  </i> </h2></font></p>


  <table align = "center">
   <tr>
    <td> <img src="images/tech.jpeg" width="250" height="250" border="7" title="technical aptitude"> </td>
    <td> <img src="images/logic.jpeg" width="250" height="250" border="7" title="logical reasoning aptitude"> </td> 
  </tr>
 
   <tr>
   <td> <h3 align ="center">  <a href="Technical.php" target="_new"><font color = "white">  Take Test </font></a> </h3> </td>
    <td>  <h3 align ="center"> <a href="logic.php" target="_new"><font color = "white"> Take Test</font> </a> </h3></font> </td>
  </tr>


   <tr>
    <td> <img src="images/GK.jpeg" width="250" height="250" border="7" title="General Knowledge"> </td>
    <td>  <img src="images/mock.jpeg" width="250" height="250" border="7" title="Mock Test"><</td> 
   </tr>

  
  <tr>
     <td>  <h3 align ="center"> <a href="gk.php" target="_new" > <font color = "white">   Take Test</font> </a></h3></td>
    <td> <h3 align ="center">  <a href="mock.php" target="_new"> <font color = "white"> Take Test </font></a></h3> </td>
</tr>
 </table>
<br>
<br>
<br><br>
  <br>
<br>
<br><br>
</div>
</div>
 <?php
      include 'includes/footer.php';
?> 
 </body>

</html>