<?php include("header.php"); ?> 


    <div class="container-fluid" style="background-color:#7ec6e6";>

          <h1 class="h1_index text-center">STUDENT DETAILS</h1>
		   <br>
<h4 class="text-center">Students can find their Roll_No here and can use it to view their attendance</h4>
<a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>
		   <br>
        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered" style="background-color:lavender">
   <thead>
      <tr>
        <th>Roll_No</th>
        <th>Name</th>
		<th>Email</th>
        <th>Phone No.</th>
		<th>Department</th>
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


$sql="SELECT * FROM `employee_details` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['email']; ?></td>
		<td><?php echo $post['contact_no']; ?></td>
		<td><?php echo $post['department']; ?></td>
	   </tr>
     
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<?php include("footer.php"); ?>   
