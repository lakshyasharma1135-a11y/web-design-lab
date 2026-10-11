# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q12

**Question:** Create a customer order history page where logged-in users can view their past purchases and status.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/orders.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q12. Create a customer order history page where logged-in users can view their past purchases and status.

**File: `orders.php`**

```php
<?php include 'header.php'; require_login();
$st = $pdo->prepare("SELECT * FROM orders WHERE user_id = ? ORDER BY id DESC"); $st->execute([$_SESSION['uid']]);
?>
<div style="padding:24px"><h2>My Orders</h2>
<table border="1" cellpadding="6"><tr><th>Order</th><th>Date</th><th>Total</th><th>Status</th><th></th></tr>
<?php foreach ($st as $o): ?>
<tr><td>#<?= $o['id'] ?></td><td><?= $o['created_at'] ?></td><td>Rs. <?= $o['total'] ?></td><td><?= $o['status'] ?></td>
<td><a href="invoice.php?id=<?= $o['id'] ?>">View</a></td></tr>
<?php endforeach; ?></table></div>
<?php include 'footer.php'; ?>
```
