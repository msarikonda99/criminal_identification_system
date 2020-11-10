
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
   .log_img{
  background-image: url("images/p.jpg"); 
}
.box1{
  height: 450px;
  width: 450px;
  margin: 60px auto;
  background-color:black; 
  opacity: .9;
  color: orange;

}
form.login{
  margin:auto 40px;
}
input{
  height: 25px;
  width: 300px;
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
        <li><a href="login.php">POLICE</a></li>
       
       </ul>
       <?php
        if(isset($_SESSION['login_user']))
        {?>
            <ul class="nav  navbar-nav">
              <li><a href="traffic.php">TRAFFIC - INFORMATION</a></li>
            </ul> 
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
<section style="height: 500px;  ">
  <div class="log_img">
    <br><br>
       <div class="box1">
         <h1 style="text-align: center;font-size:35px;font-family: Lucida Console;"> </h1><br>
       <h1 style="text-align: center;font-size:25px;">CHANGE PASSWORD </h1>
        <form class="login" action="" method="post">
          <br>
          <div class="login">
            <input  class ="form-control" type="text" name="username" placeholder="username" required=""><br><br>
              <input class="form-control" type="text" name="email" placeholder="Email" required=""><br><br>
              <input class="form-control" type="text" name="password" placeholder=" New password" required=""><br><br>
             <input class="btn btn-default" type="submit" name="submit" value="update" style="color: black;width: 70px;height: 30px"> 
            <!-- <a href="recived.php">login</a>
              <button style="background-color: green">SIGN UP</button>-->
                
            
          </div>
          

          
        </form>
         


        
       </div>

  </div>
  
</section>
   
 <?php
   if(isset($_POST['submit']))
    {
      if(mysqli_query($db,"UPDATE resgistration SET password='$_POST[password]' where username='$_POST[username]'AND email='$_POST[email]'; "))
      {
        ?>
        <script type="text/javascript">
          alert("the password updated successfully");
        </script>
        <?php
      } 
    }
   ?>
</body>
</html>