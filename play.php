 <!DOCTYPE html>
<html>
<head>
	<title>Let's Begin</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/quiz.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div id="main-div">
		<div class="row row-quiz">
			<div class="col-md-3">
					<ul class="nav sidebar-nav">
						<li class="btn btn-primary" id="10">Question 1</li>
						<li class="btn btn-primary" id="20">Question 2</li>
						<li class="btn btn-primary" id="30">Question 3</li>
						<li class="btn btn-primary" id="40">Question 4</li>
						<li class="btn btn-primary" id="50">Question 5</li>
					</ul>
			</div>
			<div class="col-md-9 que-content">
			
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
					and q.Std=$std and q.Chapter=$chap and q.Level=$level and q.SrNo=$rn");
					if($i==0)
					{
					$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($a["ans"]=='A')
						$w1=1;
					if($a["ans"]=='B')
						$w1=2;
					if($a["ans"]=='C')
						$w1=3;
					if($a["ans"]=='D')
						$w1=4;
					
					}
					if($i==1)
					{
					$b=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($b["ans"]=='A')
						$w2=1;
					if($b["ans"]=='B')
						$w2=2;
					if($b["ans"]=='C')
						$w2=3;
					if($b["ans"]=='D')
						$w2=4;
					}
					if($i==2)
					{
					$c=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($c["ans"]=='A')
						$w3=1;
					if($c["ans"]=='B')
						$w3=2;
					if($c["ans"]=='C')
						$w3=3;
					if($c["ans"]=='D')
						$w3=4;
					}
					if($i==3)
					{
					$d=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($d["ans"]=='A')
						$w4=1;
					if($d["ans"]=='B')
						$w4=2;
					if($d["ans"]=='C')
						$w4=3;
					if($d["ans"]=='D')
						$w4=4;
					}
					if($i==4)
					{
					$e=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($e["ans"]=='A')
						$w5=1;
					if($e["ans"]=='B')
						$w5=2;
					if($e["ans"]=='C')
						$w5=3;
					if($e["ans"]=='D')
						$w5=4;
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
					and q.Std=$std and q.Chapter=$chap and q.Level=$level and q.SrNo=$rn");
					if($i==0)
					{
					$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($a["ans"]=='A')
						$w1=1;
					if($a["ans"]=='B')
						$w1=2;
					if($a["ans"]=='C')
						$w1=3;
					if($a["ans"]=='D')
						$w1=4;
					}
					if($i==1)
					{
					$b=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($b["ans"]=='A')
						$w2=1;
					if($b["ans"]=='B')
						$w2=2;
					if($b["ans"]=='C')
						$w2=3;
					if($b["ans"]=='D')
						$w2=4;
					}
					if($i==2)
					{
					$c=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($c["ans"]=='A')
						$w3=1;
					if($c["ans"]=='B')
						$w3=2;
					if($c["ans"]=='C')
						$w3=3;
					if($c["ans"]=='D')
						$w3=4;
					}
					if($i==3)
					{
					$d=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($d["ans"]=='A')
						$w4=1;
					if($d["ans"]=='B')
						$w4=2;
					if($d["ans"]=='C')
						$w4=3;
					if($d["ans"]=='D')
						$w4=4;
					}
					if($i==4)
					{
					$e=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($e["ans"]=='A')
						$w5=1;
					if($e["ans"]=='B')
						$w5=2;
					if($e["ans"]=='C')
						$w5=3;
					if($e["ans"]=='D')
						$w5=4;
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
					and q.Std=$std and q.Chapter=$chap and q.Level=$level and q.SrNo=$rn");
					if($i==0)
					{
					$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($a["ans"]=='A')
						$w1=1;
					if($a["ans"]=='B')
						$w1=2;
					if($a["ans"]=='C')
						$w1=3;
					if($a["ans"]=='D')
						$w1=4;
					}
					if($i==1)
					{
					$b=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($b["ans"]=='A')
						$w2=1;
					if($b["ans"]=='B')
						$w2=2;
					if($b["ans"]=='C')
						$w2=3;
					if($b["ans"]=='D')
						$w2=4;
					}
					if($i==2)
					{
					$c=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($c["ans"]=='A')
						$w3=1;
					if($c["ans"]=='B')
						$w3=2;
					if($c["ans"]=='C')
						$w3=3;
					if($c["ans"]=='D')
						$w3=4;
					}
					if($i==3)
					{
					$d=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($d["ans"]=='A')
						$w4=1;
					if($d["ans"]=='B')
						$w4=2;
					if($d["ans"]=='C')
						$w4=3;
					if($d["ans"]=='D')
						$w4=4;
					}
					if($i==4)
					{
					$e=mysqli_fetch_array($s,MYSQLI_ASSOC);
					if($e["ans"]=='A')
						$w5=1;
					if($e["ans"]=='B')
						$w5=2;
					if($e["ans"]=='C')
						$w5=3;
					if($e["ans"]=='D')
						$w5=4;
					}
				}
			} 
   		 ?>
			
				<div id="que_stat">1) <?php echo $a["Question"] ?></div>
					<div id="1">
						<input type="radio" 
			               name="q1" value="1" checked />
			        	<label for="1" id="opt1"> <?php echo $a["OpA"] ?></label>
					</div>
					<div id="2">
						<input type="radio" 
			               name="q1" value="2" checked/>
			        	<label for="2" id="opt2"> <?php echo $a["OpB"] ?></label>
					</div>
					<div id="3">
						<input type="radio" 
			               name="q1" value="3" checked />
			        	<label for="3" id="opt3"> <?php echo $a["OpC"] ?></label>
					</div>
					<div id="4">
						<input type="radio" 
			               name="q1" value="4" checked />
			        	<label for="4" id="opt4"> <?php echo $a["OpD"] ?></label>
					</div>
					<button class="btn btn-success" >Submit</button>
					<span id="comment"></span>
				</div>		
			</div>
		
			<div class="row">
				Total Points Earned: <span id="total-points">0</span>
			</div>
			
			<div class="row submit-quiz">
				<li class="btn btn-warning"><a href="index.php">Submit Quiz</a></li>
			</div>
		</div>

		<script type="text/javascript"> 

		console.log("Hello");
		
