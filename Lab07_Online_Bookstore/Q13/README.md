# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q13

**Question:** Build an inventory stock check in PHP that prevents users from adding more books to the cart than available stock.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/db.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q13. Build an inventory stock check in PHP that prevents users from adding more books to the cart than available stock.

**File: `cart.php (add-to-cart block)`**

```php
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
```
