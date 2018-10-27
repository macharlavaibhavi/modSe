<?php 
$username=$_POST['name'];
$email=$_POST['e-mail'];
$_password=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$POST['address'];

if(!empty($username)||!empty($password)||!empty($contact)||!empty($email)||!empty(city)||!empty(address)){
  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="onlinequiz";
  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
  if(mysqli_connect_error())
  {
    die('Connect Error('. mysqli_connect_errno().')' . mysqli_connect_error());
  }
  else
  {
    $SELECT="SELECT email from users where email=? Limit 1";
    $INSERT="INSERT into users(username,email,password,contact,city,address) values(?,?,?,?,?,?)";
    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
     $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;
    if(rnum==0)
    {
      $stmt->close();
      $stmt=$conn->prepare($INSERT);
     $stmt->bind_param("ssssss",$username,$email,$password,$contact,$city,$address);
    $stmt->execute();
    echo "registered succesully go to home and login to play quiz";
    }
 
 else
 {
  echo "Someone registered using this email";
 }
}
}
else
{
  echo "All fields are required";
  die();
}
?>