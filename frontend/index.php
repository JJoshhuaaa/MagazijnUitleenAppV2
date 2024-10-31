<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/index.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    require '../includes/header-section.php';
    ?>
    
    <main>
        <div class="content" id="section1">
                <!-- Banner -->
    <section class="banner">
        <h1>!@#123</h1>
        <p>text</p>
        <div class="banner-buttons">
            <button>Register</button>
            <button>Login</button>
            <button>View Catalog</button>
        </div>
    </section>

    <!-- Main Content -->
    <main>
        <!-- Item Catalog -->
        <section class="catalog">
            <aside class="filters">
                <h2>Filter By</h2>
                <ul>
                    <li><label><input type="checkbox"> Availability</label></li>
                    <li><label><input type="checkbox"> Location</label></li>
                    <li><label><input type="checkbox"> Category</label></li> 
                </ul>
            </aside>
            <div class="item-list">
                <div class="item-card">
                    <img src="item-image.jpg" alt="Item">
                    <h3>Item Name</h3>
                    <button>Borrow Now</button>
                </div>
                <!-- Repeat item cards as needed -->
            </div>
        </section>

        <!-- User Dashboard -->
        <section class="dashboard">
            <h2>My Dashboard</h2>
            <div class="tabs">
                <button>Borrowing History</button>
                <button>Current Borrowed Items</button>
                <button>Account Settings</button>
            </div>
            <div class="dashboard-content">
                <p>Your borrowed items will appear here.</p>
            </div>
        </section>
    </main>
        </div>
        
        <div class="content" id="section2">
            
        </div>
        
        <div class="content" id="section3">
            
        </div>

    </main>

    <?php
    require '../includes/footer-section.php';
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>