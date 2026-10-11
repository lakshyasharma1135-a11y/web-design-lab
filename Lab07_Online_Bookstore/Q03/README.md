# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q03

**Question:** Develop a PHP script to fetch and display available books dynamically from the MySQL database in a grid layout.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/books.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q3. Develop a PHP script to fetch and display available books dynamically from the MySQL database in a grid layout.

**File: `books.php`**

```php
<?php include 'header.php'; ?>
<h2 class="ttl">All Books</h2>
<div class="grid">
<?php foreach ($pdo->query("SELECT * FROM books ORDER BY title") as $b): ?>
  <div class="card">
    <img src="images/<?= e($b['image']) ?>" alt="<?= e($b['title']) ?>">
    <h3><a href="book.php?id=<?= $b['id'] ?>"><?= e($b['title']) ?></a></h3>
    <p><?= e($b['author']) ?></p>
    <b>Rs. <?= e($b['price']) ?></b>
  </div>
<?php endforeach; ?>
</div>
<?php include 'footer.php'; ?>
```
