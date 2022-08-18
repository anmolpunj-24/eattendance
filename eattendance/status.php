
<?php include ("header.php") ?>

<?php 
     date_default_timezone_set('Asia/Kolkata');
      $date = date("Y-m-d");
      $ThisDate = date("d-m-Y", strtotime($date));
 ?>
 
 
 
<div class="col-sm-12" style="background-color:#7ec6e6"> 

 <h1 class="text-center" >STATUS PANEL</h1>
<h4 class="text-center">Check here if the rectification was successfull or not </h4>  

<a href="user.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

</div>  
<br><br>
<div class="col-sm-12">
<h3>NOTE:</h3><h4>Your rectification has been done for the date <p>

</h4>
<?php 
	      date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
      ?>
	  
	
  <h4 class="text-left">Date : <?php echo $ThisDate;  ?></h4>
  </p></div>
  <br><br><div class="col-sm-12" style="background-color:#7ec6e6"><br>
  <p><h4>You can check your attendance below</h4>
  <a class="a_color"  href="viewattendanceuser.php"><button type="button" class="btn btn-primary btn-lg">Check the attendance here</button></a>
</p>
</div>
<?php  ?>    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include ("footer.php"); ?>