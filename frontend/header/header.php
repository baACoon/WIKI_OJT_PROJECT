<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    <link rel="stylesheet" href="header.css"> 
    <script defer src="script.js"></script> 
</head>
<body>

<header>
    <nav class="navbar">
        <!-- Logo -->
        <div class="logo">
            <a href="index.php">
                <img src="logo.png" alt="Logo">
            </a>
        </div>

        <!-- Navigation Links -->
        <ul class="nav-links">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="article.php">Article</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>

        <!-- Right-side Icons & Buttons -->
        <div class="nav-right">
            <a href="faqs.php" class="btn-faq">FAQs</a>
            <button class="icon-btn"><img src="user-icon.png" alt="User"></button>
            <div class="dropdown">
                <button class="icon-btn settings-btn">
                    <img src="settings-icon.png" alt="Settings">
                </button>
                <div class="dropdown-content">
                    <p>Appearance</p>
                    <label class="switch">
                        <input type="checkbox" id="theme-toggle">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
    </nav>
</header>

</body>
</html>
