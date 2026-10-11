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
