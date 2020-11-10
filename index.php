<?php
  include "connection.php";
  session_start();
?>









<!DOCTYPE html>
<html>
<head>
	<title>police</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device.width,initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
	 nav
	 {
	      float: right;
	      word-spacing: 30px;
		    padding: 60px;

        }
     nav li 
      {
	   display: inline-block;
       line-height: 80px;
        }
        section

        {
        	margin-top: -20px;
        }
    </style>
</head> 
<body>
<div class="wrapper">
 <header>
 	<div class="logo">
 	 <img src="images/aa.jpg" width="170px" height="100px">
 	 <h1 >POLICE FOREVER </h1>
    </div>
   <!-- 
    <?php
     if(isset($_SESSION['login_user']))
        {  echo'
           <nav>
 		     <ul>
 			    <li><a href="index.php">HOME</a></li>
 			    <li><a href="feeback.php">FEEBACK</a></li>
          <li><a href="records.php">RECORDS</a></li>
 			    <li><a href="registration.php">REGISTRATION</a></li>
 			    <li><a href="logout.php">LOGOUT</a></li>
 		     </ul>
 	       </nav>	
 	       ';
     }
      else
      {
        echo'
      	 <nav>
 		     <ul>
 			    <li><a href="index.php">HOME</a></li>
 			    <li><a href="feeback.php">FEEBACK</a></li>
          <li><a href="records.php">RECORDS</a></li>
 			    <li><a href="registration.php">REGISTRATION</a></li>
 			    <li><a href="login.php">LOGIN</a></li>
 		     </ul>
 	       </nav>	
      	';
      }
    ?>
-->
            <?php
            if(isset( $_SESSION['login_user']))
             {?>
              <nav>
                  <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="feeback.php">FEEBACK</a></li>
                    <li><a href="registration.php">REGISTRATION</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                   <li><a href="records.php">RECORDS</a></li>
<!--<li><a href="logout.php">LOGOUT</a></li>-->
                  </ul>
                </nav>  
                <?php

             }
             else
             {?>
              <nav>
                  <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="feeback.php">FEEBACK</a></li>
                    <li><a href="registration.php">REGISTRATION</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                   <li><a href="records.php">RECORDS</a></li>
                   <!--<li><a href="logout.php">LOGOUT</a></li>-->
                  </ul>
                </nav>  

             <?php
           }
              ?>
 	<!--
   <nav>
 		<ul>
 			<li><a href="index.php">HOME</a></li>
 			<li><a href="feeback.php">FEEBACK</a></li>
 			<li><a href="registration.php">REGISTRATION</a></li>
 			<li><a href="login.php">LOGIN</a></li>
 			<li><a href="admin.php">ADMIN</a></li>
 			<li><a href="logout.php">LOGOUT</a></li>
 		</ul>
 	</nav>-->	
 </header>
 <section> 
 	<div class=""sec>
 		<div class="w3-content w3-section" style="width:500px;">
  	     <img class="mySlides w3-animate-right" src="images/i.jpg" style="width:100%">
  	     <img class="mySlides w3-animate-right" src="images/is.jpg"style="width:100%">
  	    <img class="mySlides w3-animate-right" src="images/3.jpg"style="width:100%">

  </div>
<script type="text/javascript">
	var a=0;
	carousel();
	function carousel()
	{
		var i;
		var x=document.getElementsByClassName("mySlides");
		for(i=0;i<x.length;i++)
		{
			x[i].style.display="none";

		}
		a++;
		if(a>x.length)
		{
			a=1;
		}
		x[a-1].style.display="block";
		setTimeout(carousel,2000);

	}
	
</script>
 	  <br><br>
  
 	   
     </div> 
   
  
 </section>
 <footer >
 	
 </footer>
 
</div>
   <?php
    include "footer.php";
   ?>
</body>
</html>
