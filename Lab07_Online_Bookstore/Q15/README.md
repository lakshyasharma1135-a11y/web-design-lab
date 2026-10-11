# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q15

**Question:** Design a user review and rating system where registered users can leave star ratings and comments on book detail pages.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/db.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q15. Design a user review and rating system where registered users can leave star ratings and comments on book detail pages.

**File: `book.php (add in the Reviews section)`**

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['review'])) {
    require_login();
    $r = max(1, min(5, (int)$_POST['rating']));
    $pdo->prepare("INSERT INTO reviews (book_id, user_id, rating, comment) VALUES (?, ?, ?, ?)")
        ->execute([$b['id'], $_SESSION['uid'], $r, trim($_POST['comment'])]);
}
$avg = $pdo->prepare("SELECT ROUND(AVG(rating),1) a, COUNT(*) c FROM reviews WHERE book_id = ?"); $avg->execute([$b['id']]); $a = $avg->fetch();
$rv = $pdo->prepare("SELECT r.*, u.name FROM reviews r JOIN users u ON u.id = r.user_id WHERE book_id = ? ORDER BY r.id DESC");
$rv->execute([$b['id']]);
?>
<div style="padding:0 24px"><h3>Reviews (<?= $a['c'] ?>) - Average: <?= $a['a'] ?? '-' ?>/5</h3>
<?php foreach ($rv as $x): ?>
  <p><b><?= e($x['name']) ?></b> <?= str_repeat('&#9733;', $x['rating']) . str_repeat('&#9734;', 5 - $x['rating']) ?><br><?= e($x['comment']) ?></p>
<?php endforeach; ?>
<?php if (!empty($_SESSION['uid'])): ?>
<form method="post"><select name="rating"><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option></select>
<textarea name="comment" placeholder="Your review"></textarea><button name="review">Submit Review</button></form>
<?php endif; ?></div>
```
