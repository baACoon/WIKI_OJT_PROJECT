<?php include '../header/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="article.css">   
    
    <title>EXPLORE | SEC</title>
</head>
<body>
    <main class="explorepage">
        <div class="xploresearchsection">
            <div class="searchcontainer">
                <input type="search" placeholder="Search...">
                <label for="">Search for topics, companies or regulations</label>
            </div>      
        </div>
        <div class="xtabsection">
    <div class="tabsectionleft" id="mainSection">Articles</div>
    <div class="tabsectionright">
        <ul>
            <li onclick="swapContent(this)">Articles</li> <!-- ✅ Add Articles -->
            <li onclick="swapContent(this)">Announcements</li>
            <li onclick="swapContent(this)">Events</li>
            <li onclick="swapContent(this)">News</li>
        </ul>
    </div>
</div>

<!-- Sections for Each Tab -->
<div class="content-section" id="articlesSection">
    <h6>New Articles</h6>
    <div class="articlecontainer">
        <div class="articleleft"></div>
        <div class="articleright">
            <h2 class="articletitle">Article Title I</h2>
                <div class="articleauth">
                    <p> Author: Loren iposum</p>
                    <p>Last Updated: [date]: Loren ipsum</p>
                </div>
            <div class="articletext">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
            </div>
            <div class="articlebtn">
                <button>Read more</button>
            </div>
        </div>
    </div>

    <div class="articlecontainer">
        <div class="articleleft"></div>
        <div class="articleright">
            <h2 class="articletitle">Article Title II</h2>
                <div class="articleauth">
                    <p> Author: Loren iposum</p>
                    <p>Last Updated: [date]: Loren ipsum</p>
                </div>
            <div class="articletext">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
            </div>
            <div class="articlebtn">
                <button>Read more</button>
            </div>
        </div>
    </div>

    <div class="articlecontainer">
        <div class="articleleft"></div>
        <div class="articleright">
            <h2 class="articletitle">Article Title III</h2>
                <div class="articleauth">
                    <p> Author: Loren iposum</p>
                    <p>Last Updated: [date]: Loren ipsum</p>
                </div>
            <div class="articletext">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
            </div>
            <div class="articlebtn">
                <button>Read more</button>
            </div>
        </div>
    </div>

</div>

<div class="content-section hidden" id="announcementsSection">
    <h6>New Announcements</h6>

    <div class="announcementcontainer">
        <div class="announceleft"></div>
        <div class="announceright">
            <h2 class="announcementitle">Announcement Title I</h2>
                <div class="announceauth">
                    <p> Author: Loren iposum</p>
                    <p>Last Updated: [date]: Loren ipsum</p>
                </div>
            <div class="announcetext">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
            </div>
            <div class="announcebtn">
                <button>Read more</button>
            </div>
        </div>
    </div>

    <div class="announcementcontainer">
        <div class="announceleft"></div>
        <div class="announceright">
            <h2 class="announcementitle">Announcement Title II</h2>
                <div class="announceauth">
                    <p> Author: Loren iposum</p>
                    <p>Last Updated: [date]: Loren ipsum</p>
                </div>
            <div class="announcetext">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
            </div>
            <div class="announcebtn">
                <button>Read more</button>
            </div>
        </div>
    </div>
</div>

<div class="content-section hidden" id="eventsSection">

    <p>This is the Events section content.</p>
</div>

<div class="content-section hidden" id="newsSection">
    <p>This is the News section content.</p>    
</div>


    </main>

    <script src="./swap.js"></script> <!-- External JavaScript file for modal functionality -->

</body>
<?php include '../footer/footer.php'; ?>

</html>