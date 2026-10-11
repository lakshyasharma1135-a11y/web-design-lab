# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q11

**Question:** Implement pagination in PHP to display a limited number of books per page with page number links.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/books.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q11. Implement pagination in PHP to display a limited number of books per page with page number links.

**File: `books.php`**

```php
<?php include 'header.php';
$per = 8;
$page = max(1, (int)($_GET['page'] ?? 1));
$total = (int)$pdo->query("SELECT COUNT(*) FROM books")->fetchColumn();
$pages = ceil($total / $per);
$st = $pdo->prepare("SELECT * FROM books ORDER BY id LIMIT :l OFFSET :o");
$st->bindValue(':l', $per, PDO::PARAM_INT); $st->bindValue(':o', ($page - 1) * $per, PDO::PARAM_INT);
$st->execute();
?>
<div class="grid"><?php foreach ($st as $b): ?>
  <div class="card"><h3><?= e($b['title']) ?></h3><b>Rs. <?= $b['price'] ?></b></div><?php endforeach; ?></div>
<p style="text-align:center">
<?php for ($i = 1; $i <= $pages; $i++): ?>
  <a href="?page=<?= $i ?>" <?= $i == $page ? 'style="font-weight:bold"' : '' ?>><?= $i ?></a>
<?php endfor; ?></p>
<?php include 'footer.php'; ?>
```
