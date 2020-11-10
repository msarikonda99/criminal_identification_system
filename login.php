
<?php
  include "connection.php";
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>police login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device.width,initial-scale=1">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
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
        {?>
          <ul  class="nav  navbar-nav navbar-right">
               <li><a href="">
                 <div style="color: white">
                  <?php
                  echo "<img class='img-circle profile_img' height=50 width=50 src='images/1.jpg' " .$_SESSION['pic']."'>";
                    echo " ".$_SESSION['login_user'];
                  ?>  
                 </div>
               </a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">LOGOUT</span> </a></li>
          </ul>
          <?php
        }
        else
        {?>
          <ul  class="nav  navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span> </a></li>
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
         </ul> 
         <?php

        }

       ?>


       

   </div>
  </nav>







  <!--
<header style="height: 150px;width: 1320px;padding: 40px;">
	
	<div class="logo">
 	 
 	 <h1 style="color: white;font-size: 25px;line-height: 80px;word-spacing:10px;margin-top: 20px" >POLICE FOREVER </h1>
    </div>
 	 <nav>
 		<ul>
 			<li><a href="index.php">HOME</a></li>
 			<li><a href="feeback.php">FEEBACK</a></li>
 			<li><a href="admin.php"> POLICEADMIN</a></li>
 			<li><a href="login.php"> TRAFFICPOLICELOGIN</a></li>
 		</ul>
 	</nav>
</header>-->
<section style="height: 500px;">
	<div class="log_img">
		<br><br>
       <div class="box1">
       	 <h1 style="text-align: center;font-size:35px;font-family: Lucida Console;"> </h1><br>
 	     <h1 style="text-align: center;font-size:25px;"> TRAFFIC POLICE  LOGIN FORM</h1>
 	      <form class="login" action="" method="post">
 	      	<br>
 	      	<div class="login">
 	      		<input  class ="form-control" type="text" name="username" placeholder="username" required=""><br><br>
 	      	    <input class="form-control" type="text" name="password" placeholder="password" required=""><br><br>
 	      	   <input class="btn btn-default" type="submit" name="submit" value="login" style="color: black;width: 70px;height: 30px"> 
             <<a href="upload.php">login</a>
 	      	  <!--  <button style="background-color: green">SIGN UP</button>-->
                
 	      		
 	      	</div>
 	      	

 	      	
 	      </form>
 	      <p style="color: green;padding-left: 15px; " >
 	      	<br>
 	      	<a  style="color: green;" href="forgot.php">forgot password ?</a>&nbsp
 	      	NEW TO THIS WEBSITE?<a href="registration.php">sign up</a>
 	      </p>	


       	
       </div>

	</div>
	
</section>
   
 <?php
   if(isset($_POST['submit']))
    { 
     $count=0;
  	 $res=mysqli_query($db,"SELECT * FROM `resgistration`WHERE username='$_POST[username]' &&  password='$_POST[password]' ;");
     $row=mysqli_fetch_assoc($res);
     $count=mysqli_num_rows($res);
  	 if ($count==0)
   	  {
       echo '
       
    	 <script type="text/javascript">
        	 alert("THE username and password doesn t exist.");
    	 </script>
       <div class="alert alert-waring" style="width: 700px; margin-left:300px">
           <strong>
             THE username and password doesn t exist
           </strong>
         </div>';
         
    	  
      } 
    
        else
       	{ 
          $_SESSION['login_user']=$_POST['username'];
          $_SESSION['pic']=$row['pic'];
   		 echo '
             
        	<script type="text/javascript">
        	window.location="index.php"
      	 </script> 
         ';
     	
        }
     	    
             
   }
 ?>
   
</body>
</html>