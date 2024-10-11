<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer-Register</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/2.png">
    <link rel="stylesheet" href="../../css/freelancer-register.css">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="logo">
		<a href="../../index.php">NexusNova</a>
	</div>
    <div class="main-div" id="main-div">
        <div class="heading-div">
            <h2 class="heading">Sign up as a Freelancer</h2>
        </div>

        <div class="span-div" id="span-div">
            <label class="span" id="span"></label>
        </div>
        <form action="freelancer_register.php" method="post">
            <div class="first-last-name-div">
                <div class="firstname-div">
                    <input type="text" name="fname" placeholder="Firstname" class="field" required>
                </div>

                <div class="lastname-div">
                    <input type="text" name="lname" placeholder="Lastname" class="field" required>
                </div>
            </div>

            <div class="input-div">
                <input type="tel" name="mobile" class="field1" placeholder="Mobile" required>
            </div>

            <div class="input-div">
                <input type="email" name="email" class="field1" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="option">Choose an option:</label>
                <select id="option" name="option">
                    <option value="Option 1">FullStack Developers</option>
                    <option value="Option 2">Graphic Designers</option>
                    <option value="Option 3">Copy Writers</option>
                    <option value="Option 4">Digital Marketers</option>
                </select>
            </div>

           

            <!-- <div class="profile-div">
                <label for="profile-pic">Upload Profile photo</label>
                <input type="file" class="profile-pic" id="profile-pic" placeholder="Profile Pic" required>
            </div> -->

            <div class="input-div">
                <input type="password" class="field1" id="pass" placeholder="Password" required>
            </div>

            <div class="input-div">
                <input type="password" class="field1" id="cpass" placeholder="Confirm Password" required>
            </div>

            <div class="accept-div">
                <input type="checkbox" class="accept" id="accept" required><label for="accept">Yes, I agree to the <a href="#" class="accept-link">NexusNova Terms and Conditions</a></label>
            </div>

            <div class="submit-div">
                <input type="submit" class="submit-btn">
            </div>

            <div class="login-div">
                <p>Already have an Account? <a href="../login/LGNFRM.php" class="login">Login</a> </p>
            </div>
        </form>
    </div>
    <script>
        document.querySelector(".form").addEventListener("submit",function(event){
            let password = document.getElementById("pass").value;
            let cpassword = document.getElementById("cpass").value;
            let span_div = document.getElementById("span-div");
            let span = document.getElementById("span");
            let main_div = document.getElementById("main-div");
            let form = document.getElementById("form");

            if(password !== cpassword){
                event.preventDefault();
                main_div.style.height = "630px";
                span.textContent = "Password didn't match..";
                span.style.color = "red";
                span_div.style.height = "40px";
                form.style.marginTop = "10px";
            }
            })
    </script>
</body>
</html>