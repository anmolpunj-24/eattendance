<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','eattendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

  
 //  $roll_no =  $_POST["roll_no"];
   //$name =  $_POST["name"];
   //$date  = $_POST['date'];
   //$attendance  = $_POST["attendance"];
 

$s = "INSERT INTO `attendance_taken`(`roll_no`, `name`, `date`, `attendance`) VALUES";
	for($i=0;$i<$_POST['numbers'];$i++)
	{
		$s .="('".$_POST['roll_no'][$i]."','".$_POST['name'][$i]."','".$_POST['date'][$i]."','".$_POST['attendance'][$i]."'),";
	}
	$s = rtrim($s,",");

  //$sql = "INSERT INTO `attendance_taken`(`eid`, `name`, `date`, `attendance`) VALUES ('$eid','$name','$date','$attendance')";

  if (mysqli_query($con,$s))
  {
  ?>
   <script>
      //window.location = "admin.php";
        if(!alert('attendance added successfully.')){window.location = "attendancepanel.php";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "attendancepanel.php";
          if(!alert('Can not add attendance.Some error occured')){window.location = "attendancepanel.php";}
   
     </script>
   <?php
   }
   

 
  
  }

?>