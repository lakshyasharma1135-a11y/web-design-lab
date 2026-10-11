# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q17

**Question:** Implement a wishlist feature allowing users to save books to a personal wishlist stored in the database.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/db.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q17. Implement a wishlist feature allowing users to save books to a personal wishlist stored in the database.

**File: `wishlist.php`**

```php
<?php include 'header.php'; require_login();
if (isset($_POST['add']))   $pdo->prepare("INSERT IGNORE INTO wishlist (user_id, book_id) VALUES (?, ?)")->execute([$_SESSION['uid'], (int)$_POST['book_id']]);
if (isset($_GET['remove'])) $pdo->prepare("DELETE FROM wishlist WHERE user_id = ? AND book_id = ?")->execute([$_SESSION['uid'], (int)$_GET['remove']]);
$st = $pdo->prepare("SELECT b.* FROM wishlist w JOIN books b ON b.id = w.book_id WHERE w.user_id = ?"); $st->execute([$_SESSION['uid']]);
?>
<div style="padding:24px"><h2>My Wishlist</h2>
<?php foreach ($st as $b): ?>
  <p><a href="book.php?id=<?= $b['id'] ?>"><?= e($b['title']) ?></a> - Rs. <?= $b['price'] ?> <a href="?remove=<?= $b['id'] ?>">Remove</a></p>
<?php endforeach; ?></div>
<?php include 'footer.php'; ?>
```
