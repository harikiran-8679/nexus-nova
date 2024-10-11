<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/2.png">
    <link rel="stylesheet" href="../../css/aboutusStyle.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/2.png">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@500&display=swap" rel="stylesheet">
</head>
<body>

    <div class="Navbar" style="margin-bottom: 3%;">
        <a id="Logo" href="../../index.php">Nexus Nova</a>
    </div>

    <div class="video-text">
        <video controls autoplay muted>
            <source src="../../videos/about us.mp4" type="video/mp4">
        </video>
        <p class="para">
            Nexus Nova, a freelancing website that aims to revolutionize the way businesses and freelancers collaborate.
            Connect. Collaborate. Thrive.
        </p>
    </div>

    <div class="comp-over">
        <h2>Company Overview</h2>
        <p class="para">
            Nexus Nova is the ultimate platform connecting talented freelancers with businesses and entrepreneurs. <br>
            Our subscription-based model ensures predictable costs and priority support for clients, while providing freelancers with a guaranteed income and opportunities for long-term relationships. <br>
            With a focus on quality, flexibility, and simplicity, our platform streamlines the freelancing process, making it easier for clients to find top talent and for freelancers to grow their businesses.
            <img src="../../images/img3.jpg" width="300px" height="300px" alt="Company Image">
        </p>
           
    </div>

    <div class="Safe-paym">
        <h2>Benefits of Subscription-based Model</h2>
        <p class="para">
            Many freelancing websites take commissions from freelancers. <br> But at Nexus Nova, we prioritize the safety and satisfaction of both clients and freelancers.<br>
            Our subscription-based model offers multiple benefits such as: <br>
            <p class="paragraph">Benefits for Clients:</p>
            - Access to priority support.<br>
            - Discounted rates compared to commission-based models.<br>
            - Streamlined workflow for managing multiple projects and freelancers.<br>
            <p class="paragraph">Benefits for Freelancers:</p>
            - Guaranteed income even during slow periods.<br>
            - Reduced competition due to limited freelancer numbers.<br>
            - Opportunities for long-term relationships with clients, leading to more stable income.
        </p>
    </div>
    
    <div class="working">
        <h2>How to Make it Work at Nexus Nova</h2>
        <div class="image-div">
            <div class="btn-div-1">
                <img src="../../images/aboutus1.jpg" width="450px" height="500px">
                <!-- <div class="btn-1-1">
                    <button onclick="document.location='newpage.php'" class="btn">How to Hire</button>
                </div> -->
            </div>
            <div class="btn-div-2">
                <img src="../../images/aboutus2.jpg" width="450px" height="500px">
                <!-- <div class="btn-1-2">
                    <button onclick="document.location='newpage.php'" class="btn">Find Work</button>
                </div> -->
            </div>
            
        </div>
    </div>

    <br>

    <hr width="90%">

    <br>

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
            <a style="color:#ffecd1" href="../search/clientz.php">For Clients</a> <br>
            <a style="color:#ffecd1" href="../search/freelancerz.php">For Freelancers</a> <br>
            <a style="color:#ffecd1" href="howtohire.php">How does it work?</a> <br>
        </div>
        <div class="Margin1">
            <p>Provide us with a review over here:<a href="mailto:chandrachintu2007@gmail.com"><img src="../../images/Gmail.png" height="16px" width="20px" alt=""></a> </p>
        </div>
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
        
    </script>
</body>
</html>
