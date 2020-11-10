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
        <li><a href="admin.php">POLICE</a></li>
        <li><a href="login.php">TRAFFIC</a></li>
       
       </ul>

       <ul  class="nav  navbar-nav navbar-right">
          <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span> </a></li>
          <li><a href="index.php"><span class="glyphicon glyphicon-log-out">LOGOUT</span> </a></li>
        <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
       </ul> 

   </div>
  </nav>




<section>
	<div class="log_img">
		<br><br>
       <div class="box1">
       	 <h1 style="text-align: center;font-size:35px;font-family: Lucida Console;"> </h1><br>
 	     <h1 style="text-align: center;font-size:25px;"> POLICE  LOGIN FORM</h1>
 	      <form class="login" action="" method="">
 	      	<br>
 	      	<div class="login">
 	      		<input class="form-control" type="text" name="username" placeholder="username" required=""><br><br>
 	      	    <input class="form-control" type="text" name="password" placeholder="password" required=""><br><br>
 	      	  <input class="btn btn-default" type="submit" name="submit" value="login" style="color: black;width: 130px;height: 30px"> 

 	      	  <!--  <button style="background-color: green">SIGN UP</button>-->
                
 	      		
 	      	</div>
 	      	

 	      	
 	      </form>
 	      <p style="color: green;padding-left: 15px; " >
 	      	<br>
 	      	<a  style="color: green;" href="forgot.html">forgot password ?</a>&nbsp
 	      	NEW TO THIS WEBSITE?<a href="registration.php">sign up</a>
 	      </p>	


       	
       </div>

	</div>
	
</section>
 <?php
   if(isset($_POST['submit']))
    { 
     $count=0;
     $res=mysqli_query($db,"SELECT * FROM `admin`WHERE username='$_POST[username]' &&  password='$_POST[password]' ;");
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
        	/*  ---if username & password matches--*/
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