
<?php include ("header.php") ?>

<?php 
     date_default_timezone_set('Asia/Kolkata');
      $date = date("Y-m-d");
      $ThisDate = date("d-m-Y", strtotime($date));
 ?>


<?php

// if(isset($_GET['insert_employee'])) {

?>   
 <div class="container-fluid" style="background-color:#7ec6e6";>

          <h1 class="h1_index text-center">RECTIFICATION PANEL</h1><br>
          <h4 class="text-center">Rectification can be done within 24 hours only</h4>
		   <br>

		    <a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

		   <br>
</div>		   
   <div class="col-sm-10" style="background-color:lavender;">
     <h3>ENTER DETAILS :</h3>

<form  action="insertemployee.php" method="POST">
<div class="form-group">
   <label for="formGroupExampleInput">Student name:</label>
   <input type="text" name="id" class="form-control" id="formGroupExampleInput" placeholder="name">
 </div>

 <div class="form-group">
   <label for="formGroupExampleInput">Roll_No:</label>
   <input type="text" name="roll_no" class="form-control" id="formGroupExampleInput" placeholder="x">
 </div>

 <div class="form-group">
   <label for="formGroupExampleInput2">Department:</label>
   <input type="text" name="department" class="form-control" id="formGroupExampleInput2" placeholder="CSE , IT...">
 </div> 

 <div class="form-group">
   <label for="formGroupExampleInput2">Teacher Name:</label>
   <input type="text" name="teacher" class="form-control" id="formGroupExampleInput2" placeholder="name">
 </div>
 
 
  <div class="form-group">
    <button type="submit" name="submit" value="submit">Submit</button>
  </div> 

   </form>
   

</div>
<?php  ?>

<!-- employee details -->

<?php


if(isset($_GET['view_employee'])) {

 ?> 

 <div class="container-fluid" style="background-color:#7ec6e6";>

          <h1 class="h1_index text-center">RECTIFICATION PANEL</h1><BR>
          <h4>Rectification can be done within 24 hours only</h4>
		   <br>
		    <a class="a_color" href="teacher.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

		   <br>
</div>

    <div class="container-fluid" style="background-color:lavender">

          <h2 class="h1_index text-center">ENTER DETAILS</h2>

        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered" style="background-color:lavender">
   <thead>
      <tr>
        <th>Student name</th>
        <th>Roll_No</th>
        <th>Department</th>
		<th>Teacher Name</th>
		    
      </tr>
    </thead>
    <tbody>
		

<?php


//make connection
$con = mysqli_connect('localhost','root','','eattendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
//select database


$sql="SELECT * FROM `rectification` ";

$record = mysqli_query($con,$sql);
$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 

while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['roll_no']; ?></td>
        <td><?php echo $post['department']; ?></td>
		<td><?php echo $post['teacher']; ?></td>
		
      </tr>
             
      
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php } ?>    

<br><br><br> <br><br><br><br>

<?php include("footer.php"); ?>