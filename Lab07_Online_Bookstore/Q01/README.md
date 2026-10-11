# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q01

**Question:** Design the homepage of the online bookstore featuring featured books, search bar, category navigation, and promotional banners using HTML and CSS.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/index.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q1. Design the homepage of the online bookstore featuring featured books, search bar, category navigation, and promotional banners using HTML and CSS.

**File: `header.php`**

```php
<?php require_once __DIR__ . '/db.php'; ?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BookNest</title><link rel="stylesheet" href="style.css"></head><body>
<header class="top">
  <a class="logo" href="index.php">BookNest</a>
  <form action="search.php" method="get" class="sbar"><input name="q" placeholder="Search title, author..."><button>Search</button></form>
  <nav>
    <a href="cart.php">Cart (<?= array_sum($_SESSION['cart'] ?? []) ?>)</a>
    <?php if (!empty($_SESSION['uid'])): ?>
      <a href="orders.php">My Orders</a><a href="wishlist.php">Wishlist</a><a href="logout.php">Logout</a>
    <?php else: ?><a href="login.php">Login</a><a href="register.php">Register</a><?php endif; ?>
  </nav>
</header>
<div class="cats"><a href="search.php?cat=Fiction">Fiction</a><a href="search.php?cat=Technology">Technology</a>
<a href="search.php?cat=Science">Science</a><a href="search.php?cat=History">History</a></div>
```

**File: `index.php`**

```php
<?php include 'header.php'; ?>
<section class="banner"><h1>Monsoon Sale</h1><p>Up to 30% off on bestsellers</p></section>
<h2 class="ttl">Featured Books</h2>
<div class="grid">
<?php foreach ($pdo->query("SELECT * FROM books ORDER BY id DESC LIMIT 8") as $b): ?>
  <div class="card">
    <img src="images/<?= e($b['image']) ?>" alt="<?= e($b['title']) ?>">
    <h3><a href="book.php?id=<?= $b['id'] ?>"><?= e($b['title']) ?></a></h3>
    <p><?= e($b['author']) ?></p><b>Rs. <?= e($b['price']) ?></b>
  </div>
<?php endforeach; ?>
</div>
<?php include 'footer.php'; ?>
```

**File: `style.css`**

```css
body{margin:0;font-family:Arial,sans-serif;background:#f7f7fb}
.top{display:flex;gap:20px;align-items:center;padding:12px 24px;background:#1f2a44;color:#fff}
.top a{color:#fff;text-decoration:none;margin-right:12px}.logo{font-size:22px;font-weight:bold}
.sbar{flex:1}.sbar input{width:60%;padding:8px}.sbar button{padding:8px 14px}
.cats{background:#e9ecf6;padding:10px 24px}.cats a{margin-right:18px;text-decoration:none;color:#1f2a44}
.banner{background:linear-gradient(90deg,#ff8a00,#e52e71);color:#fff;text-align:center;padding:40px}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:18px;padding:0 24px 24px}
.card{background:#fff;padding:12px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,.12);text-align:center}
.card img{width:100%;height:200px;object-fit:cover}.ttl{padding:0 24px}
.foot{text-align:center;padding:20px;background:#1f2a44;color:#fff;margin-top:30px}
```

**File: `footer.php`**

```php
<footer class="foot">&copy; 2026 BookNest</footer>
</body></html>
```
