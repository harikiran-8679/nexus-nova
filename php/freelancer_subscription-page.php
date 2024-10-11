<?php
session_start();
if (!isset($_SESSION['fname'])) {
    header('Location: freelancer-register.php'); // Redirect to signup if session is not set
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/2.png">
    <link rel="stylesheet" href="css/subscription.css">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Navbar">
        
        <div class="logo-div">
            <div>
                <img src="images/2.png" class="logoimg">
            </div>
            
            <div>
                <a id="Logo" href="index.php">Nexus Nova</a>
            </div>
            
        </div>
        
        <div class="menu">
            <div class="container">
                <a href="#" class="dropdown1 navcont">Find talent</a>
                <div class="content">

                    <div>
                        <a id="Subcon" href="">How to hire a freelancer</a> 
                    </div>

                    <div>
                        <a id="Subcon" href="freelancerz.php">Hire a Freelancer</a> 
                    </div>

                    
                    
                </div>
            </div>
            <div class="container">
                <a class="StylingForFew dropdown2 navcont" href="#">Find Work</a>
                <div class="content">


                    <div>
                        <a id="Subcon" href="">How to find work and earn money</a> 
                    </div>


                    <div>
                        <a id="Subcon" href="">Find Work</a> <br>
                    </div>

                </div>
            </div>
            <a class="StylingForFew a navcont" href="aboutuspage.php">About Us</a>
            <a class="StylingForFew a navcont" href="LGNFRM.php">Login</a>
            <a class=" StylingForFew a navcont" href="RGSTRFRM.php">SignUp</a>
        </div>
        
        
    </div>

    <div class="Greetings">
        <h2>Welcome, <?php echo $_SESSION['fname']; ?> !</h2>
    </div>

    <div class="heading-div-1-2">
        <h2>Pick Your plan and Start, Cancel Anytime</h2>
    </div>

    <form action="freelancer-profile.php" method="post">
        <div class="flexbox">
            <div class="cards">
                <label for="subscription">
                    <input type="radio" name="subscription" id="subscription" value="BASIC"><h5 >BASIC</h5>
                </label>
                <img src="images/pluto.png" alt="" height="40%" width="40%">
                <p>$59.67 <br>
                    - Monthly <br>
                    - Standard Communication <br>
                    - Access to all website features
                </p>
            </div>
            <div class="cards">
                <label for="subscription">
                    <input type="radio" name="subscription" id="subscription" value="STANDARD"><h5 >STANDARD</h5>
                </label>
                <img src="images/donald-duck.png" alt="" height="40%" width="40%">
                <p>$179.04 <br>
                    - Yearly <br>
                    - Unlimited Communication <br>
                    - Access to top-rated clients & freelancers
                </p>
            </div>
            <div class="cards">
                <label for="subscription">
                    <input type="radio" name="subscription" id="subscription" value="PREMIUM"><h5 >PREMIUM</h5>
                </label>
                <img src="images/mickey-mouse.png" alt="" height="40%" width="40%">
                <p>$298.43 <br>
                    - Lifetime <br>
                    - Unlimited Communication <br>
                    - Bonus points, & earning opportunities
                </p>
            </div>
        </div>
        <input type="submit">
    </form>
    
    </div>

    <script>
        let dropdown = document.getElementsByClassName("dropdown");
        let content = document.getElementsByClassName("content");
        let dropdowns = document.getElementsByClassName("dropdown");
        document.querySelectorAll('.dropdown1, .dropdown2').forEach(dropdown => {
            dropdown.addEventListener('click', function(event) {
                // Hide all dropdown contents first
                document.querySelectorAll('.content').forEach(content => {
                    content.style.display = 'none';
                });
        
                // Toggle the clicked dropdown's content visibility
                let content = this.nextElementSibling;
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
        
                // Prevent the click event from propagating to the document
                event.stopPropagation();
            });
        });
        
        // Hide dropdown content if clicked outside
        document.addEventListener('click', function() {
            document.querySelectorAll('.content').forEach(content => {
                content.style.display = 'none';
            });
        });
        

        let cards = document.getElementsByClassName("cards");

	    cards.onclick = function(){
        cards.style.borderColor = "#A7F967";	
	}
    </script>
</body>
</html>

