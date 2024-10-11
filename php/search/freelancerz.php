<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancerz</title>
    <link rel="stylesheet" href="../../css/freelancerz.css">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="../../index.php">Nexus Nova</a>
        </div>
        <div class="input-div-main">
            <div class="input-div">
                <div>
                    <input type="text" class="search" id="search" placeholder="Hire a Freelancer">
                </div>
                <div>
                    <button onclick="" class="srch-btn" id="srchbtn"><img src="../../images/search.png" class="srch-img"></button>
                </div>
                <div class="filter-div">
                    <button onclick="" class="filter-btn" id="filterbtn"><img src="../../images/filter.png" class="filter-img"></button>
                    <div class="dropdowndiv" id="dropdowncontainer">

                        <div class="dropdownlinks-div">
                            <p class="dropdownlinks">By category</p>
                            <div class="bycategorydropdown">
                                <div class="bycategorydropdowndivs">
                                    <input type="checkbox" name="coding related" id="bycategorycheck1" >
                                    <label for="bycategorycheck1">Coding related</label>
                                </div>

                                <div class="bycategorydropdowndivs">
                                    <input type="checkbox" name="Web Development" id="bycategorycheck2">
                                    <label for="bycategorycheck2">Web Development</label>
                                </div>

                                <div class="bycategorydropdowndivs">
                                    <input type="checkbox" name="Content writing " id="bycategorycheck3">
                                    <label for="bycategorycheck3">Content writing</label>
                                </div>
                                
                            </div>
                        </div>

                        <div class="dropdownlinks-div">
                            <p class="dropdownlinks">By location</p>
                            
                        </div>

                        <div class="dropdownlinks-div">
                            <p class="dropdownlinks">By skill</p>
                            <div class="bycategorydropdown">
                                <div class="bycategorydropdowndivs">
                                    <input type="checkbox" name="coding related" id="byskillcheck1" >
                                    <label for="byskillcheck1">php</label>
                                </div>

                                <div class="bycategorydropdowndivs">
                                    <input type="checkbox" name="Web Development" id="byskillcheck2">
                                    <label for="byskillcheck2">CSS</label>
                                </div>

                                <div class="bycategorydropdowndivs">
                                    <input type="checkbox" name="Content writing " id="byskillcheck3">
                                    <label for="byskillcheck3">JavaScript</label>
                                </div>
                                
                                <div class="bycategorydropdowndivs">
                                    <input type="checkbox" name="Content writing " id="byskillcheck4">
                                    <label for="byskillcheck4">PHP</label>
                                </div>

                                <div class="bycategorydropdowndivs">
                                    <input type="checkbox" name="Content writing " id="byskillcheck5">
                                    <label for="byskillcheck5">Python</label>
                                </div>
                            </div>
                        </div>

                        <!-- <div>
                            <a href="#" class="dropdownlinks"></a>
                        </div> -->
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    

    <div class="main-div-outline">
        <div class="main-div">
            <div class="noresults-div">
                <span class="noresults" id="noresults"></span>
            </div>
            
            
            <div class="cards-div" id="cards-container">
                

                <div class="cards" data-name="editor">
                    <div class="card-img">
                        <img src="../../images/man1.png" class="card-images">
                    </div>
                    <div class="card-data">
                        <div class="card-name">Hari</div>
                        <div class="card-skill">Developer</div>
                        <div class="card-email" id="card-email">harikiran.b2007@gmail.com</div>
                        <div class="card-location">Rajahmundry</div>
                        <div class="card-rating">4 out of 5</div>    
                        <div class="request-btn-div">
                            <a href="" class="request-btn" id="request-btn">Hire</a>    
                        </div>
                
                    </div>
                    
                </div>
    

                <div class="cards" data-name="web developer">
                    <div class="card-img">
                        <img src="../../images/avatar.png" class="card-images">
                    </div>
                    <div class="card-data">
                        <div class="card-name">Tejaswini</div>
                        <div class="card-skill">Editing</div>
                        <div class="card-email" id="card-email">tejaswini@gmail.com</div>
                        <div class="card-location">anaparthi</div>
                        <div class="card-rating">5 out of 5</div> 
                        <div class="request-btn-div">
                            <a href="" class="request-btn" id="request-btn">Hire</a>    
                        </div>   
                    </div>
                </div>


                <div class="cards" data-name="Content Writing">

                    <div class="card-img">
                        <img src="../../images/man4.png" class="card-images">
                    </div>
                    <div class="card-data">
                        <div class="card-name">Chandra</div>
                        <div class="card-skill">develper</div>
                        <div class="card-email" id="card-email">chandra@gmail.com</div>
                        <div class="card-location">Tuni</div>
                        <div class="card-rating">4 out of 5</div>   
                        <div class="request-btn-div">
                            <a href="" class="request-btn" id="request-btn">Hire</a>    
                        </div> 
                    </div>
                </div>
    
                <div class="cards" data-name="Photographer">
                    <div class="card-img">
                        <img src="../../images/man6.png" class="card-images">
                    </div>
                    <div class="card-data">
                        <div class="card-name">Harsha</div>
                        <div class="card-skill">Content Writing</div>
                        <div class="card-email" id="card-email">harsha@gmail.com</div>
                        <div class="card-location">Ramesampeta</div>
                        <div class="card-rating">4 out of 5</div>   
                        <div class="request-btn-div">
                            <a href="" class="request-btn" id="request-btn">Hire</a>    
                        </div> 
                    </div>
                </div>

                <div class="cards" data-name="web developer">
                    <div class="card-img">
                        <img src="../../images/avatar2.png" class="card-images">
                    </div>
                    <div class="card-data">
                        <div class="card-name">Asritha</div>
                        <div class="card-skill">Graphic designing</div>
                        <div class="card-email" id="card-email">asritha@gmail.com</div>
                        <div class="card-location">Kakinada</div>
                        <div class="card-rating">4 out of 5</div>
                        <div class="request-btn-div">
                            <a href="" class="request-btn" id="request-btn">Hire</a>    
                        </div>
                    </div>
                </div>

                <div class="cards" data-name="content Writing">
                    <div class="card-img">
                        <img src="../../images/man3.png" class="card-images">
                    </div>
                    <div class="card-data">
                        <div class="card-name">Rakshan</div>
                        <div class="card-skill">Content Writing</div>
                        <div class="card-email" id="card-email">rakshan@gmail.com</div>
                        <div class="card-location">Kakinada</div>
                        <div class="card-rating">4 out of 5</div>
                        <div class="request-btn-div">
                            <a href="mailto:harikiran8679@gmail.com" class="request-btn" id="request-btn">Hire</a>    
                        </div>
                    </div>
                </div>
    
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
            <a style="color:#ffecd1" href="clientz.php">For Clients</a> <br>
            <a style="color:#ffecd1" href="../about/howtohire.php">How does it work?</a> <br>
            <a style="color:#ffecd1" href="../about/aboutuspage.php">About Us</a>
        </div>
        <div class="Margin1">
            <p>Provide us with a review over here:<a href="mailto:chandrachintu2007@gmail.com"><img src="../../images/Gmail.png" height="16px" width="20px" alt=""></a> </p>
        </div>
    </div>

    <script>
        document.getElementById("srchbtn").addEventListener("click", function() {
            const query = document.getElementById("search").value.toLowerCase().trim();
            const cards = document.querySelectorAll(".cards");
            let matchFound = false;
            let noresults = document.getElementById("noresults");
            cards.forEach(card => {
                const name = card.getAttribute("data-name").toLowerCase();
                if (name.includes(query)) {
                    card.style.display = "flex"; // Show matching cards
                    matchFound = true;
                } else {
                    card.style.display = "none"; // Hide non-matching cards
                }

                
            });
            if(matchFound ===false){
                noresults.textContent = "No results Found";
            }
            else
            {
                noresults.textContent = "";
            }
        });

        
        

       
        document.getElementById("filterbtn").addEventListener("click", function(event) {
            let dropdowncont = document.getElementById("dropdowncontainer");
            dropdowncont.style.display = (dropdowncont.style.display === "flex") ? "none" : "flex";
            if(dropdowncont.style.display==="flex"){
                dropdowncont.style.flexDirection = "column";
            }
            
            event.stopPropagation(); // Prevent click event from bubbling up
        });

        document.addEventListener("click", function(event) {
            let dropdowncont = document.getElementById("dropdowncontainer");
            let filterBtn = document.getElementById("filterbtn");
            // Close the dropdown if the click is outside of the dropdown or filter button
            if (!dropdowncont.contains(event.target) && event.target !== filterBtn) {
                dropdowncont.style.display = "none";
            }
        });

        //email request javascript


        document.addEventListener('DOMContentLoaded', function() {
            const requestBtns = document.querySelectorAll(".request-btn");
            requestBtns.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default link behavior
                    
                    // Instead of using `this`, use `event.target` to get the clicked button
                    const buttonClicked = event.target;
        
                    // Find the closest `.cards` ancestor of the clicked button
                    const cardElement = buttonClicked.closest('.cards');
        
                    // Now, find the email within that `.cards` element
                    const email = cardElement.querySelector('.card-email')?.textContent.trim() || '';
        
                    if (email && email.includes('@')) {
                        buttonClicked.href = `mailto:${email}?subject=Request%20for%20Freelance%20Work&body=Hello,%0AI%20am%20interested%20in%20discussing%20a%20freelance%20opportunity%20with%20you.%0APlease%20get%20in%20touch%20with%20me.%0A%0ABest%20regards,%0A[Your%20Name]`;
                        window.location.href = buttonClicked.href; // Trigger the mailto link
                    }
                });
            });
        });


        
        
        
    </script>

</body>
</html>