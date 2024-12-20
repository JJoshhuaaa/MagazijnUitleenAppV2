<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/index.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">
    <title>Magazijnuitleenapplicatie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:wght@400&family=Dosis:wght@200..800&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    require '../includes/header-section.php';
    ?>
    
    <main>
        <div class="content" id="section1">
    <section class="banner">
        <img class="banner-img" src="../frontend/images/VistaBanner.png" alt="banner"> 
        <div class="button-container">
            <button class="button type1">
                <span class="btn-txt"><i class="fas fa-user-plus"></i>Sign-in</span>
            </button>
            <button class="button type1">
                <span class="btn-txt"><i class="fas fa-box-open"></i>Products</span>
            </button>
        </div>
    </section>
    <?php
    require '../includes/footer-section.php';
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>