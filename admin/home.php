
<!DOCTYPE html>
<html>
<head>
<title>
Home
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
</style>
</head>
<div>
<center>
<img src="header.jpg" width="1300px">

<header>
<nav>
	<ul id="nav1">
	<li><a class="homegreen" href="home.php">HOME</a></li>
	<li><a class="homegreen" href="User.php">MANAGE USER</a></li>
	<li><a class="homegreen" href="#">LOGOUT</a></li>
	  		
  	</ul>	
 </nav>
 </header>            
 </center>
 </div>
    
<body>
</br></br></br>
<center>
<form action="" method="get">
<button class="button" formaction="addTec.php">Add Technical Questions</button>
<button class="button" formaction="addLog.php">Add Logical Questions</button>
<button class="button" formaction="addGK.php">Add GK Questions</button>
<button class="button" formaction="addMock.php">Add Mocktest Questions</button></br></br></br>
<button class="button" formaction="viewTec.php">View Technical Questions</button>
<button class="button" formaction="viewLog.php">View Logical Questions</button>
<button class="button" formaction="viewGK.php">View GK Questions</button>
<button class="button" formaction="viewMock.php">View Mocktest Questions</button>

</form>
</center>
<footer>
        <center>
     <p> <a href="http://copyright.html" target="_blank">Copyright</a> &amp; copy QuizBuzz   . All Rights Reserved | <a href="http://aboutUs.html" target="_blank">About Us | Contact :919800000000</a></p>
            </center>

</footer>
</body>
</html>