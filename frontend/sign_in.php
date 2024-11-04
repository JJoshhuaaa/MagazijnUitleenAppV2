<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazijnuitleenapplicatie - Sign In</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:wght@400&family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../assets/css/sign-in.css">
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

                <div class="form-group mb-4">
                    <label for="Email" class="form-label text-white">E-mailadres:</label>
                    <input type="email" class="form-control" id="Email" name="Email" required>
                </div>

                <button type="submit" class="btn btn-custom w-100">Sign In</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
