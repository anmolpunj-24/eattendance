<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>



<div class="container-fluid jumbo_user mx-auto">

  <h1 class="text-center" style="color: #191970">ADMIN SPACE</h1>
   <br>

   <br>
   <div class="col-sm-6 col-sm-6-mod" style="color:#89CFF0; width:280px">
    <h3 class="text-left"><mark style="background: #bfe6ff">Complete Attendance</mark></h3>
	<br>
    <a class="a_color"  href="viewattendanceadminfull.php"><button type="button" class="btn btn-primary btn-lg">Open</button></a>
  </div>
   
  <div class="col-sm-6 col-sm-6-mod" style="color:#89CFF0; width:260px">
    <h3 class="text-left"><mark style="background: #bfe6ff">Add New Teacher</mark></h3>
	<br>
    <a class="a_color"  href="addteacher.php?insert_employee=insert_employee"><button type="button" class="btn btn-primary btn-lg">Open</button></a>
  </div> 

  <div class="col-sm-6 col-sm-6-mod" style="color:#89CFF0; width:250px">
    <h3 class="text-left"><mark style="background: #bfe6ff">Teacher Details</mark></h3>
	<br>
    <a class="a_color"  href="addteacher.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">Open</button></a>
  </div>

  <div class="col-sm-6 col-sm-6-mod" style="color:#89CFF0; width:250px">
    <h3 class="text-left"><mark style="background: #bfe6ff">Student Details</mark></h3>
	<br>
    <a class="a_color"  href="studentdetail.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">Open</button></a>
  </div>

  <div class="col-sm-6 col-sm-6-mod" style="color:#89CFF0; width:250px">
    <h3 class="text-left"><mark style="background: #bfe6ff">Add New Admin</mark></h3>
	<br>
    <a class="a_color"  href="insertadmin.php"><button type="button" class="btn btn-primary btn-lg">Open</button></a>
  </div>

  <div class="col-sm-6 col-sm-6-mod" style="color:#89CFF0; width:250px">
    <h3 class="text-left"><mark style="background: #bfe6ff">Admin Details</mark></h3>
	<br>
    <a class="a_color"  href="viewadmin.php?view_admin=view_admin"><button type="button" class="btn btn-primary btn-lg">Open</button></a>
  </div>
  <div class=" col-sm-6 col-sm-6-mod" style="color:#89CFF0; width:270px">
    <h3 class="text-left"><mark style="background: #bfe6ff">Logout</mark></h3>
	<br>
    <a class="a_color"  href="logout.php"><button type="button" class="btn btn-primary btn-lg">LogOut</button></a>
  
  </div>
</div>
  

<?php } ?>

<br>

<?php include("footer.php") ?>