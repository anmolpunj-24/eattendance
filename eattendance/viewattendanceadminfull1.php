<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include("header.php");?>



<?php

//make connection
$con = mysqli_connect('localhost','root','','eattendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
 ?>	

 <div class="container-fluid" style="background-color:#7ec6e6">

          <h1 class="h1_index text-center">COMPLETE ATTENDACE RECORD</h1>
          
		   <br>
		    <a class="a_color" href="teacher.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>



		
		<table class="table table-striped table-bordered" style="background-color:lavender">
   <thead>
      <tr>
        <th>Roll_No</th>
        <th>Name</th>
		<th>Date</th>
		<th>Present/Absent</th>
      </tr>
    </thead>
    <tbody>
		
		
 <?php 
//select database

$sql="SELECT * FROM `attendance_taken` ORDER BY id ASC";

$record = mysqli_query($con,$sql);


if ($query = mysqli_query($con,$sql)) {
   while ($post=mysqli_fetch_assoc($record)){
  
   ?>
   
   
      <tr>
        <td><?php echo $post['eid']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['date']; ?></td>
		<td><?php echo $post['attendance']; ?></td>
	   </tr>
              
      
<?php } ?>    

     </tbody>
    </table>
	</div>
   
   <br><br><br> <br><br><br><br> <br><br><br><br><br><br><br><br><br>
<?php include("footer.php"); ?>

 <?php }} ?>