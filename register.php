<!doctype html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="css/style1.css" />
<style>
	
	form.frm input,textarea,select
	{
		background-color:white;
	}
	
	form.frm input[type="text"],input[type="password"],input[type="email"],select,input[type="date"],input[type="number"]
	{
		width: 200px;
	}
	
	form.frm table
	{
		background-color:white;
		color: blue;
		border: solid 3px black;
	}
	
	form.frm table tr td
	{
		border: solid 1.5px #000;
	}
	
	form.frm table tr td:first-child
	{
		background-color:white;
		color:black;
		
	}
	
	form.frm table tr th
	{
		background-color:black;
		color:white;
	}
	
</style>
</head>

<body>
<div>

	<div class="top" >
		<img src="images/logo.png" />
		
		<div>
			<a href="login.php">LOGIN</a>
		</div>
        <div>
			<a href="index.php">HOME</a>
		</div>
	</div>
	
	<!--<div class="menu">
	<ul>
	<li><a href="index.php">Home</a></li>
		<li><a href="recommend.php">Recommendations</a></li>
		<li><a href= "more.php">More</a></li> 
	</ul> 
	
	</div>-->

	
	<div class="banner">
		<img src="images/banner.jpg" />
		
	</div>
    
    
<div class="form">
<form class="frm" method="post"  >
		<table align="center">
        	<?php
        	if(isset($_POST["pwd"]))
			{
				$n=$_POST["name"];
				$m=$_POST["email"];
				$p=$_POST["pwd"];
				
				$con=mysqli_connect("localhost","root","");
				mysqli_select_db($con,"tictechtoe");
				$cnt=mysqli_query($con,"insert into users (name,email,password) values('$n','$m','$p')");
				
			}
			?>
			<tr > 
				<th colspan="2" align="center" ><u>Register-Here</u> </th>
			</tr>
			
			<tr>
				<td><label for="name"> Name</label></td>
				<td>
					<input type="text" name="name" id="name" placeholder="Enter full name" title="full name"/>
				</td>
			</tr>
			
			<tr>
				<td><label for="email"> Email-id</label></td>
				<td>
					<input type="email" name="email" id="email" placeholder="Enter email-id" required title="enter your email id" />
				</td>
			</tr>
			
			<tr>
				<td><label for="pwd"> Password</label></td>
				<td>
					<input type="password" name="pwd" id="pwd" pattern="^.{8,}$" placeholder="Enter password" title="Minimum 8 characters" />
				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
				<input type="submit" value="Register" /> 
				<input type="reset" value="Clear" />
				</td>
			</tr>
			
		</table>
</form>
</div>

<div class="bottom">
		&copy; Copyright 2018-19
</div>

</div>
</body>
</html>
