<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Itim&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Pacifico&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    @include('header-section')
    
    <main>
        <div class="content" id="section1">
            <!-- Banner -->
            <section class="banner">
                <h1>Magazijnuitleenapplicatie</h1>
            </section>
            <img class="achtergrond" src="{{ asset('images/banner.avif') }}" alt="Banner Image">
        </div>

        <div class="content" id="section2">
            <!-- Content for section 2 goes here -->
        </div>
        
        <div class="content" id="section3">
            <!-- Content for section 3 goes here -->
        </div>
    </main>

    @include('footer-section')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
