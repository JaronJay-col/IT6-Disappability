<?php 

$host="localhost";
$user="root";
$password="";
$db="practice";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from practice where user='".$uname."'AND Pass='".$password."'limit 1";


    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
   
   header("location: index.php");

}
    else{
      echo "You Have Entered Incorrect Password";
      exit();
}
}


?>













<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
  <div class="login-box">
        <img src="img/carlo.jpg" class="avatar">
        <h1>Login Here</h1>
        <form method="POST" action="#" >
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forgot Password</a>
        </form>
     </div>
     </div>
</body>
</html>