<?php
session_start();
require '../includes/header-section.php'; 
include '../includes/db_connection.php';  

// Инициализация корзины, если она ещё не создана
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Обработка действий с корзиной
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $id = $_POST['id'];

    

    switch ($action) {
        case 'remove':
            // Удаление товара из корзины
            $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($item) use ($id) {
                return $item['id'] != $id;
            });
            break;

        case 'clear':
            // Очистка всей корзины
            $_SESSION['cart'] = [];
            break;
    }
}

// Сумма всех товаров в корзине
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Your cart</h1>

        <?php if (!empty($_SESSION['cart'])): ?>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <tr>
                            <td><?= htmlspecialchars($item['name']) ?></td>
                            <td><?= number_format($item['price'], 2) ?> euro.</td>
                            <td><?= $item['quantity'] ?></td>
                            <td><?= number_format($item['price'] * $item['quantity'], 2) ?> euro.</td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" name="action" value="remove">
                                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="cart-total">
                <h3>Total amount: <?= number_format($total, 2) ?>  euro</h3>
            </div>

            <form method="POST">
                <input type="hidden" name="action" value="clear">
                <button class="btn btn-warning"><i class="fas fa-trash-alt"></i> Clear Cart</button>
            </form>
        <?php else: ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </div>
    <?php
    require '../includes/footer-section.php';
    ?>
</body>



</html>