<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>


<?php include("header.php"); ?>


<?php


if(isset($_GET['view_admin'])) {

 ?> 



    <div class="container-fluid" style="background-color:#7ec6e6">

          <h1 class="h1_index text-center">ADMIN DETAILS</h1>
          
		  <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>
		   <br>
		   
        <div class="col-sm-10">
		<table class="table table-striped table-bordered" style="background-color:lavender">
   <thead>
      <tr>
      <th>Id</th>
        <th>Name</th>
		<th>Email</th>
		<th>Username</th>
		<th>Edit</th>
		<th>Delete</th>
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


$sql="SELECT * FROM `admin` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['email']; ?></td>
		<td><?php echo $post['username']; ?></td>
		<td><a href="editadmin.php?edit=<?php echo $post['id']; ?>">edit</a></td>
		<td><a href="deleteadmin.php?delete=<?php echo $post['id']; ?>">delete</a></td>
      </tr>       
      
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php } ?>    

<!-- details end -->

<?php } ?>

<br><br><br> <br><br><br><br><br><br><br><br><br>

<?php include("footer.php"); ?>