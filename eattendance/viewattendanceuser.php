<?php include("header.php");?>


<div class="container-fluid view_user" style="background-color:#7ec6e6">

 <div class="col-sm-12">
  <h2 class="text-center">VIEW ATTENDANCE</h2>
  <p class="text-center">Enter your Roll_No and Submit.</p>
  <a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>
		  
  <a class="a_color" href="vieweid.php"><button type="button" class="btn btn-primary btn-lg">Find your Roll no.</button></a>
		   <br>
 </div> 
 <div class="col-sm-12 user_form_color" style="background-color:lavender">
 
  <form class="form-inline" action="" method="post">
    <div class="form-group">
      <label for="email">Roll_No:</label>
      <input type="text" class="form-control" name="eid" placeholder="Enter roll_no" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  
 </div>  
</div>



<?php

 if(isset($_POST['eid'])) {
	 
//make connection
$con = mysqli_connect('localhost','root','','eattendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
 ?>	
 <?php 
             $Eid = $_POST['roll_no'];
	          $con = mysqli_connect('localhost','root','','eattendance');
              $result = mysqli_query($con,"SELECT * FROM `attendance_taken` WHERE eid='$Eid'");
			  $row = mysqli_fetch_array($result);
			  $total = $row[0];
			  $today = strval($total);
              if ($total == 0){
				  ?>
			  <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Roll_no is wrong.Please reconfirm Roll_no then try again ")){window.location = "viewattendanceuser.php";}
   
              </script>	  
			  <?php } 
			  
			  else {
				  ?>
 <div class="container-fluid MT-10" style="background-color:lavender";>

          <h1 class="h1_index text-center">Attendance can be seen below.</h1>
		   <br>
		    <a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg">Student Dashboard</button></a>

		   <br>
<h4 class="text-center">Student can find their Roll_No here and can use it to view their attendance</h4>

		
		<table class="table table-striped table-bordered" style="background-color:lavender">
   <thead>
      <tr>
        <th>Roll_No</th>
        <th>Name</th>
		<th>Date</th>
		<th>Present/Abscent</th>
      </tr>
    </thead>
    <tbody>
		
 <?php 
//select database
$Eid = $_POST['roll_no'];

$sql="SELECT * FROM `attendance_taken` WHERE eid='$Eid' ORDER BY id ASC";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['roll_no']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['date']; ?></td>
		<td><?php echo $post['attendance']; ?></td>
	   </tr>
              
      
<?php } ?>    
     </tbody>
    </table>
	</div>
	
	
   
  <?php } ?>
 
 <?php } ?>
 
 <div class="container-fluid">
	  <div class="col-sm-6">
	    <h3>Attendance of three months :</h3><p>( will be updated on completion of three months of classes)</p> 		
	  </div>
	  
	  <div class="col-sm-6">
	    <h3>Total attendence per semester :</h3><p>( will be updated on completion of semester)</p> 
	  </div>
	</div>

<br><br><br>

<?php include("footer.php"); ?>
 