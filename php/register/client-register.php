<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-Register</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/2.png">
    <link rel="stylesheet" href="../../css/client-register.css">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="logo">
		<a href="../../index.php">Nexus Nova</a>
	</div>
    <div class="main-div" id="main-div">
        <div  class="heading-div">
            <h2 calss="heading">Sign up as a Client</h2>
        </div>

        <div id="span">
            <label id="span-cont"></label>
        </div>

        <form action="client_register.php" method="post" class="form" id="form">
            <div class="first-last-name-div">
                <div class="firstname-div">
                    <input type="text" name="fname" placeholder="Firstname Here!" class="field" required>
                </div>

                <div class="lastname-div">
                    <input type="text" name="lname" placeholder="Lastname Here!" class="field" required>
                </div>
            </div>

            <div class="input-div">
                <input type="tel" name="mobile" placeholder="Mobile Number Here!" class="field1" required>
            </div>

            <div class="input-div">
                <input type="email" name="email" placeholder="Email Here!" class="field1" required>
            </div>

            <div class="input-div">
                <input type="password" name="pass" placeholder="Password Here!" class="field1" id="password" required>
            </div>

            <div class="input-div">
                <input type="password" name="Confirm Password" placeholder="Confirm Your Password!" class="field1" id="confrm-password" required>
            </div>

            <div class="accept-div">
                <input type="checkbox" class="accept" id="accept" required><label for="accept">Yes, I agree to the <a href="#" class="accept-link">NexusNova Terms and Conditions</a></label>
            </div>

            <div class="submit-div">
                <input type="button" value="Cancel" class="submit-btn cancel-btn" onclick="document.location='PreeLanching.php'">
                <input type="submit" value="Sign up" class="submit-btn">
            </div>

            <div class="login-div"> 
                <p>Already have an Account? <a href="../login/LGNFRM.php" class="login">Login</a> </p>
            </div>
        </form>
    </div>
    <script>
        document.querySelector(".form").addEventListener("submit" , function(event){
            let confrm_password = document.getElementById("confrm-password");
            let password = document.getElementById("password").value;
            let confrm_pass = document.getElementById("confrm-password").value;
            let span_area = document.getElementById("span");
            let span_content = document.getElementById("span-cont");
            let form = document.getElementById("form");
            let main_div = document.getElementById("main-div")
        
            if(password !== confrm_pass) {
                event.preventDefault();
                span_content.textContent = "Password didn't match..";
                span_content.style.color = "red";
                form.style.marginTop = "10px";
                span_area.style.height = "40px";
                main_div.style.height = "560px";
                span_area.style.transition = "all 0.3s ease";
            }
        })

        

         
    </script>
</body>
</html>

