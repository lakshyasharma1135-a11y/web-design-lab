# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q21

**Question:** Write a PHP script for administrators to view sales summary reports and total revenue generated.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/db.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q21. Write a PHP script for administrators to view sales summary reports and total revenue generated.

**File: `admin/reports.php`**

```php
<?php require '../db.php'; require_admin();
$sum = $pdo->query("SELECT COUNT(*) orders, COALESCE(SUM(total),0) revenue FROM orders")->fetch();
$top = $pdo->query("SELECT b.title, SUM(oi.qty) sold, SUM(oi.qty * oi.price) amt
                    FROM order_items oi JOIN books b ON b.id = oi.book_id
                    GROUP BY b.id ORDER BY sold DESC LIMIT 5");
$daily = $pdo->query("SELECT DATE(created_at) d, COUNT(*) n, SUM(total) t FROM orders GROUP BY DATE(created_at) ORDER BY d DESC LIMIT 7");
?>
<h2>Sales Report</h2>
<p>Total orders: <b><?= $sum['orders'] ?></b> | Total revenue: <b>Rs. <?= $sum['revenue'] ?></b></p>
<h3>Top selling books</h3>
<table border="1" cellpadding="6"><tr><th>Book</th><th>Sold</th><th>Amount</th></tr>
<?php foreach ($top as $r): ?><tr><td><?= e($r['title']) ?></td><td><?= $r['sold'] ?></td><td><?= $r['amt'] ?></td></tr><?php endforeach; ?></table>
<h3>Last 7 days</h3>
<table border="1" cellpadding="6"><tr><th>Date</th><th>Orders</th><th>Revenue</th></tr>
<?php foreach ($daily as $r): ?><tr><td><?= $r['d'] ?></td><td><?= $r['n'] ?></td><td><?= $r['t'] ?></td></tr><?php endforeach; ?></table>
```
