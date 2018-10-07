<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/style3.css" />
<link rel="icon" href="images/logo.png" />
<title>Let's (L)EARN</title>
</head>

<body>
<div>
	<div class="top" >
		<img src="images/logo.png" />
		
		<div> 
        
        	<?php
				session_start();
				if(isset($_SESSION["email"]))
				{
					echo "<a href='logout.php'>LOGOUT</a>";
					echo "  ";
					echo "<a href='cart.php'>POINTS</a>";
				}
				
				else
				{
					echo '<a href="register.php">REGISTER</a>';
					echo "|";
					echo '<a href="login.php">LOGIN</a>';	
				}
			?>
			
		</div>
                <div class="name">
                <h1>
                    Let's (L)EARN!!
                </h1>
                <center>
                <div class="btn" >
                <a id="begin-btn" href="page1.html">
                    Let's Begin!!
					
                </a>
                </div>
                 </center>
        </div>
	</div>
    
  
    
    <!--<div class="banner">
		<img src="images/banner.jpg" />
	</div>-->
	
	
	<div class="bottom">
		&copy; Copyright 2018-19
	</div>
	
	
</div>

</body>
</html>















