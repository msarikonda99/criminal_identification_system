<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		RECORDS
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device.width,initial-scale=1">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
     	
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
       <!-- <li><a href="login.php">POLICE</a></li>-->
       
       </ul>

      <?php
        if(isset($_SESSION['login_user']))
        { ?>
          
            <ul class="nav  navbar-nav">
              <li><a href="records.php">RECORDS</a></li>
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

 <section style="background-image:r.jpg; ">
 	<div class="srch">
 	<form class="navbar-form" method="post" name="form1">
 		<input class="form-control" type="text" name="search" placeholder="search records.." required="">
 		<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
 	 	</button>
 	 </form>
 	
 </div>
 <h2 style="color: green;">LIST OF RECORDS</h2>
  <?php
     if(isset($_POST['submit']))
     {
       $q=mysqli_query($db,"SELECT * from records where name like '%$_POST[search]%' ");
       if(mysqli_num_rows($q)==0)
       {
         echo "sorry ! No records found.Try searching again.";
       }
       else
       {
        $res=mysqli_query($db,"SELECT * FROM `records`   ");
      

        echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color:blue;'>";
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo " Name"; echo "</th>";
        echo "<th>"; echo "case name"; echo "</th>";
        echo "<th>"; echo "jail"; echo "</th>";
        echo "<th>"; echo "months"; echo "</th>";
        echo "<th>"; echo "year"; echo "</th>";
      echo "</tr>";
      while($row=mysqli_fetch_assoc($q))
      {
        echo "<tr>";
        echo "<td>"; echo $row['rid']; echo "</td>";
        echo "<td>"; echo $row['name']; echo "</td>";
        echo "<td>"; echo $row['case name']; echo "</td>";
        echo "<td>"; echo $row['jail']; echo "</td>";
        echo "<td>"; echo $row['months']; echo "</td>";
        echo "<td>"; echo $row['year']; echo "</td>";
        echo"</tr>";
      } 
      echo "</table>";
    

       }
     } 
      else
      {
        $res=mysqli_query($db,"SELECT * FROM `records`   ");
      

        echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color:grey;'>";
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo " Name"; echo "</th>";
        echo "<th>"; echo "case name"; echo "</th>";
        echo "<th>"; echo "jail"; echo "</th>";
        echo "<th>"; echo "months"; echo "</th>";
        echo "<th>"; echo "year"; echo "</th>";
      echo "</tr>";
      while($row=mysqli_fetch_assoc($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row['rid']; echo "</td>";
        echo "<td>"; echo $row['name']; echo "</td>";
        echo "<td>"; echo $row['case name']; echo "</td>";
        echo "<td>"; echo $row['jail']; echo "</td>";
        echo "<td>"; echo $row['months']; echo "</td>";
        echo "<td>"; echo $row['year']; echo "</td>";
        echo"</tr>";
      } 
      echo "</table>";
    

      }

    
    

   ?> 	
    
  
 </section> 

</body>
</html>