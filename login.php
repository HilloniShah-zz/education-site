<!doctype html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<title>Login</title>
<style>
	body
	{
		/*background:url(../images/p8.jpg); */
		background-image: url(images/p9.jpg);
		/*background-repeat: repeat; */
		background-size: 1350px 600px;
	}
	
	form.abc table
	{
		
		color: white;
	}
	
	form.abc input[type="text"],input[type="password"]
	{
		width: 200px;
	}
	
	div.aa
	{
		position: absolute;
		left: 500px;
		top: 150px;
	}
	
	div.output
	{
		width:100%;
		text-align:center;
		font-size:25px;
		text-decoration:underline;
		color:white;	
	} 
</style>  
</head>

<body>

	<div class="top" >
		<div>
			<a href="register.php">REGISTER</a>
		</div>
        <div>
			<a href="index.php">HOME</a>
		</div>
	</div>
    
	<div class="output">
		 <?php
    	if(isset($_POST["email"]))
		{
			$e=$_POST["email"];
			$p=$_POST["pwd"];
			$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"tictechtoe");
			$x=mysqli_query($con,"select uid,email,password from users where users.email='$e'");
			//echo "print_r($x)";
			if(mysqli_num_rows($x)!=0)
			{
				$a=mysqli_fetch_array($x,MYSQLI_ASSOC);
					//$y=mysqli_query($con,"select email,password,uid from users where users.password=$p");
					//if($y!=0)
					if($a["password"]==$p)
					{
							session_start();
							$_SESSION["uid"]=$a["uid"];
							$_SESSION["email"]=$a["email"];
							$_SESSION["password"]=$a["password"];
							//echo $_SESSION["email"];
							header("Location: index.php");
					}
					else
					{
						echo "Invalid Password.";
					}
			}
			else
			{
				echo "Invalid Email";	
			}
		}
   		 ?>
	</div>

<div class="aa">
<form class="abc" method="post" >
	<table align="center">
   
		<tr align="center">
			<th colspan="2">
				<u><b><i><h2>Login</h2></i></b></u>
			</th>
		</tr>
		
		<tr>
			<td>
				<label for="email">Email</label>
			</td>
			<td>
				<input type="email" name="email" id="email" required title="enter your email-id" />
			</td>
		</tr>
		
		<tr>
			<td><label for="pwd">Password</label></td>
			<td>
				<input type="password" name="pwd" pattern="^.{8,}$" required  id="pwd" title="minimum 8 characters" />
			</td>
		</tr>
		
		<tr>
			
			<td colspan="2" align="center">
			<input type="submit" value="login" />
			<input type="reset" value="clear"/>
			</td>
		</tr>
		
	</table>
	
</form>

	</div>
</body>
</html>
