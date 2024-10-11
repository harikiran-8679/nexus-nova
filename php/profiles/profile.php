<?php
session_start();
if (!isset($_SESSION['fname'])) {
    header('Location: LGNFRM.php'); // Redirect to signup if session is not set
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" Contont="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/2.png">
    <title>Nexus Nova Client Space</title>
    <link rel="stylesheet" href="../../css/Freelance_Clients.css">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@500&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=melodrama@400&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=stardom@400&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=stardom@400&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=excon@500&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=poppins@300&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/111755d819.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="Navbar">
        <p id="Logo" href="#">Nexus Nova Client Space</p>
        <a style="text-decoration: none; color: #ffecd1; margin-left: 73%; margin-top:1.43%" href="../login/logout.php">Logout</a>
    </div>

    <div class="Welcome" style="display: flex;">
        <h3 style="margin-left: 5%;">Welcome, <?php echo $_SESSION['fname']; ?></h3>
    </div>

    <div class="SearchBar">
        <h3>Search for Works!</h3>
        <div class="Bar">
            <input type="text" placeholder="Try skills like &quot;PHP&quot; or &quot;JavaScript&quot;">
            <i class="fa-solid fa-magnifying-glass"></i>
            <p id="quote">&quot;Find the best freelance jobs&quot;</p>
        </div>
    </div>

    <hr style="margin-top: 2%; width: 90%;">
    <h3 style="margin-left: 5%;">Top Freelancers</h3>
    <div class="Container">
        <a id="Section" href=""><div class="Content01">
            <img src="images/Profile01.png" alt="" height="70px" style="margin-left: 27%;"> 
            <p style="margin-left: 40px;">Hari Kiran</p>
        </div></a>
        <a id="Section" href=""><div class="Content01">
            <img src="images/Profile02.png" alt="" height="70px" style="margin-left: 27%;"> 
            <p style="margin-left: 47px;">Asritha</p>
        </div></a>
        <a id="Section" href=""><div class="Content01">
            <img src="images/Profile03.png" alt="" height="70px" style="margin-left: 27%;"> 
            <p style="margin-left: 22px;">Rakshan Kumar</p>
        </div></a>
        <a id="Section" href=""><div class="Content01">
            <img src="images/Profile04.png" alt="" height="70px" style="margin-left: 27%;"> 
            <p style="margin-left: 43px;">Chandra</p>
        </div></a>
        <a id="Section" href=""><div class="Content01">
            <img src="images/Profile05.png" alt="" height="70px" style="margin-left: 27%;"> 
            <p style="margin-left: 24px;">Grace Tejaswini</p>
        </div></a>
    </div>

    <hr style="margin-top: 2%; width: 90%;">

    <h3 style="margin-left: 5%;">Matter and Image Here!</h3>
    <div class="Container">
        
    </div>

    <hr style="margin-top: 2%; width: 90%;">

    <h3 style="margin-left: 5%;">Freelancers You Worked With Previously!</h3>
    <div class="Container">
        <a id="Section" href=""><div class="Content01">
            <img src="images/Profile03.png" alt="" height="70px" style="margin-left: 27%;"> 
            <p style="margin-left: 22px;">
                 Rakshan Kumar <br>
                  <i class="fa-solid fa-star stardom"></i> <i class="fa-solid fa-star stardom"></i> <i class="fa-solid fa-star stardom"></i> <i class="fa-solid fa-star stardom"></i>
                </p>
        </div></a>
        <a id="Section" href=""><div class="Content01">
            <img src="images/Profile04.png" alt="" height="70px" style="margin-left: 27%;"> 
            <p style="margin-left: 43px;">Chandra <br> 
                <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
              </p>
        </div></a>
        <a id="Section" href=""><div class="Content01"></div>
            <p style="margin-left: 43px; transform: translate(0px,60px);">See others <i class="fa-solid fa-arrow-right"></i> </p>
        </div></a>
    </div>

    <h2 style="margin-left: 47%;" id="Alone">Nexus Nova</h2>
    <hr style="width: 90%;">
    <div class="Spanner">
        <div class="Margin1" >
            <p>Copyrights: </p>
            <p>Earn with passion from the comfort of your home</p>
            <h2 style="margin: 0;">Follow Us!</h2>
            <img style="margin-top: 1%;" width="40" height="40" src="https://img.icons8.com/office/40/facebook-new.png" alt="facebook-new"/>
            <img style="margin-top: 1%;" width="40" height="40" src="https://img.icons8.com/office/40/instagram-new.png" alt="instagram-new"/>
            <img width="40" height="40" src="https://img.icons8.com/office/40/linkedin.png" alt="linkedin"/>
        </div>
        <div class="Margin2" style="margin: 1.7%;">
            <a href="#">For Clients</a> <br>
            <a href="#">For Freelancers</a> <br>
            <a href="#">How to Find work?</a> <br>
            <a href="#">How does it work?</a> <br>
            <a href="aboutuspage.php">About Us</a>
        </div>
        <div class="Margin1">
            <p>Provide us with a review over here: &nbsp;<a href="mailto:chandrachintu2007@gmail.com"><img style="transform: translate(0px,3px);" src="images/Gmail.png" height="16px" width="20px" alt=""></a> </p>
        </div>
    </div>
</body>
</html>
