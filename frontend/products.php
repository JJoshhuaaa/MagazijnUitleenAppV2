<?php
session_start();
include '../includes/db_connection.php';


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];


    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $id) {
            $item['quantity'] += $quantity;  
            $found = true;
            break;
        }
    }


    if (!$found) {
        $_SESSION['cart'][] = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity
        ];
    }
}


$selectedCategory = isset($_GET['category']) ? $_GET['category'] : '';

$sql = "SELECT * FROM products";
if ($selectedCategory) {
    $sql .= " WHERE category = :category";
}

$stmt = $pdo->prepare($sql);


if ($selectedCategory) {
    $stmt->bindParam(':category', $selectedCategory, PDO::PARAM_STR);
}

$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

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

<?php require '../includes/header-section.php'; ?>

<main class="container">
    <section class="products-section">
        <h1 class="section-title"><i class="fas fa-box-open"></i> Products</h1>
        <div class="filters">
            <label for="category">Category:</label>
            <form method="GET" action="products.php">
                <select id="category" name="category" onchange="this.form.submit()">
                    <option value="">All</option>
                    <option value="Computers" <?php if ($selectedCategory === 'A') echo 'selected'; ?>>Computers</option>
                    <option value="Accessoires" <?php if ($selectedCategory === 'B') echo 'selected'; ?>>Accessoires</option>
                    <option value="Displays" <?php if ($selectedCategory === 'C') echo 'selected'; ?>>Displays</option>
                </select>
            </form>
        </div>
        

        <div class="products-grid">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <h2 class="product-title"><?= htmlspecialchars($product['name']) ?></h2>
                    <p class="product-description"><?= htmlspecialchars($product['description']) ?></p>
                    <p class="product-category">Category: <?= htmlspecialchars($product['category']) ?></p>
                    <p class="product-price">Price: <?= number_format($product['price'], 2) ?> euro.</p>
                    
                    <!-- Форма для добавления товара в корзину -->
                    <form method="POST" action="products.php">
                        <input type="hidden" name="id" value="<?= $product['id'] ?>">
                        <input type="hidden" name="name" value="<?= $product['name'] ?>">
                        <input type="hidden" name="price" value="<?= $product['price'] ?>">
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity" min="1" value="1" required>
                        <button type="submit" class="btn btn-add-to-cart"><i class="fas fa-cart-plus"></i> Add to your cart</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php require '../includes/footer-section.php'; ?>

</body>
</html>
