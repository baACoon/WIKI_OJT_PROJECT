<?php
session_start();
$servername = "localhost"; // your server
$username = "root"; // your username
$password = ""; // your password
$dbname = "wiki"; // your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Registration
if (isset($_POST['reg_user'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

    // Check if passwords match
    if ($password_1 != $password_2) {
        echo "Passwords do not match.";
        exit();
    }

    // Hash password before storing it
    $hashed_password = password_hash($password_1, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        header('Location: welcome.php'); // Redirect to a welcome page or dashboard
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle Login
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if user exists
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header('Location: welcome.php'); // Redirect to a welcome page or dashboard
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "No user found with that username.";
    }
}

$conn->close();
?>
