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
