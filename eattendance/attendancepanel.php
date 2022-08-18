<?php  ?>

<?php include ("header.php") ?>

     <?php 
	      date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
      ?>
	  
	  
	  
<div class="col-sm-12" style="background-color:#78d8db;"> 

      <h1 class="text-center" >Attendance Panel</h1>
  <br>
   

   <a href="teacher.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

</div>  
  



    <!-- Checking if attendance is taken for today -->
         <?php 
	          $con = mysqli_connect('localhost','root','','eattendance');
              $result = mysqli_query($con,"SELECT `date` FROM `attendance_taken` WHERE date = '$ThisDate'");
			  $row = mysqli_fetch_array($result);
        $total = isset($allData['num_of_usr']) ? count($allData['num_of_usr']) : 0;
			  // $total = $row[0];
			  $today = strval($total);
              if ($total == $ThisDate){
				  ?> 
  				  <h4 class="text-center">Attendace for Today (<?php echo $ThisDate;  ?>) has been taken.</h4>
				  <h4 class="text-center">View Today's Attendance <a href="viewattendanceadmin.php">here</a>.</h4>
				   <br>
				  <h4 class="text-center">If you want to take attendance or update then 
				  
				  <form action="deleteattendancetoday.php" method="post">
				    <input type="submit" name="delete" value="delete"> Previous attendace of today and retake</h4>
				  </form>
				  <?php
				 // echo $total;
			 }
			  else{

            ?>
			<div class="col-sm-12">
              <h4 class="text-center">Attendace can Be taken only one time for a specific date </h4>  
               <br>   
               <h3 class="text-center">Date : <?php echo $ThisDate;  ?></h3>
  
            </div>
			
			
			<?php 
	          $con = mysqli_connect('localhost','root','','eattendance');
              $result = mysqli_query($con,"select count(1) FROM employee_details");
              $row = mysqli_fetch_array($result);

              $total = $row[0];

             ?>
			 
			 
<div class="fluid-container">

<table class="table table-striped">
    <thead>
      <tr>
        <th>Roll_No</th>
        <th>Name</th>
        <th class="present_color">Present</th>
        <th>Absent</th>
      </tr>
    </thead>
    <tbody>
	
	<form action="insertattendance.php" method="post">
	
	
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


$sql="SELECT * FROM `employee_details` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   <form action="insertattendance.php" method="post">
   
   <input type="hidden" value="<?php echo $total;?>" name="numbers" />
   <input type="hidden" value="<?php echo $post['id'];?>" name="eid[]" />
   <input type="hidden" value="<?php echo $post['name'];?>" name="name[]" />
      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
        <td><label><input type="checkbox" name="attendance[]" value="Present">Present</label></td>
        <td><label><input type="checkbox" name="attendance[]" value="Absent">Absent</label></td>
      </tr>

<!-- function for today's date -->	  
   <?php     
     date_default_timezone_set('Asia/Kolkata');
	           $date = date("Y-m-d");
               $ThisDate = date("d-m-Y", strtotime($date));
     ?>
	 
	 <input type="hidden" value="<?php echo $ThisDate;?>" name="date[]" />
      
   
      
<?php } ?>    <!-- while ended here -->

    
 
     </tbody>
    </table>
   <div class="form-group">
    <button type="submit" name="submit" value="submit">Submit</button>
  </div>
 </form> 
  </div>
		  <?php } ?> <!-- else Ended here -->




 <?php  ?> <!-- session Ended here -->
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include ("footer.php"); ?>