var questions = [];
var curr_que = 0;
var total = 0;

var que1 = {
				stat:<?php echo json_encode($a["Question"]) ?>,
				op1: <?php echo json_encode($a["OpA"]) ?>,
				op2: <?php echo json_encode($a["OpB"]) ?>,
				op3: <?php echo json_encode($a["OpC"]) ?>,
				op4: <?php echo json_encode($a["OpD"]) ?>,
				correct: <?php echo json_encode($w1) ?>,
			lvl: <?php echo json_encode($a["Level"]) ?>
}


var que2 = {
	stat:<?php echo json_encode($a["Question"]) ?>,
				op1: <?php echo json_encode($b["OpA"]) ?>,
				op2: <?php echo json_encode($b["OpB"]) ?>,
				op3: <?php echo json_encode($b["OpC"]) ?>,
				op4: <?php echo json_encode($b["OpD"]) ?>,
				correct: <?php echo json_encode($w2) ?>,
			lvl: <?php echo json_encode($b["Level"]) ?>
}

var que3 = {
	stat:<?php echo json_encode($c["Question"]) ?>,
				op1: <?php echo json_encode($c["OpA"]) ?>,
				op2: <?php echo json_encode($c["OpB"]) ?>,
				op3: <?php echo json_encode($c["OpC"]) ?>,
				op4: <?php echo json_encode($c["OpD"]) ?>,
				correct: <?php echo json_encode($w3) ?>,
			lvl: <?php echo json_encode($c["Level"]) ?>
}

var que4 = {
	stat:<?php echo json_encode($d["Question"]) ?>,
				op1: <?php echo json_encode($d["OpA"]) ?>,
				op2: <?php echo json_encode($d["OpB"]) ?>,
				op3: <?php echo json_encode($d["OpC"]) ?>,
				op4: <?php echo json_encode($d["OpD"]) ?>,
				correct: <?php echo json_encode($w4) ?>,
			lvl: <?php echo json_encode($d["Level"]) ?>
}

var que5 = {
	stat:<?php echo json_encode($e["Question"]) ?>,
				op1: <?php echo json_encode($e["OpA"]) ?>,
				op2: <?php echo json_encode($e["OpB"]) ?>,
				op3: <?php echo json_encode($e["OpC"]) ?>,
				op4: <?php echo json_encode($e["OpD"]) ?>,
				correct: <?php echo json_encode($w5) ?>,
			lvl: <?php echo json_encode($e["Level"]) ?>
				
}

console.dir(que5);

questions.push(que1);
questions.push(que2);
questions.push(que3);
questions.push(que4);
questions.push(que5);

var lis = document.querySelectorAll("li");
var que_stat = document.querySelector("#que_stat");
var opt1 = document.querySelector("#opt1");
var opt2 = document.querySelector("#opt2");
var opt3 = document.querySelector("#opt3");
var opt4 = document.querySelector("#opt4");


lis.forEach(function(item){
	item.addEventListener("click", function(){
		if(this.classList.contains("disabled")) return;

		document.querySelector("button").disabled = false;
		document.querySelector("#comment").innerText = "";

		var num = Number(this.id)/10 - 1;
		curr_que = num;
		que_stat.innerText = questions[num].stat;
		opt1.innerText = questions[num].op1;
		opt2.innerText = questions[num].op2;
		opt3.innerText = questions[num].op3;
		opt4.innerText = questions[num].op4;

		opt1.parentElement.classList.remove("correct");
		opt2.parentElement.classList.remove("correct");
		opt3.parentElement.classList.remove("correct");
		opt4.parentElement.classList.remove("correct");

		opt1.parentElement.classList.remove("incorrect");
		opt2.parentElement.classList.remove("incorrect");
		opt3.parentElement.classList.remove("incorrect");
		opt4.parentElement.classList.remove("incorrect");
	});
});


var btn = document.querySelector("button");

btn.addEventListener("click", function(){
	var correctAns = Number(questions[curr_que].correct);
	var userChoice = document.querySelector("input:checked");
	var userAns = Number(userChoice.value);
	var comment = document.querySelector("#comment");
	
	this.disabled = true;
	console.log(correctAns);
	console.log(userAns);
	if(userAns === correctAns){
		comment.innerText = "Correct Answer!";
		userChoice.parentElement.classList.add("correct");
		total = total + Number(questions[curr_que].lvl);
		document.querySelector("#total-points").innerText = total; 
	} else {
		comment.innerText = "Wrong Answer!";
		userChoice.parentElement.classList.add("incorrect");
		document.getElementById(correctAns).classList.add("correct");
	}

	document.getElementById((curr_que+1)*10).classList.add("disabled");
});




		</script>
	</body>
</html>