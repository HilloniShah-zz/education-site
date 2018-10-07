 <!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/style4.css" />
<link rel="icon" href="images/logo.png" />
<title>Let's Solve</title>
</head>

<body>
<div>
	<div class="top" >
		<img src="images/logo.png" />
        <div>
			<a href="index.php">HOME</a>
		</div>        
	</div>
	
	<div class="output">
		 <?php
    	/*if(isset($_POST["email"]))
		{*/
			$std=$_POST["standard"];
			$sub=$_POST["subject"];
			$chap=$_POST["chapter"];
			$level=$_POST["level"];
			$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"tictechtoe");
			$s=mysqli_query($con,"select q.Question,q.OpA,q.OpB,q.OpC,q.OpD from questions as q where q.Subject='$sub'
			and q.Std=$std and q.Chapter=$chap and q.Level=$level");
			$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
			
			/* echo $a["Question"];
			echo $a["OpA"];
			echo $a["OpB"];
			echo $a["OpC"];
			echo $a["OpD"]; */
			if($level==1 or $level==2 )
			{
				$x=2;
				for($i=0;$i<5;$i=$i+1)
				{
					$rn=mt_rand(1,$x);
					$s=mysqli_query($con,"select q.Question,q.OpA,q.OpB,q.OpC,q.OpD,q.ans,q.Level from questions as q where q.Subject='$sub'
					and q.Std=$std and q.Chapter=$chap and q.Level=$level");
					if(i==0)
					{
					$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==1)
					{
					$b=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==2)
					{
					$c=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==3)
					{
					$d=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==4)
					{
					$e=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					
				}
			}
			
			elseif($level==3)
			{
				$x=1;
				for($i=0;$i<5;$i=$i+1)
				{
					$rn=mt_rand(1,$x);
					$s=mysqli_query($con,"select q.Question,q.OpA,q.OpB,q.OpC,q.OpD,q.ans,q.Level from questions as q where q.Subject='$sub'
					and q.Std=$std and q.Chapter=$chap and q.Level=$level");
if(i==0)
					{
					$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==1)
					{
					$b=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==2)
					{
					$c=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==3)
					{
					$d=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==4)
					{
					$e=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
				}
			}
				
			else
			{
				for($i=0;$i<5;$i=$i+1)
				{
					$level=mt_rand(1,3);
					if($level==1||$level==2)
						$x=2;
					else
						$x=1;
					
					$rn=mt_rand(1,$x);
					$s=mysqli_query($con,"select q.Question,q.OpA,q.OpB,q.OpC,q.OpD,q.ans,q.Level from questions as q where q.Subject='$sub'
					and q.Std=$std and q.Chapter=$chap and q.Level=$level");
					if(i==0)
					{
					$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==1)
					{
					$b=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==2)
					{
					$c=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==3)
					{
					$d=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
					if(i==4)
					{
					$e=mysqli_fetch_array($s,MYSQLI_ASSOC);
					}
				}
			} 
			
		/* } */
   		 ?>
	</div>
	
	
	<div class="bottom">
		&copy; Copyright 2018-19
	</div>
	
	
</div>

</body>
</html>