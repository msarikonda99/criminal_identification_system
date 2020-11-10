<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		FEEBACK
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device.width,initial-scale=1">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <style type="text/css">
     	body
     	{
     		background-image: url("images/4.jpg");
     	}
     	.wra
     	{  padding: 10px;
     		margin: 20px auto;
     		width: :900px;
     		height: 600px;
     		background-color: white;
     		opacity: 0.8;
     		color: black;
     	}
     	.form-control
     	{
     		height: 70px;
     		width: 60%;
     	}
     	.scroll
     	{
     		width: 100%;
     		height: 400px;
     		overflow: auto;
     	}
     </style>
</head>
<body>
<style type="text/css">
   section
   {
    margin-top: -20px;
   }
  
</style>
<body>
 


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
         <div class="navbar-header">
           <a class="navbar-brand active">POLICE FOREVER </a>
         </div>
       <ul class="nav  navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="feeback.php">FEEBACK</a></li>
        <li><a href="records.php">RECORDS</a></li>
        <li><a href="login.php">TRAFFIC</a></li>
       
       </ul>

      <?php
        if(isset($_SESSION['login_user']))
        { ?>
                
          
          <ul  class="nav  navbar-nav navbar-right">
               <li><a href="">
                 <div style="color: white">

                  <?php
                    echo "<img class ='img-circle profile_img'height=50 width=50 src='images/1.jpg' " .$_SESSION['pic']."'>";
                    echo "   ".$_SESSION['login_user'];
                  ?>  
                 </div>
               </a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">LOGOUT</span> </a></li>
          </ul>
          <?php
        }
        else
        {
          ?>
          <ul  class="nav  navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span> </a></li>
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
         </ul> 
         <?php

        }

       ?>

   </div>
  </nav>



 <section>
 	<div class="wra">
 		<h4> if you any suggestion or question please comment below </h4>
 		<form style="" action="" method="post">
 			<input  class ="form-control" type="text" name="comment" placeholder="write  comment.."><br>
 			<input  class="btn btn-default"  type="submit" name="submit" value="submit" style="width: 100px;height: 30px;">
 			
 		</form>
 	<br>
 	<div class="scroll">
         
 	   	
     
 	</div>
 </div>
 </section>	
 	
</body>
</html>