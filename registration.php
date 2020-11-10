
<?php
  include "connection.php";
  session_start();
?>







<!DOCTYPE html>
<html>
<head>
	<title>admin registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device.width,initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <style type="text/css">
     section
    {
      margin-top: -20px;
    }
  
 </style>
</head>
<body>
 
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
         <div class="navbar-header" >
           <a class="navbar-brand active">POLICE FOREVER </a>
         </div>
       <ul class="nav  navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="feeback.php">FEEBACK</a></li>
       
       </ul>
       <?php
        if(isset($_SESSION['login_user']))
        {
          ?>
           <ul  class="nav  navbar-nav navbar-right">
               <li><a href="">
                 <div style="color: white">
                  <?php
                  echo "<img class ='img-circle profile_img' height=50 width=50 src='images/1.jpg' " .$_SESSION['pic']."'>";
                    echo " ".$_SESSION['login_user'];
                  ?>  
                 </div>
               </a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">LOGOUT</span> </a></'li>
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


<section style="height: 750px;width: 1320px;">
	<div class="res_img">
		<br><br>
       <div class="box2">
       	 <h1 style="text-align: center;font-size:35px;font-family: Lucida Console;"> </h1><br>
 	     <h1 style="text-align: center;font-size:25px;"> TRAFFIC REGISTRATION FORM</h1>
 	      <form class="resgistration" action="" method="post">
 	      	<br>
 	      	<div class="singup">
 	      		<input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
 	      		<input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>
 	      		<input class="form-control" type="text" name="username" placeholder="username" required=""><br>
 	      	    <input class="form-control" type="text" name="password" placeholder="password" required=""><br>
 	      	    <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
 	      	    <input class="form-control" type="number" name="number" placeholder="Phone number" required=""><br>
 	      	    <input class="form-control" type="number" name="othernumber" placeholder="othernumber " required=""><br>
 	      	    <input class="btn btn-default"  type="submit" name="submit" value="SIGN UP" style="color: green;width: 170px;height: 30px">
 	      	   <!-- <button style="background-color: green" <a href="login.php">SIGN UP</button></a>-->
                
 	      		
 	      	</div>
 	      	

 	      	
 	      </form>
 	      


       	
       </div>

	</div>
	
</section>

     
     <?php

       if(isset($_POST['submit']))
       { 
        $count=0;
        $sql="SELECT username from 'admin'";
        $res=mysqli_query($db,$sql);

        while ($row=mysqli_fetch_assoc($res))
         {
           if($row['username']==$_POST['username'])
           {
             $count=$count+1;
           }
         }
        if($count==0) 
        {
          
             	  mysqli_query($db,"INSERT INTO `resgistration` VALUES('','$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[number]','$_POST[othernumber]','1.jpg');");

        ?>
          <script type="text/javascript">
            alert("REGISTRATION successfully");
          </script>

       <?php       
       } 
      
         else
          { 
          ?>
 
               <script type="text/javascript">
                alert("the username already exist.");
              </script>
         <?php
         }
      }
        ?>
   
  </body>
</html>