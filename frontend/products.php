<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/products.css">
</head>
<body>
<?php
require '../includes/header-section.php';
require '../includes/db_connection.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$is_admin = isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';

// Fetch all products from the database
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

<main class="container">
    <section class="products-section">
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

<?php
require '../includes/footer-section.php';
?>
</body>
</html>
