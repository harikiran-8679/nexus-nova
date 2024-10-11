<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/2.png">
    <link rel="stylesheet" href="css/LGN.css">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="logo">
        <a href="index.php">Nexus Nova</a>
    </div>
    <div class="main-div">
        <div>
            <h2 class="heading">Login</h2>
        </div>
        <div class="form-div">
            <form action="freelance_login.php" method="post" class="form">

                <div class="input-div">
                    <input type="email" name="email" placeholder="Email" class="field" required>
                </div>

                <div class="input-div">
                    <input type="Password" name="pass" placeholder="Password" class="field">
                </div>

                <div class="frgtpass-div">
                    <div class="remember-me">
                        <input type="checkbox" id="remember-me" required><label for="remember-me"> Remember me</label>
                    </div>
                    <div class="forgot-pass-div">
                        <a href="#" class="forgot-pass">Forgot Password?</a>
                    </div>
                </div>

                <div class="submit-div">
                    <input type="button" value="Cancel" class="submit-btn cancel-btn"
                        onclick="document.location='index.php'">
                    <input type="submit" value="Login" class="submit-btn" required>
                </div>

                <div class="signup-div">
                    <p class="para">
                        Dont have an Account? <a href="RGSTRFRM.php" class="sign-up">Sign up</a>
                    </p>
                </div>

            </form>
        </div>

    </div>
</body>

</html>