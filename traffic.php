
<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		TRAFFIC POLICE INFORMATION
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
   .srch
   {
    padding-left: 1000px;
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
        { ?>
          
            <ul class="nav  navbar-nav">
              <li><a href="traffic.php">TRAFFIC - INFORMATION</a></li>
            </ul> 
                
          
          <ul  class="nav  navbar-nav navbar-right">
               <li><a href="">
                 <div style="color: white">

                  <?php
                    echo "<img class ='img-circle profile_img'height=50 width=50 src='images/1.jpg' " .$_SESSION['pic']."'>";
                    echo $_SESSION['login_user'];
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
 	<div class="srch">
 	<form class="navbar-form" method="post" name="form1">
 		<input class="form-control" type="text" name="search" placeholder="traffic username.." required="">
 		<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
 	 	</button>
 	 </form>
 	
 </div>
 <h2>LIST OF RECORDS</h2>
  <?php

    if(isset($_POST['submit']))
    {
    	$q=mysqli_query($db,"SELECT first,last,username,email,number,othernumber FROM `resgistration`  where username like'%$_POST[search]%' ");
    	if(mysqli_num_rows($q)==0)
    	{
    		echo "sorry! no record found with that username .try searching again.";
    	}
    	else
    	{
    		echo "<table class='table table-bordered table-hover'>";
    		echo "<tr style='background-color:#6db6b9e6;'>";
    		echo "<th>"; echo "first Name"; echo "</th>";
    		echo "<th>"; echo "last Name"; echo "</th>";
    		echo "<th>"; echo "username"; echo "</th>";
    		echo "<th>"; echo "email"; echo "</th>";
    		echo "<th>"; echo "number"; echo "</th>";
    		echo "<th>"; echo "othernumber"; echo "</th>";
    	echo "</tr>";
    	while($row=mysqli_fetch_assoc($q))
    	{
    		echo "<tr>";
    		echo "<td>"; echo $row['first']; echo "</td>";
    		echo "<td>"; echo $row['last']; echo "</td>";
    		echo "<td>"; echo $row['username']; echo "</td>";
    		echo "<td>"; echo $row['email']; echo "</td>";
    		echo "<td>"; echo $row['number']; echo "</td>";
    		echo "<td>"; echo $row['othernumber']; echo "</td>";
    		echo"</tr>";
    	}	
    	echo "</table>";
    }
}
else
{
	$res =mysqli_query($db,"SELECT first,last,username,email,number,othernumber FROM `resgistration` ;");
	
	echo "<table class='table table-bordered table-hover'>";
    		echo "<tr style='background-color:#6db6b9e6;'>";
    		echo "<th>"; echo "first Name"; echo "</th>";
    		echo "<th>"; echo "last Name"; echo "</th>";
    		echo "<th>"; echo "username"; echo "</th>";
    		echo "<th>"; echo "email"; echo "</th>";
    		echo "<th>"; echo "number"; echo "</th>";
    		echo "<th>"; echo "othernumber"; echo "</th>";
    	echo "</tr>";
}
while($row=mysqli_fetch_assoc($res))
    	{
    		echo "<tr>";
    		echo "<td>"; echo $row['first']; echo "</td>";
    		echo "<td>"; echo $row['last']; echo "</td>";
    		echo "<td>"; echo $row['username']; echo "</td>";
    		echo "<td>"; echo $row['email']; echo "</td>";
    		echo "<td>"; echo $row['number']; echo "</td>";
    		echo "<td>"; echo $row['othernumber']; echo "</td>";
    		echo"</tr>";

    	}	
    	echo "</table>";

    		



   ?> 	
    
  <div class="wra">
    <h4> recived photos </h4>
    <form style="" action="" method="post">
      <input style="height: 150px; width: 100px;" class ="form-control" type="images" name="update" placeholder=" upload image  "><br>
      <input  class="btn btn-default"  type="submit" name="submit" value="download" style="width: 100px;height: 30px;">
     <input  class ="form-control" type="images" name="update" placeholder=" write about suspect case"><br>
      <input  class="btn btn-default"  type="submit" name="submit" value="submit" style="width: 100px;height: 30px;">
      
    </form>
  <br>
  <div class="scroll">
         
      
     
  </div>
 </div>
 </section> 

</body>
</html>