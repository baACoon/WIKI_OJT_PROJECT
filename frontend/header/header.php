<?php

$current_page = basename($_SERVER['REQUEST_URI'], ".php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../header/header.css"> 
    <script defer src="script.js"></script> 
</head>
<body>

<header>
    <nav class="navbar">
        <div class="logo">
            <a href="../home/home.php">
                <img src="../images/secpedia.png" alt="Logo">
            </a>
        </div>

        <!-- Navigation Links -->
        <ul class="nav-links">
            <li><a href="../home/home.php" class="<?= ($current_page == 'home') ? 'active' : '' ?>">Home</a></li>
            <li><a href="../article/article.php" class="<?= ($current_page == 'article') ? 'active' : '' ?>">Article</a></li>
            <li><a href="../about/about.php" class="<?= ($current_page == 'about') ? 'active' : '' ?>">About</a></li>
            <li><a href="../contact/contact.php" class="<?= ($current_page == 'contact') ? 'active' : '' ?>">Contact Us</a></li>
        </ul>

        <!-- Right-side Icons & Buttons -->
        <div class="nav-right">
            <a href="faqs.php" class="btn-faq">FAQs</a>
            <button class="user-btn">
                <img src="../images/user.png" alt="">
            </button>
        </div>
    </nav>
</header>

</body>
</html>
