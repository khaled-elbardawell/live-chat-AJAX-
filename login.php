<?php 

include "db.php";
session_start();

   if(isset($_SESSION['id'])){
     header("Location: home.php");
   }



if (isset($_POST['login'])) {

$user=htmlspecialchars( $_POST['user'] ); 
$pass=sha1(htmlspecialchars($_POST['pass']));

$sql="SELECT * FROM users where user ='$user' && pass ='$pass' ";
$result =mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (  ($user == $row['user'] ) && ($pass == $row['pass']) ) {
	 $_SESSION['user']=$row['user'];
	 $_SESSION['pass']=$row['pass'];
	 $_SESSION['id']=$row['id'];

   $sql="UPDATE users SET state='connected' where user='$user' && pass='$pass' ";
    mysqli_query($conn,$sql);

	 header("Location: home.php");
}



}


?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
 <form method="post" action="">
 	<input type="text" name="user" placeholder="username"> <br>
 	<input type="password" name="pass" placeholder="password"><br>
 	<input type="submit" name="login" value="login"><br>

 </form>
</body>
</html>