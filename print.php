<?php 
    include "db.php";
    session_start();

 if(isset($_GET['da'])){
 	$name=$_GET['da'];
 }

 if (isset($_GET['search'])) {
 	 $search=$_GET['search'];

 }

 if (isset($_GET['id'])) {
 	 $id=$_GET['id'];

 }

	 $user_id=$_SESSION['id'];
	  $user=$_SESSION['user'];


 function name(){
	global $conn;
	global $user_id;
	global $id;


	if($user_id == $id){
		return;
	}

	$sql="INSERT INTO rel (user_id,friends_id) VALUES ('$user_id','$id')";
	mysqli_query($conn,$sql);
}


 function data1($search){
 	global $conn;
 	global $user;
	$sql="SELECT * FROM users where user LIKE '%$search%' ";
    $res=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($res)) { 
     if ($user == $row['user']) {?>
     	<tr>
				<td> <?php  echo $row['user'];?></td>
				<td>you !!<td>
         </tr>
    <?php 	
     }else{



    	?>
    	    <tr>
				<td> <?php  echo $row['user'];?></td>
				<td> <button  onclick="sayName(<?php echo $row['id'];  ?>)" >Add frined</button></td>
         </tr>
    <?php  } } }

    function active(){
    	global $user_id;
    	global $conn;
$sql3="SELECT * FROM rel where user_id='$user_id' ";

$res3=mysqli_query($conn,$sql3);
while ($row3=mysqli_fetch_assoc($res3)) {
	$id_friend=$row3['friends_id'];
	$sql1="SELECT * FROM users where id='$id_friend'  ";
    $res=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_assoc($res);
     ?>
     <tr>
	<td> <?php echo $row['user'];?></td>
	<td> <?php  echo $row['state'];?></td>
	<td><form method="get" action=""><button type="submit" name="chat">start chat</button> <input type="hidden" name="hidden" value="<?php echo  $row['id']; ?>"> <input type="hidden" name="hidden2" value="<?php echo  $row['user']; ?>"></form></td>
</tr>

<?php } } 
 
 global $name;
 if ($name== 1) {
	data1($search);
}
 if ($name== 2) {
	name();
} 
 if ($name== 3) {
	active();
}








