# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q06

**Question:** Create a shopping cart system using PHP sessions ($_SESSION['cart']) allowing users to add books, update quantities, and remove items.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/cart.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q6. Create a shopping cart system using PHP sessions ($_SESSION['cart']) allowing users to add books, update quantities, and remove items.

**File: `cart.php`**

```php
<?php include 'header.php';
$cart = &$_SESSION['cart'];
if (!isset($cart)) $cart = [];

if (isset($_POST['add'])) {                       // add (stock check Q13)
    $id = (int)$_POST['book_id']; $qty = max(1, (int)$_POST['qty']);
    $stock = $pdo->prepare("SELECT stock FROM books WHERE id = ?"); $stock->execute([$id]);
    $avail = (int)$stock->fetchColumn();
    $new = ($cart[$id] ?? 0) + $qty;
    if ($new > $avail) { $new = $avail; echo "<p style='color:red;padding:0 24px'>Only $avail in stock.</p>"; }
    if ($new > 0) $cart[$id] = $new;
}
if (isset($_POST['update'])) {                    // update quantity
    foreach ($_POST['qty'] as $id => $q) { if ((int)$q <= 0) unset($cart[$id]); else $cart[(int)$id] = (int)$q; }
}
if (isset($_GET['remove'])) unset($cart[(int)$_GET['remove']]);   // remove

$total = 0;
?>
<form method="post" style="padding:24px"><h2>Your Cart</h2>
<table border="1" cellpadding="8"><tr><th>Book</th><th>Price</th><th>Qty</th><th>Subtotal</th><th></th></tr>
<?php foreach ($cart as $id => $qty):
    $s = $pdo->prepare("SELECT * FROM books WHERE id = ?"); $s->execute([$id]); $b = $s->fetch();
    $sub = $b['price'] * $qty; $total += $sub; ?>
  <tr><td><?= e($b['title']) ?></td><td><?= $b['price'] ?></td>
      <td><input type="number" name="qty[<?= $id ?>]" value="<?= $qty ?>" min="0" max="<?= $b['stock'] ?>"></td>
      <td><?= $sub ?></td><td><a href="cart.php?remove=<?= $id ?>">Remove</a></td></tr>
<?php endforeach; ?>
</table>
<p><b>Total: Rs. <?= $total ?></b></p>
<button name="update">Update Cart</button> <a href="checkout.php">Proceed to Checkout</a>
</form>
<?php include 'footer.php'; ?>
```
