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
           <li><a href="profile.php ">profile</a></li>
              <li><a href="logout_script.php ">profile</a></li>
      </ul>
    </div>
    </div>
  </div>
  </nav>
   <div class="divider"></div>
     
    <h1 style="padding-left: 300px; color: rgba(0,51,102,0.8);">THANK YOU FOR TAKING THE QUIZ!!</h1>
    <p style="padding-left: 400px; font-size: 30px; color:green"><i>Congratulations! You are qualified.</i></p>
    <table id="result">
  <tr>
  <td><b>Total questions attempted</b></td>
  <td>0</td>
  </tr>
  <tr>
  <td><b>Number of Correct answers</b></td>
  <td>0</td> 
  </tr>
  <tr>
  <td><b>Number of Wrong answers</b></td>
  <td>0</td>
  </tr>
  <tr>
  <td><b>Total marks</b></td>
  <td>0</td>
  </tr>
</table>
   <div>
   <button>CHECK OUT LEADERBOARD</button>
   <p style="font-size: 20px; padding-left: 460px;padding-top: 80px"><b><a href="#" style="color:dodgerblue">CLICK HERE</a> to take other quiz</b></p>

   <form action="/action_page.php" style="padding-left: 70px; padding-bottom: 10px; padding-top: 10px; margin-left: 370px;  margin-right:400px ;">
   	 <p style="color: rgb(0,51,102)""><b><i>RATE OUR QUIZ:</i></b></p>
  <input type="radio" name="FEEDBACK" value="Excellent">Excellent
  <input type="radio" name="FEEDBACK" value="Good">Good
  <input type="radio" name="FEEDBACK" value="Average"> Average
  <input type="radio" name="FEEDBACK" value="Not bad">Not bad
  <input type="radio" name="FEEDBACK" value="Poor"> Poor 
  <input type="submit" value="Submit" style="margin-left: 10px;">
  </form>


   </div>

    </body>
    <footer>
        <center>
     <p> <a href="http://copyright.html" target="_blank">Copyright</a> &amp; copy QuizBuzz   . All Rights Reserved | <a href="http://aboutUs.html" target="_blank">About Us | Contact :919800000000</a></p>
            </center>

</footer>
</html>