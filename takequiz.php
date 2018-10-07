 <!DOCTYPE html>
<html>
<head>
	<title>Let's Play</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/quiz3.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

		<div class="top" >
		<img src="images/logo.png" />
        <div>
			<a href="index.php">HOME</a>
		</div>
		</div>
		
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
			
				<div id="que_stat">What are the two fundamental constituents of the universe?</div>
					<div id="1">
						<input type="radio" 
			               name="q1" value="1" checked />
			        	<label for="1" id="opt1">Matter and Radiation</label>
					</div>
					<div id="2">
						<input type="radio" 
			               name="q1" value="2" checked/>
			        	<label for="2" id="opt2">Heat and Light</label>
					</div>
					<div id="3">
						<input type="radio" 
			               name="q1" value="3" checked />
			        	<label for="3" id="opt3">Molecule and Atom</label>
					</div>
					<div id="4">
						<input type="radio" 
			               name="q1" value="4" checked />
			        	<label for="4" id="opt4">Electron and Proton</label>
					</div>
					<button class="btn btn-success" >Submit</button>
					<span id="comment"></span>
				</div>		
			</div>
		
			<div class="row points">
				Total Points Earned: <span id="total-points">0</span>
			</div>
			
			<div class="row submit-quiz">
				<a href="index.php" class="btn btn-danger">Submit Quiz</a>
			</div>
		</div>

		<script type="text/javascript"> 

		console.log("Hello");
		
var questions = [];
var curr_que = 0;
var total = 0;

var que1 = {
				stat: "What are the two fundamental constituents of the universe?",
				op1: "Matter and Radiation",
				op2: "Heat and Light",
				op3: "Molecule and Atom",
				op4: "Electron and Proton",
				correct: "4",
			lvl: "1"
}


var que2 = {
	stat: "What is not a state of matter?",
				op1: "Solid",
				op2: "Plasma",
				op3: "Gas",
				op4: "Neutron",
				correct: "4",
			lvl: "1"
}

var que3 = {
	stat: "Nucleus of a molecule is made up of which fundamental constituents?",
				op1: "Electron and Proton",
				op2: "Electron and Neutron",
				op3: "Proton and Neutron",
				op4: "Only Electron",
				correct: "3",
			lvl: "2"
}

var que4 = {
	stat: "What is the fullform of ECG?",
				op1: "Electron Cardiogram",
				op2: "Electron Color Graph",
				op3: "Electro Cardiograph",
				op4: "Electric Cardiogram",
				correct: "3",
			lvl: "3"
}

var que5 = {
	stat: "What is the fullform of NMR?",
				op1: "Neutron Magnetic Resonance",
				op2: "Nuclear Magnetic Resonance",
				op3: "Neutrino Magentic Resonance",
				op4: "Nuclear Motion Resonance",
				correct: "2",
			lvl: "3"
				
}



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