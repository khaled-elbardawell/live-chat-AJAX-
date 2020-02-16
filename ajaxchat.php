<?php 
 
 include "db.php";
 session_start();
  
 $id_first= $_SESSION['id'];
 $id_second= $_SESSION['id_se'];
   

  if( isset($_POST['m'])){
     $msg=$_POST['m'];
     if($msg !=""){
     $zone= date_default_timezone_get();
	date_default_timezone_set($zone);
	$time_msg=date('h:i');
     	$sql="INSERT INTO message (id_first,id_second,msg,time_msg)VALUES('$id_first','$id_second','$msg','$time_msg')  ";
  	 mysqli_query($conn,$sql);
     }
  	 
  }


 ?>


<?php
$sql="SELECT * FROM message where (id_first ='$id_first' && id_second='$id_second') or(id_first ='$id_second' && id_second='$id_first')   ";
$result =mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	if($row['id_first'] == $id_first) {
 $sql1="SELECT * FROM users where id ='$id_first' ";
$result1 =mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
 ?>

<div class="container">
		<h3><?php echo $row1['user'] ?></h3>

  <p id="txt"><?php echo $row['msg']; ?></p>
  <span class="time-right"><?php echo $row['time_msg']; ?> </span>

</div>
<?php }else{

 $sql2="SELECT * FROM users where id ='$id_second' ";
$result2 =mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
 
 ?>

<div class="container darker">
	<h3><?php echo $row2['user'] ?></h3>
  <p id="txt"><?php echo $row['msg']; ?></p>
  <span class="time-left"><?php echo $row['time_msg'];   ?></span>

</div>
<?php }} 
 ?>


