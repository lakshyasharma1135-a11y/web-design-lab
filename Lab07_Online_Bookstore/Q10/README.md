# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q10

**Question:** Incorporate a search and filter feature in PHP allowing users to search books by title, author, or category.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/search.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q10. Incorporate a search and filter feature in PHP allowing users to search books by title, author, or category.

**File: `search.php`**

```php
<?php include 'header.php';
$q = trim($_GET['q'] ?? ''); $cat = $_GET['cat'] ?? '';
$sql = "SELECT * FROM books WHERE 1=1"; $p = [];
if ($q !== '')   { $sql .= " AND (title LIKE ? OR author LIKE ?)"; $p[] = "%$q%"; $p[] = "%$q%"; }
if ($cat !== '') { $sql .= " AND category = ?"; $p[] = $cat; }
$st = $pdo->prepare($sql); $st->execute($p);
?>
<h2 class="ttl">Results</h2><div class="grid">
<?php foreach ($st as $b): ?>
  <div class="card"><h3><a href="book.php?id=<?= $b['id'] ?>"><?= e($b['title']) ?></a></h3><p><?= e($b['author']) ?></p><b>Rs. <?= $b['price'] ?></b></div>
<?php endforeach; ?></div>
<?php include 'footer.php'; ?>
```
