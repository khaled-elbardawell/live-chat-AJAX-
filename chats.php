<?php 
include "db.php";
session_start();
 if(  ! isset($_SESSION['id'])){
 	header("Location: login.php");
 }



$user=$_SESSION['user']; 
$user_se= $_SESSION['user_se'];


 
  

 

?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>chat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>
<body>
	<h1>  <?php echo "Welcome". " " .$user; ?>  </h1>

<h2>Chat Messages with <?php echo $user_se; ?></h2>

<div id="txt" >

 
</div>


<div class="class="mb-3>
	<div class="container darker">
	<h4 id="typing">typing...</h4>
</div>
    <textarea class="form-control " id="msg"  placeholder="Messages"  name="text_msg"></textarea>
    <br>

 <button  onclick="send()">send</button>
</div>


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>  
            $(document).ready(function(){
 
            setInterval(function(){load();},2600);
           
			  });

             function load(){			 	
			 	var xhr=new XMLHttpRequest();
			 	xhr.onreadystatechange=function(){
			 		if (xhr.readyState == 4 && xhr.status == 200 ) {
			 			document.getElementById('txt').innerHTML=xhr.responseText;
			 		}
			 	}

				xhr.open("POST","ajaxchat.php",true);
				xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			 	xhr.send();

			 }
    
              function send(){	
         
               var x=1;
			 	var xhr=new XMLHttpRequest();
			 	var msg=document.getElementById('msg').value;
			 	document.getElementById('msg').value="";			 	
			 	xhr.onreadystatechange=function(){
			 		if (xhr.readyState == 4 && xhr.status == 200 ) {
			 			document.getElementById('txt').innerHTML=xhr.responseText;
			 		}
			 	}

				xhr.open("POST","ajaxchat.php",true);
				xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			 	xhr.send("m="+msg+"&x="+x);

			 }
</script>

</body>
</html>
