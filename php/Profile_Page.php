<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" Contont="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="images/2.png">
    <link rel="stylesheet" href="css/Profile.css">
    <title>Nexus Nova</title>
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
        <p id="Logo" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<a href="Freelanving.php"><i class="fa-solid fa-arrow-left"></i></a> &nbsp;&nbsp; Nexus Nova</p>
    </div>
    <div class="Profile_Content">
        <div class="Skills">
            <?php
                $servername = "localhost:3350";
                $username = "root"; // Change to your database username
                $password = ""; // Change to your database password
                $dbname = "freelancer_db";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT * FROM client_register where adf=cleitn";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo 
                        "<div>" ."<h3>"."Name: ". "</h3>". "<p>" . $row["fname"] . "</p>" . "</div>" 
                        . "<br>" ;
                    }
                } else {
                    echo "No user found with the name '$fname' ";
                }
                
                $conn->close();
            ?>
        </div>
        <div class="Profile_Container">
            <a id="Section" href=""><div class="Content01">
                <img src="images/Profile01.png" alt="" height="70px" style="margin-left: 27%;"> 
                <h3 style="margin-left: 2%; margin-top: 4%; padding: 18px;"></h3>
            </div></a>
        </div>
    </div>

    <hr style="margin-top: 2%; width: 90%;">
    <div class="Portfolio">
        <h2>Your Portfolio!</h2>
        <p>Contact: <a href="mailto:chandrachintu2007@gmail.com">Chandra Koppisetti <img style="transform: translate(0px,3px);" src="images/Gmail.png" height="16px" width="20px" alt=""></a></p>
        <p>Resume <a href="Resume.docx"><i class="fa-solid fa-file"></i></a></p>
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
    </div>

    <hr style="margin-top: 2%; width: 90%;">
    <h3 style="margin-left: 5%;">Money Earned With Nexus Nova! &nbsp;&nbsp;&nbsp; <i class="fa-solid fa-indian-rupee-sign"></i></h3>

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

</php>