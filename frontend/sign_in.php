<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/sign-in.css">
    
    <title>Magazijnuitleenapplicatie - Sign In</title>
</head>
<body style="background-color: #f4a999;">

<?php
    require '../includes/header-section.php';
?>

    <main class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="max-width: 400px; width: 100%; background-color: #ec644a; border: none;">
            <h2 class="text-center text-white mb-4" style="font-family: 'Playwrite GB S', cursive;">Sign In</h2>
            <form action="#" method="post">
                <div class="form-group mb-3">
                    <label for="Fullname" class="form-label text-white">Volledige naam:</label>
                    <input type="text" class="form-control" id="Fullname" name="Fullname" required>
                </div>

                <div class="form-group mb-3">
                    <label for="Email" class="form-label text-white">E-mailadres:</label>
                    <input type="email" class="form-control" id="Email" name="Email" required>
                </div>

                <div class="form-group mb-4">
                    <label for="Password" class="form-label text-white">Wachtwoord:</label>
                    <input type="password" class="form-control" id="Password" name="Password" required>
                </div>
                
                <button type="submit" class="btn btn-custom w-100" style="background-color: #00555c; color: white;">Sign In</button>
            </form>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../frontend/header.js"></script>
</body>
</html>
