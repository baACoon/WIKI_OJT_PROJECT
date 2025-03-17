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
    <div class="container">
        <div class="card">
            <div class="inner-card" id="card">
                <!-- Login Form -->
                <div class="card-front">
                    <h2>Login</h2>
                    <form action="auth.php" method="POST">
                        <input type="text" name="username" placeholder="Username" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit" name="login">Login</button>
                    </form>
                    <p>Don't have an account? <a href="#" id="flip-to-register">Register</a></p>
                </div>
                <!-- Register Form -->
                <div class="card-back">
                    <h2>Register</h2>
                    <form action="auth.php" method="POST">
                        <input type="text" name="new_username" placeholder="Username" required>
                        <input type="password" name="new_password" placeholder="Password" required>
                        <button type="submit" name="register">Register</button>
                    </form>
                    <p>Already have an account? <a href="#" id="flip-to-login">Login</a></p>
                </div>
            </div>
        </div>
    </div>
   
   
    <script>
        document.getElementById("flip-to-register").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("card").classList.add("flipped");
        });
        document.getElementById("flip-to-login").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("card").classList.remove("flipped");
        });
    </script>
</body>
</html>