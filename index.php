<?php

include('lib/Session.php');
  Session::init();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome|QuizBuzz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta http-equiv="Cache-Control" content="no-cache">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
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
        <li ><a href="#" target="_blank">Logical</a></li>
        <li><a href="#" target="_blank">Programming</a></li>
        <li><a href="#" target="_blank">Gkquiz</a></li>
        <li><a href="#" target="_blank">MockTests</a></li>
       
      </ul>
    </div>
    </div>
  </div>
  </nav>
   <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container"> 
                        <div id="banner_content">
                            <h1 class="ti">QUIZBUZZ</h1>
                            <h3><i>Judge Your Knowledge</i></h3>
                           
  <p style="font-size:20px" class="new">"QUIZZBUZZ" helps you to judge your knowledge in aspects like logical reasoning,
    general knowledge,technical(programming).It helps you to check your performance and that of your fellow users also.
    You can choose a section among logical, technical and general knowledge for test or you can attempt a mocktest with all 3 sections. Every test has some time limit and marking scheme so read the instructions carefully before starting quiz. Register QUIZBUZZ for getting started.</p>


                            <br/>
                            
                            
                          <ul class="nav navbar-nav navbar-right">
            
             
               <li>
     <a href="login.php" align="center" style="text-decoration:none; background-color: rgba(0,0,0,0);"> <button type="button" class="btn btn-primary" style="margin-top:10px;margin-right:250px; padding-right:20px;padding-left:20px;text-align:center">
    Login
  </button></a>
                </li>
               
            </ul>
          
        </div>
    </div>
  </div>
</div>

<?php
      include 'includes/footer.php';
?> 
</body>
</html>
 