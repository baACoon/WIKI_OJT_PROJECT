<?php include '../header/header.php'; ?>
<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">   
    <link rel="stylesheet" href="./modal/modal.css"> <!-- External CSS for modal -->
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
    <title>HOME | SEC</title>
</head>
<body>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
           
          <div class="modalmaincontent">
            <div class="modalcontentleft">
                <div class="modaltitle">
                    <h2><span>SEC</span>pedia</h2>
                </div>
                <img src="../images/secpedia.png" alt="">
            </div>
            <div class="modalcontentright">
                <div class="modalcontentrighttop">
                    <p>SECpedia is an open and community-driven platform designed to provide accurate, up-to-date, and editable information about the Securities and Exchange Commission (SEC), business regulations, company registration, investment guidelines, and compliance requirements.</p>
                </div>
                <div class="modalcontentrightbottom">
                        <p> What Can You Do Here?  </p> 
                        <ul>
                            <li> Explore SEC-related topics such as business registration, stock market regulations, and investor protection.</li>
                            <li>Edit & Contribute by improving existing articles, adding new insights, and ensuring information remains accurate and updated.</li>
                            <li>Track Changes with a transparent edit history, allowing users to see modifications and revert outdated information if needed.</li>
                            <li>Discuss & Collaborate with industry professionals, investors, and business owners in an open discussion forum to share insights and best practices.</li>
                        </ul>

                        </p>
                </div>
            </div>
          </div>
          <div class="modalgotitbtn">
                <button class="gotit-btn">Got it!</button>
          </div>
        </div>
    </div>

    <main class="maincontent-page">
        <h1><span>SEC</span>PEDIAS</h1>
        <p>Welcome to <span class="pempasize">SECPEDIA</span>, the collaborative platform where you can learn, contribute, and share knowledge about business registration, compliance, investor protection, and SEC regulations.</p>
    </main>

    <section class="featured-section">
        <div class="searchcontainer">
            <input type="search" placeholder="Search...">
            <label for="">Search for topics, companies or regulations</label>
        </div>
       <div class="headerarticle">
           <h4>Featured Articles</h4>
            <hr>
       </div>
        <div class="featured-container">    
            <div class="container1"></div>
            <div class="container2"></div>
            <div class="container3"></div>
        </div>
    </section>

    <section class="inthenews-section"> 
        <div class="headerarticle">
            <h4>In The News</h4>
            <hr>
        </div>
        <div class="inthenews-container"></div>
    </section>

    <section class="qoutes-section"> 
        <div class="headerarticle">
            <h4>Quote of the Day</h4>
            <hr>
        </div>
        <div class="qoutescontainer">
            <h5>"Every day is a new beginning, a fresh canvas. Embrace the opportunity to create your best day yet!"</h5>
        </div>
    
    <div class="datecontainer">
        <p class="date">March 12, 2025</p>
    </div>
    </section>

    <script src="./modal/modal.js"></script> <!-- External JavaScript file for modal functionality -->
</body>
</html>
