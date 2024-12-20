<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT id, password_hash FROM users WHERE username = ?');
    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $passwordHash);
            $stmt->fetch();
            if (password_verify($password, $passwordHash)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username; // Optional: Store username for personalization
                header("Location: index.php"); // Redirect to dashboard
                exit;
            } else {
                echo "Invalid credentials.";
            }
        } else {
            echo "User not found.";
        }
        $stmt->close();
    } else {
        echo "Statement preparation failed!";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password_confirm'];

    if ($password !== $passwordConfirm) {
        die('Passwords do not match.');
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare('INSERT INTO users (username, password_hash) VALUES (?, ?)');
    if ($stmt) {
        $stmt->bind_param('ss', $username, $passwordHash);
        if ($stmt->execute()) {
            echo "Registration successful!" ;
            header("Location: login.php"); 
                exit;
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Statement preparation failed!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <title>Document</title>
</head>
<body>

        <header>
            <h2 class="logo">LOGO</h2>
            <nav class="navigation">
                
                <button class="btnLogin-popup">Login</button>
            </nav>
        </header>

        <div class="wrapper">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>
     
            <div class="form-box login">
                <h2>Login</h2>
                <form action="#" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input class="user" type="text" name="username" required><br>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input class="pass" type="text" name="password" required><br>
                        <label>Password</label>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Registration</h2>
                <form action="#" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input class="user" type="text" name="username"  required><br>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input class="pass" type="text" name="password"  required><br>
                        <label>Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input class="re" type="text" name="password_confirm"  required><br>
                        <label>Confirm Password</label>
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    
    
        <script src="function.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>