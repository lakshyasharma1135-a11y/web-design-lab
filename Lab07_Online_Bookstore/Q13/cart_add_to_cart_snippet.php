<?php
// Inside cart.php, after reading $id and $qty from POST
$stmt = $pdo->prepare("SELECT stock FROM books WHERE id = ?");
$stmt->execute([$id]);
$available = (int)$stmt->fetchColumn();

$new = ($_SESSION['cart'][$id] ?? 0) + $qty;
if ($new > $available) {
    $new = $available;
    echo "<p style='color:red'>Only $available copies in stock.</p>";
}
if ($new > 0) {
    $_SESSION['cart'][$id] = $new;
}
