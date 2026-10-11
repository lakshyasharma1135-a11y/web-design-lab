# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q09

**Question:** Write a PHP script enabling administrators to view all customer orders and update order fulfillment status (Pending, Shipped, Delivered).

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/db.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q9. Write a PHP script enabling administrators to view all customer orders and update order fulfillment status (Pending, Shipped, Delivered).

**File: `admin/orders.php`**

```php
<?php require '../db.php'; require_admin();
if (isset($_POST['status'])) {
    $pdo->prepare("UPDATE orders SET status = ? WHERE id = ?")->execute([$_POST['status'], $_POST['id']]);
}
$rows = $pdo->query("SELECT o.*, u.name FROM orders o JOIN users u ON u.id = o.user_id ORDER BY o.id DESC")->fetchAll();
?>
<h2>All Orders</h2>
<table border="1" cellpadding="6"><tr><th>#</th><th>Customer</th><th>Total</th><th>Date</th><th>Status</th></tr>
<?php foreach ($rows as $o): ?>
<tr><td><?= $o['id'] ?></td><td><?= e($o['name']) ?></td><td><?= $o['total'] ?></td><td><?= $o['created_at'] ?></td>
<td><form method="post"><input type="hidden" name="id" value="<?= $o['id'] ?>">
<select name="status"><?php foreach (['Pending','Shipped','Delivered'] as $s): ?>
<option <?= $o['status'] === $s ? 'selected' : '' ?>><?= $s ?></option><?php endforeach; ?></select>
<button>Update</button></form></td></tr>
<?php endforeach; ?></table>
```
