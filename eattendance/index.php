<?php

include ("header.php");

?>
 
<div class="container-fluid jumbo" style="background-image: url('clg22.jpeg')">
 <h1 class="text-center" style="color: #191970">
   ONLINE ATTENDANCE MANAGEMENT SYSTEM
 </h1> 
 <div class="mb-2">
 <h3 class="text-center" style="color: #00067aa5">
 A CMS for Complete Attendance System</h3>
 <style> 
 div
 img{
 height: 200px;
 width: 200px;
 }
#left {  
 text-align: left;
 }
 #center {  
 text-align: center;
 }
 #right{  
 text-align: right;
 
 }</style>  
</head>  
<body> 
<div id ="center">
<img src='logof.png' width="170px" height="170px"> 
</div>  
</div>
  <br>
  <br>
 <div class="container-fluid mx-auto">
 <div class="rows">
 
  <div class="col-sm-6 col-sm-6-mod" style="color:#89CFF0; width:350px">
    <h3 class="text-left">ADMIN DASHBOARD</h3>
	<br>
     <a class="a_color" class="text-center" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Space</button></a>
  
  </div>
  <div class="col-sm-6 col-sm-6-mod" style="color:#89CFF0; width:400px">
    <h3 class="text-left">TEACHER DASHBOARD</h3>
	<br>
     <a class="a_color" class="text-center" href="teacher.php"><button type="button" class="btn btn-primary btn-lg">Teacher Space</button></a>
  
  </div>
  <div class="col-sm-6 col-sm-6-mod" style="color:#89CFF0; width:400px">
   <h3 class="text-left">STUDENT DASHBOARD</h3>
	<br>
    <a class="a_color" class="text-center" href="user.php"><button type="button" class="btn btn-primary btn-lg">Student Space</button></a>
	 
  </div>
  
 </div>
 
 </div>
   
</div>

<br>

<?php 


include ("footer.php"); 

?>