<?php 
include "db.php";
session_start();
 if(  ! isset($_SESSION['id'])){
 	header("Location: login.php");
 }

 $user= $_SESSION['user'];
   
  

  if (isset($_GET['logout'])) {
    $pass= $_SESSION['pass'];
  	$sql="UPDATE users SET state='unconnected' where user='$user' && pass='$pass' ";
    mysqli_query($conn,$sql);
    	

  	 session_unset();
  	 session_destroy();
  	 header("Location: login.php");
  }
  
  if(isset($_GET['chat'])){
   $_SESSION['id_se']=	$_GET['hidden'];
   $_SESSION['user_se']=	$_GET['hidden2'];
   header("Location: chats.php");
  }
 

?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body>
	<h1>  <?php echo "Welcome". " " .$user; ?>  </h1><br><br>
 <form method="get" action="">
 	<input type="submit" name="logout" value="log out">
 </form><br><br>

<input type="search" name="search" id="search" placeholder="search" onkeyup="search(this.value)" ><br><br>
             <table border="1">
				<tr>
					<td>user</td>
					<td>Action</td>

				</tr>

				<tbody id="res" >
					
				</tbody>
			</table>
			<br>
			<br>
			<br>
			<br>

<h2>Actives frindes</h2>


 <table border="1">
				<tr>
					<td>user</td>
					<td>active</td>
					<td>Action</td>

				</tr>

				<tbody id="txt" >
					
				</tbody>
			</table>
 






  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
   <script>   
   		$(document).ready(function(){
 
            setInterval(function(){load();},2600);
           
	        
	 	 
			  });

               function sayName(id){
						
				var xhr=new XMLHttpRequest();

				xhr.onreadystatechange=function(){
					if (xhr.readyState == 4 && xhr.status == 200 ) {
						document.getElementById('txt').innerHTML=xhr.responseText;
					}
				}
				xhr.open("Get","print.php?id="+id+"&da="+2,true);
				xhr.send();

			}

			      function load(){
						
				var xhr=new XMLHttpRequest();

				xhr.onreadystatechange=function(){
					if (xhr.readyState == 4 && xhr.status == 200 ) {
						document.getElementById('txt').innerHTML=xhr.responseText;
					}
				}
				xhr.open("Get","print.php?da="+3,true);
				xhr.send();

			}   
			   
                 

   				function search(value){

			         if(value.length==0){
			         	return ;
			         }
			         else {
			         
					var search=value;
					var xhr=new XMLHttpRequest();

				    xhr.onreadystatechange=function(){
					if (xhr.readyState == 4 && xhr.status == 200 ) {
						document.getElementById('res').innerHTML=xhr.responseText;
					}
				}

				xhr.open("Get","print.php?search="+search+"&da="+1,true);
			    xhr.send();
				}

			 }
   </script>

</body>
</html>
