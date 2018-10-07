<?php
    	
			$std=$_POST["standard"];
			$sub=$_POST["subject"];
			$chap=$_POST["chapter"];
			$level=$_POST["level"];
			$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"tictechtoe");
			$s=mysqli_query($con,"select q.Question,q.OpA,q.OpB,q.OpC,q.OpD from questions as q where q.Subject='$sub'
			and q.Std=$std and q.Chapter=$chap and q.Level=$level");
			$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
			
			if($level==1 or $level==2 )
			{
				$x=2;
					$rn=mt_rand(1,$x);
					$s=mysqli_query($con,"select q.Question,q.OpA,q.OpB,q.OpC,q.OpD,q.ans,q.Level from questions as q where q.Subject='$sub'
					and q.Std=$std and q.Chapter=$chap and q.Level=$level");
					$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
			}
			
			elseif($level==3)
			{
				$x=1;
					$rn=mt_rand(1,$x);
					$s=mysqli_query($con,"select q.Question,q.OpA,q.OpB,q.OpC,q.OpD,q.ans,q.Level from questions as q where q.Subject='$sub'
					and q.Std=$std and q.Chapter=$chap and q.Level=$level");
					$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
			}
				
			else
			{
					$level=mt_rand(1,3);
					if($level==1||$level==2)
						$x=2;
					else
						$x=1;
					
					$rn=mt_rand(1,$x);
					$s=mysqli_query($con,"select q.Question,q.OpA,q.OpB,q.OpC,q.OpD,q.ans,q.Level from questions as q where q.Subject='$sub'
					and q.Std=$std and q.Chapter=$chap and q.Level=$level");
					$a=mysqli_fetch_array($s,MYSQLI_ASSOC);
			} 
   		 ?>


<script>
var questions = [];
var curr_que = 0;

var que1 = {
				stat:"<?echo $a["Question"] ?>",
				op1: "<?echo $a["OpA"] ?>",
				op2: "<?echo $a["OpB"] ?>",
				op3: "<?echo $a["OpC"] ?>",
				op4: "<?echo $a["OpD"] ?>",
				correct: "<echo $a["ans"] ?>"
			
}

var que2 = {
	stat:<?php echo $a["Question"] ?>,
				op1: <?php echo $a["OpA"] ?>,
				op2: <?php echo $a["OpB"] ?>,
				op3: <?php echo $a["OpC"] ?>,
				op4: <?php echo $a["OpD"] ?>,
				correct: <?php echo $a["ans"] ?>
}

var que3 = {
	stat:<?php echo $a["Question"] ?>,
				op1: <?php echo $a["OpA"] ?>,
				op2: <?php echo $a["OpB"] ?>,
				op3: <?php echo $a["OpC"] ?>,
				op4: <?php echo $a["OpD"] ?>,
				correct: <?php echo $a["ans"] ?>
}

var que4 = {
	stat:<?php echo $a["Question"] ?>,
				op1: <?php echo $a["OpA"] ?>,
				op2: <?php echo $a["OpB"] ?>,
				op3: <?php echo $a["OpC"] ?>,
				op4: <?php echo $a["OpD"] ?>,
				correct: <?php echo $a["ans"] ?>
}

var que5 = {
	stat:<?php echo $a["Question"] ?>,
				op1: <?php echo $a["OpA"] ?>,
				op2: <?php echo $a["OpB"] ?>,
				op3: <?php echo $a["OpC"] ?>,
				op4: <?php echo $a["OpD"] ?>,
				correct: <?php echo $a["ans"] ?>
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
	var correctAns = questions[curr_que].correct;
	var userChoice = document.querySelector("input:checked");
	var userAns = userChoice.value;
	var comment = document.querySelector("#comment");

	this.disabled = true;

	if(correctAns === userAns){
		comment.innerText = "Correct Answer!";
		userChoice.parentElement.classList.add("correct");
	} else {
		comment.innerText = "Wrong Answer!";
		userChoice.parentElement.classList.add("incorrect");
		document.getElementById(correctAns).classList.add("correct");
	}

	document.getElementById((curr_que+1)*10).classList.add("disabled");
});

</script>