# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q04

**Question:** Build a book detail page in PHP that retrieves a specific book's information using its ID passed via URL (GET).

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/book.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q4. Build a book detail page in PHP that retrieves a specific book's information using its ID passed via URL (GET).

**File: `book.php`**

```php
<?php include 'header.php';
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$stmt = $pdo->prepare("SELECT * FROM books WHERE id = ?");
$stmt->execute([$id]);
$b = $stmt->fetch();
if (!$b) { die("Book not found"); }
?>
<div style="padding:24px">
  <img src="images/<?= e($b['image']) ?>" width="220" alt="">
  <h2><?= e($b['title']) ?></h2>
  <p>by <?= e($b['author']) ?> | <?= e($b['category']) ?></p>
  <h3>Rs. <?= e($b['price']) ?></h3>
  <p><?= $b['stock'] > 0 ? "In stock: " . (int)$b['stock'] : "<b style='color:red'>Out of stock</b>" ?></p>
  <form method="post" action="cart.php">
    <input type="hidden" name="book_id" value="<?= $b['id'] ?>">
    <input type="number" name="qty" value="1" min="1" max="<?= (int)$b['stock'] ?>">
    <button name="add">Add to Cart</button>
  </form>
  <form method="post" action="wishlist.php"><input type="hidden" name="book_id" value="<?= $b['id'] ?>"><button name="add">Add to Wishlist</button></form>
</div>
<!-- Reviews: Q15 -->
<?php include 'footer.php'; ?>
```
