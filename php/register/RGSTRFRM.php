<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../../images/2.png">
	<link rel="stylesheet" href="../../css/RGSTR.css">
	<link href="https://api.fontshare.com/v2/css?f[]=clash-display@500&display=swap" rel="stylesheet">
</head>
<body>


	<div class="main-div">
		<div class="logo">
			<a href="../../index.php">Nexus Nova</a>
		</div>
			<center><h2 class="para">Join as a Client or Freelancer!</h2></center>
		<div class="buttons">
			<div>
				<button class="btn" id="btn1">Hiring for a project </button>
			</div>

			<div>
				<button class="btn" id="btn2">Looking for work</button>
			</div>

		</div>
	
		<div class="main-btn">
			<button class="btn2" id="btn3">Create Account</button>
		</div>

		<div class="login-div">
			<p class="login-para">
				Already have an Account? <a href="../login/LGNFRM.php"  class="login">login</a>
			</p>
		</div>
	</div>
</body>
<script>
	let button1 = document.getElementById("btn1");
	let button2 = document.getElementById("btn2");
	let button3 = document.getElementById("btn3");

	button1.onclick = function(){
		button1.style.borderColor = "#A7F967";
		button2.style.borderColor = "#121212";
		button3.textContent = "Join as a Client";
		button3.style.backgroundColor = "#A7C957";
		button3.style.color = "white";
		//button3.style.padding = "10px"
		button3.style.width = "150px";
		button3.style.cursor = "pointer";
		button3.onclick = function(){
			document.location.href = "client-register.php";
		}		
	}
	button2.onclick = function(){
		button2.style.borderColor = "#A7F967";
		button1.style.borderColor = "#121212";
		button3.textContent = "Apply as a Freelancer";
		button3.style.backgroundColor = "#A7C957";
		button3.style.color = "white";
		button3.style.width = "200px";
		button3.style.cursor = "pointer";
		button3.onclick = function(){
			document.location.href = "freelancer-register.php";
		}
	}
</script>
</html>