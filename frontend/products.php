<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/products.css">
</head>
<body>
    
<?php
require '../includes/header-section.php';
include '../includes/db_connection.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$is_admin = isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';

// Fetch all products from the database
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Voeg deze test data toe na de database connectie
$additional_products = [
    [
        'id' => 999,
        'name' => 'Test Product 1',
        'description' => 'This is a test product with some sample description text.',
        'category' => 'A',
        'quantity' => 10,
        'price' => 99.99
    ],
    [
        'id' => 998,
        'name' => 'Test Product 2',
        'description' => 'Another test product with different specifications.',
        'category' => 'B',
        'quantity' => 5,
        'price' => 149.99
    ],
    [
        'id' => 997,
        'name' => 'Test Product 3',
        'description' => 'Third test product with unique features.',
        'category' => 'C',
        'quantity' => 15,
        'price' => 79.99
    ],
    [
        'id' => 996,
        'name' => 'Test Product 4',
        'description' => 'Fourth test product for demonstration.',
        'category' => 'A',
        'quantity' => 8,
        'price' => 199.99
    ],
    [
        'id' => 995,
        'name' => 'Test Product 5',
        'description' => 'Fifth test product with sample information.',
        'category' => 'B',
        'quantity' => 12,
        'price' => 129.99
    ],
    [
        'id' => 994,
        'name' => 'Test Product 6',
        'description' => 'Sixth test product for layout testing.',
        'category' => 'C',
        'quantity' => 20,
        'price' => 89.99
    ]
];

// Voeg de test producten toe aan de bestaande producten array
foreach ($additional_products as $product) {
    $products[] = $product;
}

// Group products by category
$groupedProducts = [];
foreach ($products as $product) {
    $category = $product['category'];
    if (!isset($groupedProducts[$category])) {
        $groupedProducts[$category] = [];
    }
    $groupedProducts[$category][] = $product;
}

// Get the selected category from the query string
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : '';
?>
<div style="background-color: #ec644a;">
<main class="container">
    <section class="products-section" id="products-section">
        <br>
        <h1 class="section-title">Products</h1>
        <div class="filters">
            <label for="category">Category:</label>
            <select id="category" name="category" onchange="window.location.href = '?category=' + this.value;">
                <option value="">All</option>
                <option value="A" <?php if ($selectedCategory === 'A') echo 'selected'; ?>>Category A</option>
                <option value="B" <?php if ($selectedCategory === 'B') echo 'selected'; ?>>Category B</option>
                <option value="C" <?php if ($selectedCategory === 'C') echo 'selected'; ?>>Category C</option>
            </select>
        </div>
        <div class="products-grid">

        
            <?php
            // Display products based on the selected category
            if ($selectedCategory === '') {
                foreach ($groupedProducts as $category => $products) {
                    foreach ($products as $product) {
                        // Display product card
                    }
                }
            } else {
                if (isset($groupedProducts[$selectedCategory])) {
                    foreach ($groupedProducts[$selectedCategory] as $product) {
                        // Display product card
                    }
                }
            }
// ...
// Display products based on the selected category
if ($selectedCategory === '') {
    foreach ($groupedProducts as $category => $products) {
        foreach ($products as $product) {
            // Display product card
            $price = $product['price'];
            echo "<div class='product-card'>";
            echo "<h2 class='product-title'>{$product['name']}</h2>";
            echo "<p class='product-description'>{$product['description']}</p>";
            echo "<p class='product-category'>Category: {$product['category']}</p>";
            echo "<p class='product-quantity'>Quantity: {$product['quantity']}</p>";
            echo "<p class='product-price'>Price: $" . number_format($price, 2) . "</p>";
            echo "<div class='actions'>";
            echo "<a href='loan_product.php?id={$product['id']}' class='btn btn-loan'><i class='fas fa-hand-holding'></i> Loan</a>";
            if ($is_admin) {
                echo "<a href='edit_product.php?id={$product['id']}' class='btn btn-edit'><i class='fas fa-edit'></i> Edit</a>";
                echo "<a href='delete_product.php?id={$product['id']}' class='btn btn-delete' onclick='return confirm(\"Are you sure you want to delete this product?\")'><i class='fas fa-trash-alt'></i> Delete</a>";
            }
            echo "</div>";
            echo "</div>";
        }
    }
} else {
    if (isset($groupedProducts[$selectedCategory])) {
        foreach ($groupedProducts[$selectedCategory] as $product) {
            // Display product card
            $price = $product['price'];
            echo "<div class='product-card'>";
            echo "<h2 class='product-title'>{$product['name']}</h2>";
            echo "<p class='product-description'>{$product['description']}</p>";
            echo "<p class='product-category'>Category: {$product['category']}</p>";
            echo "<p class='product-quantity'>Quantity: {$product['quantity']}</p>";
            echo "<p class='product-price'>Price: $" . number_format($price, 2) . "</p>";
            echo "<div class='actions'>";
            echo "<a href='loan_product.php?id={$product['id']}' class='btn btn-loan'><i class='fas fa-hand-holding'></i> Loan</a>";
            if ($is_admin) {
                echo "<a href='edit_product.php?id={$product['id']}' class='btn btn-edit'><i class='fas fa-edit'></i> Edit</a>";
                echo "<a href='delete_product.php?id={$product['id']}' class='btn btn-delete' onclick='return confirm(\"Are you sure you want to delete this product?\")'><i class='fas fa-trash-alt'></i> Delete</a>";
            }
            echo "</div>";
            echo "</div>";
        }
    }
}
?>
        </div>
        <?php if ($is_admin): ?>
            <a href="add_product.php" class="btn btn-add"><i class="fas fa-plus"></i> Add New Product</a>
        <?php endif; ?>
    </section>
</main>
</div>
<?php
require '../includes/footer-section.php';
?>
</body>
</html>
