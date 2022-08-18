<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','eattendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

  
  
   $Name =  $_POST["name"];
   $Id =  $_POST["id"];
   $Gender =  $_POST["gender"];
   $Email  = $_POST['email'];
   $DOB  = $_POST["dateofbirth"];
   $Contact_No  = $_POST["contact_no"];
   $Department  = $_POST["department"];



  $sql = "INSERT INTO `teacher_details`(`name`, `id`, `gender`, `email`, `DOB`, `contact_no`, `department`) VALUES ('$Name', '$Id','$Gender','$Email','$DOB','$Contact_No','$Department')";



   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Teacher added successfully.')){window.location = "teacher.php?view_employee=view_employee";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Can not add Teacher. Some error occured")){window.location = "teacher.php?view_employee=view_employee";}
   
     </script>
   <?php
   }	 

  
  }

?>