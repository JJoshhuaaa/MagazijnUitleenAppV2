<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/sign-in.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Magazijnuitleenapplicatie - Sign Up</title>
</head>
<body style="background-color: #ec644a;">

<?php
    require '../includes/header-section.php';
?>

<div class="login-container">
    <div class="left-side">
        <h2>Welcome!</h2>
        <a href="sign_in.php" class="signup-btn">Login</a>
    </div>
    
    <div class="right-side">
        <div class="login-form">
            <h2>Sign-up</h2>
            <div class="input-container">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" class="input-field">
            </div>
            <div class="input-container">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" class="input-field">
            </div>
            <div class="input-container">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" class="input-field">
            </div>
            <button class="login-btn">Sign Up</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../frontend/header.js"></script>
</body>
</html>
