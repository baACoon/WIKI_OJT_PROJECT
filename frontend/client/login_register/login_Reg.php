<?php 
include($_SERVER['DOCUMENT_ROOT'] . '/WIKI_OJT_PROJECT/backend/routes/user.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECpedia</title>
    <link rel="stylesheet" href="login.css">
    <script defer src="script.js"></script>
</head>
<body>

    <div class="sec-container">
        <div class="sec-card">
            <div class="sec-inner-card" id="sec-card">
                <!-- Login Form -->
                <div class="sec-card-front">
                   <div class="sec-card-front-left">
                         <div class="fronttitleleft">
                            <h4>Securities<span> and</span></h4>
                            <h4>Exchange</h4>
                            <h4>Commission</h4>
                            <h6>PHILIPPINES</h6>
                         </div>
                         <div class="frontimagelogo">
                            <img src="../images/secpedia.png" alt="">
                         </div>

                   </div>
                   <div class="sec-card-front-right">
                        <div class="fronttitle">
                            <h1><span>Sec</span>pedia</h1>
                        </div>
                        <form action="/WIKI_OJT_PROJECT/backend/routes/user.php" method="POST">
                            <?php 
                            // Display error messages
                                if (isset($_SESSION['errors'])) {
                                    $errors = $_SESSION['errors']; 
                                    unset($_SESSION['errors']); // Clear errors after displaying
                                    include('errors.php'); 
                                }
                            ?>
                            <div class="userauth">
                                <label for="">Username</label>
                                <input type="text" name="username" placeholder="Enter your username" required>
                            </div>
                            <div class="passauth">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Enter your password" required>
                            </div>

                            <button class="loginbtn" type="submit" name="login_user">Login</button>
                        </form>
                        <p>Don't have an account? <a href="#" id="sec-flip-to-register">Register</a></p>

                   </div>
                </div>

                <!-- Register Form -->
                <div class="sec-card-back">
                    <div class="sec-card-back-left">
                        <h1><span>Sec</span>pedia</h1>
                        <form action="/WIKI_OJT_PROJECT/backend/routes/user.php" method="POST">
                            <div class="userauth">
                                <label for="">Email</label>
                                <input type="text" name="email" placeholder="Enter your email" value="<?php echo $email; ?>" required>
                            </div>

                            <div class="userauth">
                                <label for="">Username</label>
                                <input type="text" name="username" placeholder="Enter your username" value="<?php echo $username;?>" required>
                            </div>  
                            
                            <div class="passauth">
                                <label for="">Password</label>
                                <input type="password" name="password_1" placeholder="Enter your password" required>
                            </div>

                            <div class="passauth">
                                <label for="">Confirm Password</label>
                                <input type="password" name="password_2" placeholder="Enter your password" required>
                            </div>

                            <button class="regbtn" type="submit" name="reg_user">Register</button>

                        </form>
                        <p>Already have an account? <a href="#" id="sec-flip-to-login">Login</a></p>
                    </div>

                    <div class="sec-card-back-right">
                    <div class="fronttitleleft">
                            <h4>Securities<span> and</span></h4>
                            <h4>Exchange</h4>
                            <h4>Commission</h4>
                            <h6>PHILIPPINES</h6>
                         </div>
                         <div class="frontimagelogo">
                            <img src="../images/secpedia.png" alt="">
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const secCard = document.getElementById("sec-card");
            const secFlipToRegister = document.getElementById("sec-flip-to-register");
            const secFlipToLogin = document.getElementById("sec-flip-to-login");

            secFlipToRegister.addEventListener("click", function (event) {
                event.preventDefault();
                secCard.classList.add("sec-flipped");
            });

            secFlipToLogin.addEventListener("click", function (event) {
                event.preventDefault();
                secCard.classList.remove("sec-flipped");
            });
        });
    </script>

</body>
</html>